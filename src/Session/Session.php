<?php

namespace Code\Session;

class Session
{
    public static function sessionStart()
    {
        if (session_status() != PHP_SESSION_NONE) {
            return;
        }
        session_start();
    }

    public static function add($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function remove($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}
