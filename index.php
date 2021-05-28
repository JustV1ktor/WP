<?php get_header(); ?>

<?php
    switch($_SERVER['REQUEST_URI']) {
        case '/' : require_once('main.php'); break;
        case '/about.php' : require_once('about.php'); break;
        case '/products.php' : require_once('products.php'); break;
        case '/contact.php' : require_once('contact.php'); break;
    }
?>
	
<?php get_footer(); ?>