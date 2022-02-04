<?php

namespace app\core;

class Session
{
    protected const FLASH_KEY = 'flash_messages';

    public function __construct()
    {
        session_start();
        $flashMessages = $_SESSION[self::FLASH_KEY]??[];
        foreach ($flashMessages as $key => &$flashMessage) {

            $flashMessage['remove'] = true;
        }
        var_dump($_SESSION[self::FLASH_KEY] = $flashMessages);
    }

    public function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'remove' => false,
            'value' => $message
        ];
    }

    public function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
//        echo "<pre>";
//        print_r($flashMessages);
//        echo "<pre>";

        foreach ($flashMessages as $key => &$flashMessage) {

            if ($flashMessage['remove']) {
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}