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

    if($q === '')
    {
        $page = 'home';
    }
    if($q === 'lucas')
    {
        $page = 'lucas';
    }
    else
    {
        $page = '404';
    }
    
    // Includes
    include 'views/partials/head.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/foot.php';


?>
