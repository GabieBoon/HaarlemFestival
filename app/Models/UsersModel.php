<?php

class UsersModel extends ModelBase
{
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

    public function __construct($user = '')
    {
        $table = 'Users';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete = true;
        if ($user != '') {
            if (is_int($user)) {
                $u = $this->_db->findFirstResult($table, ['conditions' => 'id = ?', 'bind' => [$user]]);
            } else {
                $u = $this->_db->findFirstResult($table, ['conditions' => 'userName = ?', 'bind' => [$user]]);
            }
            if ($u) {
                foreach ($u as $key => $val) {
                    $this->$key = $val;
                }
            }
        }
    }

    public function findByUsername($username)
    {
        return $this->findFirstResult(['conditions' => 'userName = ?', 'bind' => [$username]]);
    }

    public static function currentLoggedInUser()
    {
        if ((!isset(self::$currentLoggedInUser)) && (Session::sessionExists(CURRENT_USER_SESSION_NAME))) {
            $u = new UsersModel((int)Session::getSession(CURRENT_USER_SESSION_NAME));
            self::$currentLoggedInUser = $u;
        }
        return self::$currentLoggedInUser;
    }


    public function login($rememberMe = false)
    {
        Session::setSession($this->_sessionName, $this->id);
        if ($rememberMe) {
            $hash = md5(uniqid() . rand(0, 100));
            $userAgent = Session::userAgent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = [
                'session' => $hash,
                'user_agent' => $userAgent,
                'userId' => $this->id
            ];
            $this->_db->query("DELETE FROM User_Sessions WHERE userId = ? AND user_agent = ?", [$this->id, $userAgent]);
            $this->_db->insert('User_Sessions', $fields);
        }
    }

    public static function loginUserFromCookie()
    {
        $userSession = UserSessionsModel::getFromCookie(); 
        if ($userSession->userId != '') {
            $user = new self((int)$userSession->userId);
            $user->login();
            return $user; //self::$currentLoggedInUser;
        }
    }

    public function logout()
    {
        //delete stored cookie id from server
        $userSession = UserSessionsModel::getFromCookie();
        if ($userSession) {
            $foo = $userSession->deleteByID($userSession->id);
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


