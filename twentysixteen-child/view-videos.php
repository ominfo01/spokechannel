<?php 
/*
* Template Name: Watch Videos Page
*/

include('wp-load.php'); ?>
<?php get_header('new2'); ?>
<?php
$post = $_GET['id'];

?>
<style>
.container1 {
  position: relative;
  
}
.box14:before{content:"";width:100%;height:100%;background:#eceadf;position:absolute;top:0;left:0;opacity:0;transition:all .35s ease 0s}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container1:hover .image {
  opacity: 0.1;
      background: #eceadf;
}

.container1:hover .middle {
  opacity: 1;
}

.text1 {
  background-color: #4CAF50;
  color: black;
  font-size: 16px;
  padding: 16px 32px;
}
.text2 {
 
  color: black;
    font-size: 21.37pt;
    padding: 16px 0px;
    
    text-transform: uppercase;
    font-weight: 600;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
.text3border {
    border-top: 1px solid #929292;
    margin-left: 100px;
    margin-right: 100px;
}
.text3 {
 
  color: black;
    font-size: 21.37pt;
    padding: 16px 0px;
    
    text-transform: uppercase;
    font-weight: 600;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}

.text5 {
 
  color: black;
    font-size: 16.37pt;
    padding: 16px 0px;
   
    text-transform: capitalize;
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
#menu-item-299 a{
    color:#d3a36f !important;
}
</style>
<div class="container-fluid bg-color-eceadf" id="content-body">

<?php
$argss = array('post_type' => 'interview', 'p' => $_GET['id']);
$l = new WP_Query($argss);
while ( $l->have_posts() ) : $l->the_post(); ?>
   

    <div id="demo" class="row bg-color-fffef3" >
<?php
$photo_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
if(!empty($photo_slider_id)) {
echo '<div class="" id="">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';

}
else
{
 $i++;
if (has_post_thumbnail()) {
//the_post_thumbnail('full', array('style' => 'width:100%'));
//$imgurl = the_post_thumbnail_url('full');
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div  class="ak_header_image" style="background-image:url('.$imgurl.'); margin-bottom:75px;"></div>';
 }else{
     echo '<div  class="ak_header_image" style="background-image:url(http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg); margin-bottom:75px;"></div>';
 }
 }  ?>
    </div>
    <div class="row carousel-indicator-area bg-color-fffef3 padding-lr-65" style="margin-top:0px;height: 61px;" >
        <div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview" style=" padding: 20px 0 17px;">
            <h5 class="" style="padding: 0 !important; margin-top:-2px;">
                <a href="<?= get_permalink($_GET['id']) ?>" > Read  <span>interview</span></a>
            </h5>
        </div>
        <div class="col-md-4 col-xs-12" style="text-align:right"></div>
         <div class="col-md-4 col-xs-12 hidemobile" style="text-align:right;    padding: 23px 0 1px;">
                                <div class="ml-auto justify-content-center align-self-center text-center next-pre-div">
                                    <table class="pagination-table" style="width: 100px;margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>
<tr >
     <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/view-videos?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>"class="pre-a"><img   style="  margin-bottom: 3px; " src=""></a></td>-->
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a style="    padding-left: 3px;"  class="slide-prevd" href="<?php echo get_home_url() .'/view-videos?id='.  (($next_post == null) ? get_the_ID(): $next_post->ID) ?>" >PREV</a></td>
                       
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="    padding-right: 3px;"  href="<?php echo get_home_url() .'/view-videos?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" >NEXT</a></td>
                       <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/view-videos?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" class="next-a"><img style="  margin-bottom: 3px; " src=""></a></td>-->
                    
    
    
                        </tr>
                   
                </table>

            </div>
        </div>
    </div>
<div class="row padding-lr-65 bg-color-fffef3" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
     <div class="row padding-lr-65 bg-color-fffef3" >
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style=" height: 64px;">
                                <?php the_title(); ?>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style=" height: 64px;padding: 0px;line-height: 64px;">RELIGIOUS FIGURE<?php echo get_post_meta($post->ID, 'center-top-text', true); ?></div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style=" height: 64px;padding: 4px 0 6px;">
                                S<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?></div>
                        </div>
                        <div class="row padding-lr-65 bg-color-fffef3 hidemobile" style="padding:20px">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title" >
                               
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text"></div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt">
                               </div>
                        </div>
    
   
    <?php endwhile; ?>

   <div class="row more_photos padding-lr-52 bg-color-f6f5e9">
        <h5 style="padding-left: 15px;"><span>MORE</span> Videos</h5>
        <?php
                $argss = array('post_type' => 'interview', 'posts_per_page' => 18);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        
                        $photo_slider_id =  get_post_meta(($post->ID), 'video_slider_id', true);
                       
                            
                        ?>
                        <?php if ( get_post_meta($post->ID, 'video_slider_id', true) )  : ?>
    <div class="col-md-4 col-sm-6 w3-animate-opacity1" style="margin-bottom:25px;padding-right: 12.5px;padding-left: 12.5px;">
                     <a class="lightbox" href="<?php echo get_home_url() .'/view-videos?id='.  get_the_ID() ?>" > 
                    <div class="box14">
                        <img src="<?php echo $src[0] ?>" alt="" style="padding-bottom:0px;">
                        <div class="box-content">
                            
                            <h3 class="text2 title"><?php the_title(); ?></h3>
    <div class="text3border title1"></div>
    <h3 class="text5 title2"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "Figure";}?></h4>
    <h3 class="text4 title3">Videos</h4>
                        </div>
                    </div></a>
                </div>
     <?php endif; ?>
     <?php endwhile; ?>
                <?php endif; ?>
       
        </div>
        

 
    
   <div class="row padding-lr-65 bg-color-f6f5e9 all_photos" >
        <div class="col p-0 "><h5 style="padding-left: 0px; padding-top: 75px;"><a href="<?php echo get_home_url() .'/photo' ?>"> All&nbsp;&nbsp;<span>videos</span></a></h5></div>
    </div>

