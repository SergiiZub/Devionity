<?php


class Button
{
    public $page;
    public $text;
    public $isActive;

    /**
     * Button constructor.
     * @param $page
     * @param $text
     * @param $isActive
     */
    public function __construct($page, $isActive = true, $text = null)
    {
        $this->page = $page;
        $this->text = is_null($text) ? $page : $text;
        $this->isActive = $isActive;
    }


}