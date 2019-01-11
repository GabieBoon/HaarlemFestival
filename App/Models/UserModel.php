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
            $user = $this->getUserData($userIdentifier, true, true);

            //$this->getDataFromObj($user);
            
        //}else if (isset(self::$currentLoggedInUser)) {
            # code...
        //}else {
            # code...
        }
    }

    public function getUserData($userIdentifier, bool $getDataFromObj = false, bool $getContactData = false)//maybe remove the constants
    {
        if (is_int($userIdentifier)) {
            $user = $this->getUserByUserid($userIdentifier);
        } else {
            $user = $this->getUserByUsername($userIdentifier);
        }
        if ($user && $getContactData) {
            $user = $this->getContactDataByUserObj($user);
        }
        if ($user && $getDataFromObj) {
            $this->getDataFromObj($user);
        }
        return $user;
    }

    //$user = $this->getUserData ($userIdentifier, false, true);

    public function getUserByUserid($userid, bool $getDataFromObj = false)
    {
        $sql = "SELECT * FROM User WHERE id = ?";
        $bind = [$userid];
        $user = $this->query($sql, $bind)->getFirstResult();
        if ($getDataFromObj) {
            $this->getDataFromObj($user);
        }
        return $user;
    }

    public function getUserByUsername($username, bool $getDataFromObj = false)
    {
        $sql = "SELECT * FROM User WHERE userName = ?";
        $bind = [$username];
        $user = $this->query($sql, $bind)->getFirstResult();
        if ($getDataFromObj) {
            $this->getDataFromObj($user);
        }
        return $user;
    }

    public function getContactDataByUserObj(stdClass $user)
    {
        $sql = "SELECT * FROM User AS U JOIN Contact AS C ON U.contactId = C.id WHERE U.userName = ? AND U.id = ?;";
        $bind = [$user->userName, $user->id];
        $user = $this->query($sql, $bind)->getFirstResult();
        return $user;
    }

    public function getContactDataById(int $id)
    {
        $sql = "SELECT * FROM Contact WHERE Contact.id = ?;";
        $bind = [$id];
        $user = $this->query($sql, $bind)->getFirstResult();
    }

    public static function currentLoggedInUser()
    {
        $user = self::$currentLoggedInUser;
        if ((!$user) && (Session::sessionExists(CURRENT_USER_SESSION_NAME))) {
            $user = new self((int)Session::getSession(CURRENT_USER_SESSION_NAME));
            self::$currentLoggedInUser = $user;
        }
        return $user;
    }

    public static function checkLoginState($returnToSender = true, string $diffDestination = null) //AndRoute
    {
        //check if destination is blacklisted
        function checkBlacklist($destination)
        {
            $blackList = ['cms/login', 'cms/dashboard'];
            $count = count($blackList);
            $lc_destination = strtolower($destination);
            for ($i = 0; $i < $count; $i++) {
                if ($lc_destination === $blackList[$i]) {
                    router::redirect('cms/login');
                }
            }
        }

        //get user
        $user = self::currentLoggedInUser();
        if ($user) {
            return $user;
        }elseif ($returnToSender) {
            checkBlacklist($_SESSION['LastVisited']);
            router::redirect('cms/login?dest=' . $_SESSION['LastVisited']);
        } elseif ($diffDestination != null) {
            checkBlacklist($diffDestination);
            router::redirect('cms/login?dest=' . $diffDestination);
        } else {
            router::redirect('cms/login');
        }
    }


    public function login(bool $rememberMe = false)
    {
        if (isset($this->userId)) {
            $this->id = $this->userId;
        }
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

    public function logout(string $destinationAfterLogout = null)
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

        if ($destinationAfterLogout != null) {
            Router::redirect($destinationAfterLogout);
        }
        Router::redirect('cms/login');
    // return true;
    }

    public function registerNewUser($params)
    {
        $this->assign($params);
        $this->deleted = 0;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->save();
    }










}


