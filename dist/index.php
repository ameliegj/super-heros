<?php
    // Config
    // include 'config.php';
    require_once 'views/actions/ChromePhp.php';
    $curUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

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
        case 'home':
            $page = 'home';
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
        case 'heroes':
            $heroes = "heroes";
            break;
        case 'links':
            $page = "amelie2";
            break;
        case 'listHeroes':
            $page = "listHeroes";
            break;
        case 'movie':
            $page = "movie";
            break;
        default:
            $page='404';
            break;
        
    } 
    
    // Includes



    if (strpos($curUrl, 'heroes/') !== false) {
        if(strlen($curUrl) > 16){
            ChromePhp::log("A");
            if(strpos($curUrl, 'localhost') !== false){
                $heroes=substr($curUrl,24);//Local
            }
            else{
                // $heroes=substr($curUrl,27);//Online
            }
            include 'views/partials/head.php';
            include 'views/partials/header.php';
            include 'views/pages/heroes.php';
            include 'views/partials/foot.php';
        }
        else {
            ChromePhp::log($page);
            include 'views/partials/head.php';
            include 'views/partials/header.php';
            include 'views/pages/'.$page.'.php';
            include 'views/partials/foot.php';
    
        }

    }

    else if($page == '404'){
    include 'views/partials/head.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/foot.php';
    }

    else{
        ChromePhp::log($page);
        include 'views/partials/head.php';
        include 'views/partials/header.php';
        include 'views/pages/'.$page.'.php';
        include 'views/partials/foot.php';
    
    }
   

?>
