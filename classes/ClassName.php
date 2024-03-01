<?php

class ClassName
{
    private $smarty;

    function __construct($smarty)
    {
        $this->smarty = $smarty;
    }

    function mainPage()
    {
        $this->smarty->display('mainPage.tpl');
    }
}
