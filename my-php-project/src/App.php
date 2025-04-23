<?php

class App
{
    public function run()
    {
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'home6':
                require "views/home6.php";
                break;
            case 'home5':
                require "views/home5.php";
                break;
            case 'home4':
                require "views/home4.php";
                break;
            case 'home3':
                require "views/home3.php";
                break;
            case 'home2':
                require "views/home2.php";
                break;
            case 'home':
            default:
                require "views/home.php";
                break;
        }
    }
}