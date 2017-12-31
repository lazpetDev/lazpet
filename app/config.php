<?php
define("BASE_URL", "/lazpet/public/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/lazpet/");

class Url
{
    static function base_url()
    {
        return BASE_URL;
    }
    static function root_path()
    {
        return ROOT_PATH;
    }
}