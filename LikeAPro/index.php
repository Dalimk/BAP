<?php


// Settigs
include 'includes/config.php';

// head section <head>
include 'views/head.php';

// header section
include 'views/header.php';

// menu section
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home' ;
switch ($action) {
    case 'home':
        include 'views/home.php';
        break;
    case 'articles':
        include 'views/articles.php';
        break;
    case 'about':
        include 'views/about.php';
        break;
    case 'contact':
        include 'views/contact.php';
        break;

}

// footer section
include 'views/footer.php';
?>
