<?php
/**
 * 
 * Header template
 * 
 * @package Aquila
 * 
 */
  
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquila</title>
    <link rel="stylesheet" href="style.css">
<?php wp_head();?>
</head>
<body <?php body_class('hello-class');?>>

<?php wp_body_open();?>

<div id="page" class="site">
   <header id="masthead" class="sit-header" role="banner">

   <?php get_template_part('parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">

 


