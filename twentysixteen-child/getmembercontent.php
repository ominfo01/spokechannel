<?php
/**
 * Template Name: getmembercontent
 *
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	  <!--<link rel="stylesheet" href="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css">-->

  <!--<script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script> --> 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link href="//db.onlinewebfonts.com/c/6ddcbb8885fde7fe5fca759bd18a23b7?family=GeorgiaProW01-Light" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/57b97bf2f9f803d0578a7f09da4c39ff?family=GeorgiaProW01-Bold" rel="stylesheet" type="text/css"/>
<link href="https://cdn.jsdelivr.net/npm/@typopro/web-bebas-neue@3.7.5/TypoPRO-BebasNeue-Regular.woff" rel="stylesheet" type="text/css"/>
<style>
.pb-3, .py-3 {
    padding-bottom: 1rem!important;
}
.pt-3, .py-3 {
    padding-top: 1rem!important;
}
.float-left {
    width: auto !important;
}

.align-self-center {
    -ms-flex-item-align: center!important;
    align-self: center!important;
}
.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important;
}
.partner2-wrapper {
    width: 135px;
    border-left: 1px #53524d solid;
    height: 60px;
    padding: 10px 0;
}
.text-center {
    text-align: center!important;
}
.partner1-wrapper {
    height: 60px;
    width: 142px;
    border-left: 1px #464540 solid;
    padding: 10px 0;
}
.social-media-wrapper {
    width: 104px;
    padding: 20px 4px 20px 0;
    height: 60px;
}
.mb-auto, .my-auto {
    margin-bottom: auto!important;
}
.mt-auto, .my-auto {
    margin-top: auto!important;
}
.main-menu {
    padding: 0px;
    margin: 0;
    height: 60px;
    -webkit-column-count: 4;
    -moz-column-count: 4;
    column-count: 4;
    -webkit-column-width: auto;
    -moz-column-width: auto;
    column-width: auto;
    -webkit-column-gap: 0px;
    -moz-column-gap: 0px;
    column-gap: 0px;
    border-left: 1px #464540 solid;
    border-right: 1px #464540 solid;
}
</style>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-inner">


		<div id="content" class="site-content"> 
<?php

session_start();
$q = $_REQUEST["q"];
?>
<style>
.row.fixed-top {
    display: none;
}
   html {
  overflow: hidden;
} 
</style>

<?php
  echo do_shortcode("[smartslider3 slider=".$q."]"); 
  
?>

