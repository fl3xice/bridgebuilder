<?php


namespace flexice\xapps;


use Exception;

class requirer
{
    public $last_require;
    public $requiers = [];

    public function __construct()
    {
    }

    public function require($path)
    {

        $this->last_require = $path;
        $a = $this->requiers;
        array_push($a, $path);
        $this->requiers = $a;
        try {
            require_once "./".$path;
            return true;
        } catch (Exception $e)
        {
            return false;
        }
    }
}