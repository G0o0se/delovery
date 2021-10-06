<?php

class Shablon
{
    function __construct(string $template, array $params, string $layout)
    {
        $fileName = $template;

        extract($params, EXTR_PREFIX_SAME, 'submit');

        return require ('layouts/LayoutMain.php');
    }

}

new Shablon('/home/denis/Desktop/delovery/templates/bodyMain.php', ['title' => 'Название сайта', 'submit' => 'submit'], '/home/denis/Desktop/delovery/layouts/LayoutMain.php');