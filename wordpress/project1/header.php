<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project
 */

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
    <header>
     <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li id="ult">Services</li>
        </ul>
            <div class="logo">
                <h1>Logo</h1>
            </div>

            <div class="icons">
                <a href="https://www.facebook.com">
                 <img src="<?php echo get_template_directory_uri(); ?>/icons/Vector(1).png" alt="">
                </a>
                <a href="https://mail.google.com">
                 <img src="<?php echo get_template_directory_uri(); ?>/icons/Vector.png" alt="">
                </a>
                <a href="https://www.instagram.com">
                 <img src="<?php echo get_template_directory_uri(); ?>/icons/IMAGE(1).png" alt="">
                </a>
            </div>
     </nav>

     <div class="nav-sav" id="nav-sav">
         <h1>This is launcing</h1>
     </div>
    </header>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
		