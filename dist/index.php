<?php
    // Config
    // include 'config.php';
    require_once 'views/actions/ChromePhp.php';
    
    // Routing

    if (empty( $_GET['q']))
    {
        $q = '';
    } 
    else 
    {
        $q = $_GET['q'];
    }

    switch($q)
    {
        case '':
        $page='home';
        break;
        case 'anim':
        $page = 'anim';
        break;
        case 'home':
        $page = 'home';
        break;
        case 'heroes':
        $page = "heroes";
        break;
        default:
        $page='404';
        break;

    }
    
    
    // Includes
    include 'views/partials/head.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/foot.php';


?>
