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
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 
	<link href="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.css" >
	 <script src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link href="//db.onlinewebfonts.com/c/6ddcbb8885fde7fe5fca759bd18a23b7?family=GeorgiaProW01-Light" rel="stylesheet" type="text/css"/>
<link href="//db.onlinewebfonts.com/c/57b97bf2f9f803d0578a7f09da4c39ff?family=GeorgiaProW01-Bold" rel="stylesheet" type="text/css"/>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<!---->
			<div class="site-header-main">
			    <div class="col-md-4 col-sm-4 col-xs-6" style="padding-left: 0; ">
			    <div class="float-left ">
                <a class="open-side-menu "  href="#" >
                    <img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/menuimg.png">
                </a>
            </div>
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title" style="display: none;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title" style="display: none;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
</div>

<div class="col-md-0 hideonsmall"></div>
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu " class="site-header-menu col-md-4" >
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<div class="float-right pt-3 pb-3 hide-side-menu col-md-8" style="margin-right:60px;">
<div class="justify-content-center align-self-center my-auto" style="padding: 0">

							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
							   
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							
							</nav>
						</div>            </div>
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'social',
											'menu_class'  => 'social-links-menu',
											'depth'       => 1,
											'link_before' => '<span class="screen-reader-text">',
											'link_after'  => '</span>',
										)
									);
								?>
							</nav>
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?> 
				<div class="col-md-4 col-sm-8 col-xs-6" style="padding-right: 0;padding-top: 5px;padding-bottom: 5px;">
				<div class="pt-3 pb-3 hide-side-menu hidesocial col-md-4 col-sm-4" style="border-left: 1px #464540 solid !important;">
                <ul class="justify-content-center text-center align-self-center my-auto social-media-wrapper" >
                    <li class="list-inline-item"><a href="https://www.facebook.com/spokemags/" target="_blank" class="social_icon"><img style="max-width: 14.5px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/fb-icon-footer-header.png"></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/SpokeMags" target="_blank" class="social_icon"><img style="max-width: 14.5px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/twitter-icon-footer-header.png"></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/SpokeMags/" target="_blank" class="social_icon"><img style="max-width: 14.5px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/instagram-icon-footer-header.png "></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-4 no-padding" >
                <style>

</style>
           <?php 
$argss = array('post_type' => 'top_sponsor_2', 'posts_per_page' => -1);
$loopp = new WP_Query($argss);
if ($loopp->have_posts()) : ?>

<div class="justify-content-center align-self-center my-auto partner2-wrapper text-center" >
<span>In partnership with</span>
<div id="slideshow2" class="topthumb" id="stage1">
   <?php while ($loopp->have_posts()) : $loopp->the_post();
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<div><a '.$url.' target="_blank"><img src="'.$imgurl.'" alt="" /></a></div>';
endwhile; ?>
   
</div>  </div>
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
</div>

<div class=" col-md-4 col-xs-6 col-sm-4 no-padding" >
<!--<div class="float-right">
<div class="justify-content-center align-self-center my-auto partner2-wrapper text-center" >
<span>In partnership with</span>
<div class="topthumb" id="stage1">
<a target="_blank"><img src="https://www.spoke-magazine.com/thespokechannel/wp-content/uploads/2019/07/amazon.png" alt=""></a></div>
</div></div>-->
<style>


</style>




<?php 
$argss = array('post_type' => 'top_sponsor_1', 'posts_per_page' => -1);
$loopp = new WP_Query($argss);
if ($loopp->have_posts()) : ?>

<div class="justify-content-center align-self-center my-auto partner2-wrapper text-center" >
<span>In partnership with</span>
<div id="slideshow1" class="topthumb" id="stage1">
   <?php while ($loopp->have_posts()) : $loopp->the_post();
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<div><a '.$url.' target="_blank"><img src="'.$imgurl.'" alt="" /></a></div>';
endwhile; ?>
   
</div>  </div>
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
}, 15000);
</script>
</div>

<script>
$(function(){
    
		$('.visibleimg1').addClass("make_me_blue");
		setTimeout(RemoveClass, 3000);
}
    </script>

</div>


			</div><!-- .site-header-main -->


























			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
