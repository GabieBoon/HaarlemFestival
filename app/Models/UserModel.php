<?php

class UserModel extends ModelBase
{
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public $userId = null;
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
            if (is_int($userIdentifier)) {
                $u = $this->findByUserid($userIdentifier);
            } else {
                $u = $this->findByUsername($userIdentifier);
            }
            $this->getDataFromObj($u);
            //$this->getUserContactData($u);
        }//else if (isset(self::$currentLoggedInUser)) {
            # code...
        //}else {
            # code...
       // }

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

    public function getUserContactData($user)
    {
        $sql = "SELECT User.id AS userId, User.contactId AS contactId, User.userName, User.password, User.role, User.isActive, Contact.firstName, Contact.preposition, Contact.lastName, Contact.emailAdress ".
                "FROM User ".
                "JOIN Contact ON User.contactId=Contact.id ".
                "WHERE User.userName = ?;";
        $bind = [$user->userName];
        $user = $this->query($sql, $bind)->getFirstResult();

        $this->getDataFromObj($user);
    }
    

    public static function currentLoggedInUser()
    {
        if ((!isset(self::$currentLoggedInUser)) && (Session::sessionExists(CURRENT_USER_SESSION_NAME))) {
            $u = new UserModel((int)Session::getSession(CURRENT_USER_SESSION_NAME));
            self::$currentLoggedInUser = $u;
        }
        return self::$currentLoggedInUser;
    }


    public function login(bool $rememberMe = false)
    {
        Session::setSession($this->_sessionName, $this->userId);
        if ($rememberMe) {
            $hash = md5(uniqid() . rand(0, 100));
            $userAgent = Session::userAgent_no_version();
            Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
            $fields = [
                'session' => $hash,
                'userAgent' => $userAgent,
                'userId' => $this->id
            ];
            //$this->query("DELETE FROM UserSession WHERE userId = ? AND userAgent = ?", [$this->id, $userAgent]);
            $this->insert('UserSession', $fields);
        }
    }

    public static function loginUserFromCookie()
    {
        $userSession = UserSessionModel::getFromCookie();
        if ($userSession) {
            $user = new self((int)$userSession->userId);
            $user->login();
            self::$currentLoggedInUser = $user;
            return $user;
        }
    }

    public function logoutEverywhere()
    {
        $this->query("DELETE FROM UserSession WHERE user_id = ?", [$this->id]);
    }

    public function logout()
    {
        //delete stored cookie id from server
        UserSessionModel::delete();

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

    public function registerNewUser($params)
    {
        $this->assign($params);
        $this->deleted = 0;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->save();
    }



}