</div>
<script>

$(window).load(function(){
    var screenwidth = $(window).width();
       $(".n2-ss-slider-1").width(screenwidth); 
        
   var photoht = (screenwidth * 9)/16;
   $(".n2-ss-slider-1").css('min-height',photoht);
    $(".n2-ss-slide").css('min-height',photoht);
    $(".n2-ss-slide").width(screenwidth); 
    $(".n2-ss-layers-container").css('min-height',photoht);
    $(".n2-ss-layers-container").width(screenwidth); 
});    
$(window).on('resize', function(){
 var screenwidth = $(window).width();
   $(".n2-ss-slider-1").width(screenwidth); 
   var photoht = (screenwidth * 9)/16;
   $(".n2-ss-slider-1").height(photoht); 
      $(".n2-ss-slide").height(photoht); 
    $(".n2-ss-slide").width(screenwidth); 
      $(".n2-ss-layers-container").height(photoht); 
    $(".n2-ss-layers-container").width(screenwidth); 
});

</script>
<?php get_footer(); ?>
<style>
    .body-class {
        /*padding-top: 196px !important;*/
    }
    .grid-gallery {
        padding-left: 48px;
        padding-right: 48px;
    }

    .body-class {
        /*padding-top: 196px !important;*/
    }
    .grid-gallery {
        padding-left: 30px;
        padding-right: 30px;
    }

    .body-class {
        /*padding-top: 196px !important;*/
    }
    .sticky {
        position: fixed;
        top:92px !important;
        width: 100%;
        z-index: 1000;
    }

    .pre-next-separator {
        margin-right: 20px !important;
        margin-left: 20px !important;
    }#menu-item-17 a{
        color:#d3a36f !important;
    }
    

</style>
<script>
    $(document).ready(function () {
        window.onscroll = function() {myFunction()};
    });

    var navbar = document.getElementById("scroll-div");
    var sticky = navbar.offsetTop - 30;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            $('#content-body').css("padding-top", "90px");
            $('#sticky_h5').css("padding", "20px 0");

        } else {
            navbar.classList.remove("sticky");
            $('#content-body').css("padding-top", "0px");
            $('#sticky_h5').css("padding", "80px 0");
        }
    }
</script>