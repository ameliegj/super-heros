<?php
    // Config
    include 'config.php';
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
    else
    {
        $page = '404';
    }
    
    // Includes
    include 'views/partials/header.php';
    include 'views/pages/'.$page.'.php';
    include 'views/partials/footer.php';


?>
