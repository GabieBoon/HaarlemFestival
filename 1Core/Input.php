<?php
class input //jasper
{
    public static function sanitize($dirty)
    {
        return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
    }

    public static function getInput($input)
    {
        if (isset($_POST[$input])) {
            return self::sanitize($_POST[$input]);
        } elseif (isset($_GET[$input])) {
            return self::sanitize($_GET[$input]);
        }
    }
}