<?php


namespace flexice\xapps;


final class bridge
{
    public $requires;
    public function __construct($apps = [])
    {
        $this->requires = new requirer();
        foreach ($apps as $item)
        {
            $this->requires->require($item);
        }
    }
}