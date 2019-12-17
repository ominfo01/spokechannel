<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
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
<link href="https://fonts.googleapis.com/css?family=Roboto:300,700,700i,900&display=swap" rel="stylesheet">
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
    border-left: 1px #353532 solid;
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
.block-copyright-tooltip {
    font-size: 14px;
}
.block-copyright-tooltip, .block-copyright-dropdown {
    background-color: #dda269;
    color: #f6f5e9 !important;
    font-size: 12px;
    padding: 8px;
    position: fixed;
    text-align: justify;
    width: 388px;
    z-index: 20000;
}
.block-copyright-tooltip p:last-of-type, .block-copyright-dropdown p:last-of-type {
    margin-bottom: 0;
}
</style>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="block-block-15" class="block block-block block-copyright-tooltip relocated" style="display: none;"><div class="content" style="    font-family: Calibri Light;color: #000;"><p>You are violating copyright laws, this content is copyrighted.<br>©SPOKE. Do not attempt to copy/save.</p></div></div>  
 
<div id="page" class="site" >
	<div class="site-inner" >
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
<div class="header-height">
    
    </div>
		<div class="row fixed-top" style="background: #292826;margin-left:0px;margin-right:0px;position: fixed;top: 0;right: 0;left: 0;z-index: 1030;">
        <div class="col menu-wrapper">
            <div class="float-left ">
                <a class="open-side-menu " href="#" >
                    <img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Untitled-1-01-1.png">
                </a>
            </div>
            <div class="float-left pt-3 pb-3 hide-side-menu" style="padding-top: 0rem!important;padding-bottom: 0rem!important;">
                <div class="d-flex">
                    <a class="justify-content-center align-self-center logo-div" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );?>
                        <img class="logoheader" src="<?php echo esc_url( $custom_logo_url )?>">
                       
                    </a>
                </div>
            </div>
            
            <?php 
$argss = array('post_type' => 'top_sponsor_2', 'posts_per_page' => -1);
$loopp = new WP_Query($argss);
if ($loopp->have_posts()) : ?>
<div class="float-right pt-3 pb-3 hide-side-menu headslider1" >
<div class="justify-content-center align-self-center my-auto partner2-wrapper text-center" >
<span>In partnership with</span>
<div id="slideshow2" class="topthumb" id="stage1">
   <?php while ($loopp->have_posts()) : $loopp->the_post();
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<div><a href="https://'.$website_url.'" target="_blank"><img src="'.$imgurl.'" alt="" /></a></div>';
endwhile; ?>
   
</div>  </div></div>
<?php endif; ?>
<script>
$("#slideshow2 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow2');
}, 5000);
</script>
<?php 
$argss = array('post_type' => 'top_sponsor_1', 'posts_per_page' => -1);
$loopp = new WP_Query($argss);
if ($loopp->have_posts()) : ?>
<div class="float-right pt-3 pb-3 hide-side-menu headslider1" >
<div class="justify-content-center align-self-center my-auto partner2-wrapper text-center" >
<span>In partnership with</span>
<div id="slideshow1" class="topthumb" id="stage1">
   <?php while ($loopp->have_posts()) : $loopp->the_post();
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<div><a href="https://'.$website_url.'" target="_blank"><img src="'.$imgurl.'" alt="" /></a></div>';
endwhile; ?>
   
</div>  </div></div>
<?php endif; ?>
<script>
$("#slideshow1 > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow1 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow1');
}, 5000);
</script>
 <div class="float-right pt-3 pb-3 hide-side-menu hidemobile" style="padding-top: 15px !important;">
                <ul class="justify-content-center text-center align-self-center my-auto social-media-wrapper">
                   
                        <?php 
$argss1 = array('post_type' => 'social', 'posts_per_page' => -1,'orderby' => 'date',            'order'   => 'ASC', );
$loopp1 = new WP_Query($argss1);
if ($loopp1->have_posts()) : ?>  

 <?php while ($loopp1->have_posts()) : $loopp1->the_post();
$imgurl11 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url1 =  get_post_meta($post->ID, 'social_link', true);
if(!empty($website_url1)) { $url1 = "href=".$website_url1; }
else { $url = '';}
echo '<li class="list-inline-item" style="margin-right: 13px;"><a href="'.$website_url1.'" target="_blank" class="social_icon"><img style="max-width: 14.5px;" src="'.$imgurl11.'"></a></li>';
endwhile; ?>


                   
     <?php endif; ?>
     </ul>
            </div>
<div class="float-right pt-3 pb-3 hide-side-menu hidemobile hidetab" style="min-width:400px;padding-top: 15px !important;">
<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>           </div>
          
        </div>
    </div>
<div id="mySidenav" class="sidenav" style="width: 0px;background: #fffef3;border-right: 0px solid rgb(208, 207, 198);overflow-x: hidden;padding: 0px;height: 91vh;">
    <div class="side-menu-wrapper" style="padding-top: 20px">
        <span> MAIN MENU </span>
        <ul>
           <?php wp_nav_menu( array( 
'theme_location' => 'side-menu', 

) ); ?>						
        </ul>
    </div>
    <div class="side-menu-wrapper" >
        <span> OTHER </span>
        <ul>
             <?php wp_nav_menu( array( 
'theme_location' => 'side-menu1', 

) ); ?>		
        </ul>
    </div>
    <div class="side-menu-wrapper" >
        <span> IMPORTANT </span>
        <ul>
                        <?php wp_nav_menu( array( 
'theme_location' => 'side-menu2', 

) ); ?>			
        </ul>
    </div>
    <div class="side-menu-wrapper" >
        <span> LEGAL </span>
        <ul>
            <?php wp_nav_menu( array( 
'theme_location' => 'side-menu3', 

) ); ?>			
        </ul>
    </div>
    <div class="side-menu-wrapper" style="margin-bottom: 80px !important;margin-top: 72px;">
        <img style="max-width: 124px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/11/side_menu_logo.png">
    </div>
</div>

<script>
window.scroll({
  top: 0, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 0, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

// Scroll to a certain element
document.querySelector('.hello').scrollIntoView({ 
  behavior: 'smooth' 
});
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "320px";
        document.getElementById("mySidenav").style.padding = "0 60px 0 0";
        document.getElementById("mySidenav").style.borderRight = "#d0cfc6 1px solid";

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.padding = "0 0px 0 0";
        document.getElementById("mySidenav").style.borderRight = "#d0cfc6 0px solid";
    }

     $(document).ready(function () {



        document.getElementById("mySidenav").style.width = "0";

        $(".closebtn").on ("click", function () {
            closeNav();
        });
        


        $(".open-side-menu").on ("mouseover", function () {
            if ( document.getElementById("mySidenav").style.width == "0px") {
                openNav();
            } else {
                //closeNav();
            }
        });
        $(".open-side-menu").on ("click", function () {
            if ( document.getElementById("mySidenav").style.width == "0px") {
                openNav();
            } else {
                closeNav();
            }
        });
        
        $("#content-body").on ("click", function () {
            
                closeNav();
            
        });
        
        

        $("#content-body").on ("mouseover", function () {
            closeNav();
        });
        $(".post-wrapper").on ("mouseover", function () {
            closeNav();
        });
//
        $("#footer").on ("mouseover", function () {
            closeNav();
        });
        $(".hide-side-menu").on ("mouseover", function () {
            closeNav();
        });
        $("#content").on ("mouseover", function () {
           
            closeNav();
            
        });
        //
    });
    


</script>
		<div id="content" class="site-content">