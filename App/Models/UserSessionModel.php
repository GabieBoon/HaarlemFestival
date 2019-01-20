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

            $sql = "SELECT * FROM UserSession WHERE userAgent = ? AND session = ?";
            $bind = [Session::userAgent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)];
            $res = $userSession->query($sql, $bind)->getFirstResult();
            $userSession->getDataFromObj($res);
            //$userSession->makeModel($res);
            // $table = 'UserSession';
            // $userSession = $userSession->findFirstResult($table, [//omschrijven naar query
            //     'conditions' => "",
            //     'bind' => 
            // ]);
        }
        if (!isset($userSession->userId)) {
            return false;
        }
        return $userSession;
    }

    public static function delete()
    {
        $userSession = self::getFromCookie();
        if ($userSession) {
            $userSession->deleteByID('UserSession');
        }
        //$table, int $id = null;
        $dbTable = 'UserSession';
        //$this->deleteByID($dbTable, $this->id);// omschrijven naar query
    }
}


