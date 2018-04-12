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
        case 'amelie':
            $page = "amelie";
            break;
        case 'ameliebis':
            $page = "ameliebis";
            break;
        case 'amelie2':
            $page = "amelie2";
            break;
        case 'listHeroes':
            $page = "listHeroes";
            break;
        default:
            $page='404';
            break;
    } 
    
    // Includes
    if($page == '404'){
    include 'views/partials/head.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/foot.php';
    }

    include 'views/partials/head.php';
    include 'views/partials/header.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/foot.php';


?>
