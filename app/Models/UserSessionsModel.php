<?php 

class UserSessionsModel extends ModelBase
{
    public $table;

    public function __construct()
    {
        $this->table = 'UserSession';
        parent::__construct($table);
    }

    public static function getFromCookie()
    {
        $userSession = new self();
        if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
            $userSession = $userSession->findFirstResult([
                'conditions' => "user_agent = ? AND session = ?",
                'bind' => [Session::userAgent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)]
            ]);
        }
        if (!$userSession) {
            return false;
        }
        return $userSession;
    }
}


