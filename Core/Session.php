<?php

class Session //jasper
{
    public static function sessionExists($name)
    {
        if (isset($_SESSION[$name])) {
            return true;
        }
        return false;
    }

    public static function getSession($name)
    {
        return $_SESSION[$name];
    }
    public static function setSession($name, $value)
    {
        return $_SESSION[$name] = $value;
    }
    public static function deleteSession($name)
    {
        if (self::sessionExists($name)) {
            unset($_SESSION[$name]);
        }elseif ($name == 'ALL') {
            $_SESSION  = array();
        }
    }
    public static function userAgent_no_version()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $regex = '/\/[a-zA-z0-9.]+/';
        $newString = preg_replace($regex, '', $userAgent);
        return $newString;
    }
}
