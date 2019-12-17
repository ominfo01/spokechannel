<?php
/**
 * Template Name: smartslider
 *
 */ ?>
<?php
get_header('new2');
session_start();
$q = $_REQUEST["q"];


  echo do_shortcode("[smartslider3 slider=".$q."]"); 
     
?>
