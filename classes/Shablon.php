<?php


namespace classes;

class Shablon
{
    function __construct(string $template, array $parameters, string $layout)
    {
        $fileName = $template;

        $params = $parameters;

        return require ('layouts/LayoutMain.php');
    }
}