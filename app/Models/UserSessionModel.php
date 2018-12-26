<?php 

class UserSessionModel extends ModelBase
{
    //public $table;

    public function __construct()
    {
        //$table = 'UserSession';
        parent::__construct();
    }

    public static function getFromCookie()
    {
        $userSession = new self();
        if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {

            $sql = "select * from UserSession where user_agent = ? AND session = ?";
            $bind = [Session::userAgent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)];
            $userSession = $userSession->_db->query($sql, $bind)->getFirstResult();

            // $table = 'UserSession';
            // $userSession = $userSession->findFirstResult($table, [//omschrijven naar query
            //     'conditions' => "",
            //     'bind' => 
            // ]);
        }
        if (!$userSession) {
            return false;
        }
        return $userSession;
    }
}


