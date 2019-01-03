<?php

class Cookie //jasper
{
    public static function set($name, $value, int $expiry)
    {
        return setCookie($name, $value, time() + $expiry, '/');
    }

    public static function delete($name)
    {
        $expireTime = -86400;
        self::set($name, '', $expireTime);
    }

    public static function get($name)
    {
        return $_COOKIE[$name];
    }

    public static function exists($name)
    {
        return isset($_COOKIE[$name]);
    }
}
