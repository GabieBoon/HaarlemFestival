<?php

class UserModel extends ModelBase
{
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

    public function __construct($userIdentifier = null)
    {
        parent::__construct();
        //$table = 'User';
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete = true;

        // $sql = "select * from UserSession where userAgent = ? AND session = ?";
        // $bind = [Session::userAgent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)];
        // $userSession = $userSession->_db->query($sql, $bind)->getFirstResult();


        if (isset($userIdentifier)) {
            //$sql = '';
            if (is_int($userIdentifier)) {
                $u = $this->findByUserid($userIdentifier);
            } else {
                $u = $this->findByUsername($userIdentifier);
            }
            if ($u) {
                foreach ($u as $key => $val) {
                    $this->$key = $val;
                }
            }
        }
    }


    public function findByUserid($userid)
    {
        $sql = "select * from User where id = ?";
        $bind = [$userid];
       // return $this->_db->query($sql, $bind)->getFirstResult();
        return $this->query($sql, $bind)->getFirstResult();
    }

    public function findByUsername($username)
    {
        $sql = "select * from User where userName = ?";
        $bind = [$username];
        //return $this->_db->query($sql, $bind)->getFirstResult();
        return $this->query($sql, $bind)->getFirstResult();
    }

    public static function currentLoggedInUser()
    {
        $foo = (!isset(self::$currentLoggedInUser));
        $faa = (Session::sessionExists(CURRENT_USER_SESSION_NAME)); 
        if ($foo && $faa) {
            $u = new UserModel((int)Session::getSession(CURRENT_USER_SESSION_NAME));
            self::$currentLoggedInUser = $u;
        }
        return self::$currentLoggedInUser;
    }


    public function login(bool $rememberMe = false)
    {
        Session::setSession($this->_sessionName, $this->id);
        if ($rememberMe) {
            $hash = md5(uniqid() . rand(0, 100));
            $userAgent = Session::userAgent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = [
                'session' => $hash,
                'userAgent' => $userAgent,
                'userId' => $this->id
            ];
            $this->query("DELETE FROM UserSession WHERE userId = ? AND userAgent = ?", [$this->id, $userAgent]);
            $this->insert('UserSession', $fields);
        }
    }

    public static function loginUserFromCookie()
    {
        $userSession = UserSessionModel::getFromCookie();
        if ($userSession) {
            $user = new self((int)$userSession->userId);
            $user->login();
            return $user; //self::$currentLoggedInUser;
        }
    }

    public function logout()
    {
        //delete stored cookie id from server
        $userSession = UserSessionModel::getFromCookie();
        if ($userSession) {
            $foo = $this->deleteByID('UserSession',$userSession->id);// omschrijven naar query
        }

        //delete local session
        Session::deleteSession(CURRENT_USER_SESSION_NAME);
       
        //delete local cookie
        if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
            Cookie::delete(REMEMBER_ME_COOKIE_NAME);
        }

        //set current logged in user to null
        self::$currentLoggedInUser = null;
        return true;
    }




}


