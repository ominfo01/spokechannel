<?php
/**
 * Template Name: single interview Page22
 *
 */ ?>

<?php get_header('new2');
$post = $_GET['id'];

$args = array('post_type' => 'interview', 'p' => $_GET['id']);
$loop = new WP_Query($args); 
$i = 0;


$j = 0;
$p = 0;
while ( have_posts() ) : the_post(); 
$images = get_images_for_slide($post->ID);           
$videos = get_videos_for_slide($post->ID);
?>
<style>
.site-content {
    padding: 0;
    background: #fffef3;
}
#menu-item-300 a{
    color:#d3a36f !important;
}
#spokeScriptsection {
    background: #fffef3;
}
.vertical-center {
  margin: 0;
  
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
<script>
 $( window ).load(function() {
  console.log( "document ready!" );

  var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
  
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: 'initial', right: 0});
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', right: '65px', top: '130px' });
      } else {
          $sticky.css({position: 'absolute', top: 'initial', right: 0});
      }
       if ($('.sticky').offset().top + $(".sticky").height() > $(".sticky-stopper").offset().top) {
        $('.sticky').css('top',-($(".sticky").offset().top + $(".sticky").height() - $(".sticky-stopper").offset().top - 130));
    }
    });

  }
});
     function savepost(obj){
       var str = "http://theaiteecompany.com/thespoke/wordpress/test?q=";
       var id=obj.id;
        var url = str.concat(id);
        var xmlhttp = new XMLHttpRequest();
        if(obj.innerHTML == "Saved"){
            obj.innerHTML = "Save";
        }else{
            obj.innerHTML = "Saved"
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }
</script>
<?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="col">
<div class=" bg-color-f6f5e9">
    
                   
        <?php 
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
       
       if(!empty($photo_slider_id) && empty($video_slider_id)) {
        echo '<div class="photo_slide" id="photo_slide">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        }
        else if(!empty($video_slider_id) && empty($photo_slider_id)) {
        echo '<div class="video_slide" id="video_slide">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }

        else if(!empty($photo_slider_id) && !empty($video_slider_id)) {
        echo '<div class="photo_slide" id="photo_slide">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        echo '<div class="video_slide" id="video_slide" style="display:none">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }
        
        else if( empty($photo_slider_id) && empty($video_slider_id))
        {
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="ak_header_image" style="background-image:url('.$imgurl.');"></div>';
        } else 
        {
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="ak_header_image" style="background-image:url('.$imgurl.');"><div style="
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
"></div></div>';
        }
        ?>
</div>
</div> 
<?php endwhile; ?>
            <?php endif; ?>
<div class="content-bg-color" style="background: #fffef300;" id="content-body">
<div class=" padding-lr-65 carousel-indicator-area bg-color-fffef3" style="margin-top:0px; background-color: #fffef300;" >
         <?php
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
        
        ?>

  <div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview" style="padding-left:0px;height: 61px;line-height: 14px;padding-right:0px;">
    <div class="btn-group switch vertical-center" role="group" aria-label="Basic example" style="padding-top: 0px;">
  <?php
        if(!empty($photo_slider_id) && empty($video_slider_id)) {
        
            
             
          
        echo '<a  class="btn border-right pl-0 activate" onclick="width_adjust();" id="showPhotos" style="padding-left: 0px;
    
    padding-right: 14px;
   text-transform: uppercase; line-height: 17px;font-family: Gill Sans Light;color:#000;    pointer-events: none;
    cursor: pointer;">Photo</a>';
    
        echo '<a  class="btn" id="showVideos" onclick="width_adjust();" style="padding-right: 0px;
    
    font-weight: 100;
    padding-left: 14px;color: #000 !important;pointer-events: none;    cursor: pointer;"font-family: Gill Sans Light;>Video</a>';
       
        }
        else if(empty($photo_slider_id) && !empty($video_slider_id)) { 
      
             
          
        echo '<a  class="btn border-right pl-0" onclick="width_adjust();" id="showPhotos" style="padding-left: 0px;
    font-weight: 100;
    padding-right: 14px;
   font-family: Gill Sans Light;text-transform: uppercase; line-height: 17px;color: #000 !important;pointer-events: none;    cursor: pointer;">Photo</a>';
    
        echo '<a  class="btn activate" id="showVideos" onclick="width_adjust();" style="padding-right: 0px;
    
   
    padding-left: 14px;font-family: Gill Sans Light;color:#000;    pointer-events: none;    cursor: pointer;">Video</a>';
         
        }

        else if(!empty($photo_slider_id) && !empty($video_slider_id)) {
       
        echo '<a  class="btn border-right pl-0 activate" onclick="width_adjust();" id="showPhotos" style="padding-left: 0px;
   
    padding-right: 14px;font-family: Gill Sans Light;color:#000;
    ">Photo</a>';
    
        echo '<a  class="btn" id="showVideos" onclick="width_adjust();" style="padding-right: 0px;
    
    font-weight: 100;
    padding-left: 14px;font-family: Gill Sans Light;">Video</a>';
         
        }
        
        else 
        {
         
        echo '<a  class="btn border-right pl-0" onclick="width_adjust();" id="showPhotos" style="padding-left: 0px;
    font-weight: 100;
    padding-right: 14px;
    color: #000 !important;pointer-events: none;    cursor: pointer;
    display: block;font-family: Gill Sans Light;">Photo</a>';
    
        echo '<a  class="btn" id="showVideos" onclick="width_adjust();" style=" padding-right: 0px;
    
    font-weight: 100;
    padding-left: 14px;color: #000 !important;pointer-events: none;    cursor: pointer;
    display: block;font-family: Gill Sans Light;">Video</a>';
          
        }
?>
</div>
        </div>
        <div class="col-md-4"></div>
        
             <div class="col-md-1"></div>
         <div class="col-md-3 col-xs-12 hidemobile" style="text-align:right;z-index:1; padding-right:0; padding-left: 0;">
             
           
             
             
             
             
              <?php if(!empty($photo_slider_id) && !empty($video_slider_id)) { ?>
                                <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" style="  margin-top: 0px;">
                                    
                <table class="pagination-table" style="width: 100px;    margin-right: auto;    margin: 24px 0 22px;    margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                    
                    $args = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'DESC',
     );

   $image_posts = get_posts($args);
   foreach ( $image_posts  as $post )
   {
      
   }
                }else{
                    $args1 = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'ASC',
     );

   $image_posts1 = get_posts($args1);
   foreach ( $image_posts1  as $post1 )
   {
      
   }
                }
                ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <tr>  
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" class="nextgo1" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-02.png" style="padding-bottom: 5px;"></a></td>--><td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;line-height: 14px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a class="slide-prevd" style="padding-left: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? $post1->ID: $next_post->ID) ?>" data-slide="prev">PREV</a></td>
                                            
                                            <td style="vertical-align: middle;width:10px;line-height: 14px; 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? $post->ID: $prev_post->ID) ?>" data-slide="next">NEXT</a></td>
                                           <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-01.png" class="prevgo1" style="padding-bottom: 5px;"></a></td>-->
                    </tr>
                </table>

            </div>
            <?php } else if(!empty($video_slider_id) && empty($photo_slider_id)) { ?>
            
            <div class="ml-auto justify-content-center align-self-center text-center next-pre-div">
                                   
                <table class="pagination-table" style="width: 100px;    margin-right: auto;    margin: 23px 0 23px;    margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                    
                    $args = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'DESC',
     );

   $image_posts = get_posts($args);
   foreach ( $image_posts  as $post )
   {
      
   }
                }else{
                    $args1 = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'ASC',
     );

   $image_posts1 = get_posts($args1);
   foreach ( $image_posts1  as $post1 )
   {
      
   }
                }
                ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <tr>  
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" class="nextgo1" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-02.png" style="padding-bottom: 5px;"></a></td>--><td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;line-height: 14px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a class="slide-prevd" style="padding-left: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? $post1->ID: $next_post->ID) ?>" data-slide="prev">PREV</a></td>
                                            
                                            <td style="vertical-align: middle;width:10px;line-height: 14px; 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? $post->ID: $prev_post->ID) ?>" data-slide="next">NEXT</a></td>
                                           <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-01.png" class="prevgo1" style="padding-bottom: 5px;"></a></td>-->
                    </tr>
                </table>

            </div>
           <?php } else if(empty($video_slider_id) && !empty($photo_slider_id)) { ?>
           <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" >
                                    <table class="pagination-table" style="width: 100px;    margin-right: auto;    margin: 23px 0 23px;    margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                    
                    $args = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'DESC',
     );

   $image_posts = get_posts($args);
   foreach ( $image_posts  as $post )
   {
      
   }
                }else{
                    $args1 = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'ASC',
     );

   $image_posts1 = get_posts($args1);
   foreach ( $image_posts1  as $post1 )
   {
      
   }
                }
                ?>
                    
                    
                    
                    <tr >
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>"class="pre-a"><img   style="  margin-bottom: 3px; " src=""></a></td>-->
                        <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a style="    padding-left: 3px;" class="slide-prevd" href="<?php echo get_home_url() .'/single-interview?id='.  (($next_post == null) ? $post1->ID: $next_post->ID) ?>" >PREV</a></td>
                       
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="    padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" >NEXT</a></td>
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a    href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? $post->ID: $prev_post->ID) ?>" class="next-a"><img style="  margin-bottom: 3px; " src=""></a></td>-->
                    </tr>
                </table>

            </div>
        <?    } else if(empty($video_slider_id) && empty($photo_slider_id)) { ?>
        
         <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" >
                                    <table class="pagination-table" style="width: 100px;    margin-right: auto;    margin: 23px 0 23px;    margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                    
                    $args = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'DESC',
     );

   $image_posts = get_posts($args);
   foreach ( $image_posts  as $post )
   {
      
   }
                }else{
                    $args1 = array(
    'post_type' =>'interview',
    'posts_per_page' => 1,
    
    'order' => 'ASC',
     );

   $image_posts1 = get_posts($args1);
   foreach ( $image_posts1  as $post1 )
   {
      
   }
                }
                ?>
                   
                    
                    
                    <tr >
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? $post1->ID: $next_post->ID) ?>"class="pre-a"><img   style="  margin-bottom: 3px; " src=""></a></td>-->
                        <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a style="    padding-left: 3px;" class="slide-prevd" href="<?php echo get_home_url() .'/single-interview?id='.  (($next_post == null) ? $post1->ID: $next_post->ID) ?>" >PREV</a></td>
                       
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="    padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? $post->ID: $prev_post->ID) ?>" >NEXT</a></td>
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a    href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? $post->ID: $prev_post->ID) ?>" class="next-a"><img style="  margin-bottom: 3px; " src=""></a></td>-->
                    </tr>
                </table>

            </div>
        
        <? } ?>
        </div>
    </div>
        <div class=" padding-lr-80 bg-color-f6f5e9">
            <div class="col p-0">
                <div class="separator-div"></div>
            </div>
        </div>
        <div class="container-fluid col-md-12 padding-lr-65 bg-color-fffef3" style="    z-index: 10;">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style="height: 64px;">
                                <?php the_title(); ?>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style="padding: 0px;height: 64px;"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "FIGURE";}?> </div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style="height: 64px;padding: 4px 0px;">
                                s<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?><?php echo get_post_meta($post->ID, 'right-top-text', true); ?></div>
                        </div>
        
        <div class="col-md-12 padding-lr-65 bg-color-fffef3 hidemobile" style=" padding-bottom: 24px;">
                            <div class="col-md-4 col-xs-4 h-100 padd-left0" >
                                <div class="align-self-center interview-col">
<span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_1_Lable', true)) { echo get_post_meta($post->ID, 'box_1_Lable', true);} else { echo 'Occupation';} ?>
                                    </span>
                                    <span class="d-block home-sub-header2" ><?php echo get_post_meta($post->ID, 'box_1_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4  h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_2_Lable', true)) { echo get_post_meta($post->ID, 'box_2_Lable', true);} else { echo 'Writer';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2"><?php echo get_post_meta($post->ID, 'box_2_value', true); ?></span>
                                </div>

                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_3_Lable', true)) { echo get_post_meta($post->ID, 'box_3_Lable', true);} else { echo 'Photographer';} ?>
                                   </span>
                                    <span class="d-block home-sub-header2"><?php echo get_post_meta($post->ID, 'box_3_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_4_Lable', true)) { echo get_post_meta($post->ID, 'box_4_Lable', true);} else { echo 'Location';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2" ><?php echo get_post_meta($post->ID, 'box_4_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <?php
                                    $oldDateUnix = strtotime(get_post_meta($post->ID, 'interview_date', true));
                                    ?>
                                    <!-- <span class="d-block home-sub-header"><?php echo date("Y", $oldDateUnix); ?></span> -->
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'interview_date_Lable', true)) { echo get_post_meta($post->ID, 'interview_date_Lable', true);} else { echo 'Date';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2" ><?php echo date("F d, Y", $oldDateUnix); ?></span>
                                </div>
                            </div>
                        </div>
                        
     
                        
                        
                        
                        
        
        <div class=" row-eq-height bg-color-eceadf padding-lr-65 hidemobile" style="display: flex;    min-height: 770px;">
            <div class="col-md-9 pl-0 body-content-single" style="flex: 1;padding-left:0px;padding-right:0px;">
                <h2 class="interview-heading-h2">Interview</h2>
                <div class="interviewContentDiv">
                    <?php the_content();
                   
                     ?>
                 <div class=" bg-color-eceadf hidemobile" style="margin-top:-15px">
            <div class="col p-0 more_interviews end-content"  style="   width: 60%;"><h5 style="    padding: 100px 0 0px;">End <span>of</span> <span class="endoftext"> Interview</span> <!-- <img style="height: 27px;float:right" src="<?php echo get_template_directory_uri() . '/images/up_arrow.png' ?>"> --></h5>
            </div>
        </div>    
                </div>
                <?php
                 $abt = get_post_meta($post->ID, 'about_text', true);
                    $spnsr = get_post_meta($post->ID, 'sponsor_text', true);  
                    $sp = get_post_meta($post->ID, 'spokescript', true);
                    ?>
                <div class="aboutContentDiv"    style=" padding-bottom: 69px;">
                    <p style="padding: 0 0 0px 0;"><?php if(!empty($abt)) { echo $abt;}?></p>
                </div>
                <div class="sponsorContentDiv" style=" padding-bottom: 69px;">
                    <p style="padding: 0 0 0px 0;"><?php if(!empty($spnsr)) { echo $spnsr;}?></p>
                </div>
                <div class="col-md-12 pl-0 <?php if(get_post_meta($post->ID, 'spokescript', true)){echo '';}else{echo 'sticky-stopper';}?>)" style="
    padding: 50px;
">
    </div>
            </div>
            <div class="col-md-3 pr-0 " style="padding-top:100px; <?php if($sp){ echo "margin-top:0px";}else{ echo "padding-top:100px"; };  ?> ; padding-left:0px;padding-right:0px;" >
                <div class="sticky static-right-button">
                    <div class="float-right sharing-div" >
                        <?php echo do_shortcode('[Sassy_Social_Share total_shares="ON"]') ?>
                    </div>
                    <div style="clear: both"><!-- --></div>
                    <div class="float-right button-wrap" style="padding: 80px 0 0px;    width: 125px;">
                                    <span class="active homeInterviewA">Interview</span>
                               <?php if(get_post_meta($post->ID, 'about_text', true) != ""){ ?>     <span class="homeAboutA">About</span> <?php } ?>
                                <?php if(get_post_meta($post->ID, 'sponsor_text', true) != ""){ ?>    <span class="sposorA">Sponsor</span> <?php } ?>
                                   <?php  
                                if($_GET['id'] == null){
    $args222 = array('post_type' => 'interview', 'posts_per_page' => 1);
}else{
    $args222 = array('post_type' => 'interview', 'p' => $_GET['id']);
}
                                  $loop12 = new WP_Query($args222);
                                  $s= 0;
                                 while($loop12->have_posts() && $s2 < 9) : $loop12->the_post();
                                 
                                 ?>
                                    <?php 
                                    
                                   $sp = get_post_meta($post->ID, 'spokescript', true); 
                                   $one = 1;
                                   $about_num = $i - $one;
                                   if($sp){
                                  echo ' <a id="spokesciptabout'.$i.'" class="spokeabout111">SpokeScript</a>' ;}else{ echo '<a id="spokesciptabout'.$i.'" class="spokeabout111" style="display: none; padding-top: 89px;">SpokeScript</a>';}
                                  ?>
                                   <!--  <span  style="<?= (($i - 1) == 0) ? 'display:none' : '' ?>"><a class="text-black" href="#spokeScript<?= $i ?>">SpokeScript</a> </span> -->
                                    <? $s++;  endwhile; 
?>    
 
                                    <span style="background: #f6f5e9;
    font-family: 'Helvetica Neue';
    padding: 0;
    font-size: 11.09pt;
    font-weight: 300;
    text-transform: capitalize; "><button style="display: block;    text-align: left;text-transform: capitalize;
    padding: 19px 13px;
    background-color: #f6f5e9;
    margin-top: 7px;
    margin-bottom: 4px;
    width: 125px;
    height: 50px;
    font-family: 'Helvetica Neue';
    font-size: 11.09pt;
    font-weight: 300;
    text-decoration: none;
    color: black;
    cursor: pointer;"  class="text-black" id="<?= $post->ID ?>" onclick="savepost(this)"><?php if (in_array($post->ID, $_SESSION['savedposts'])) 
                                                                                          { 
                                                                                          echo "saved"; 
                                                                                          } 
                                                                                        else
                                                                                          { 
                                                                                          echo "save"; 
                                                                                          }  ?></button> </span>
                                           <?php if($sp){
                                  echo ' ' ;}else{ echo '<a id="spokesciptabout'.$i.'" class="spokeabout111" style="visibility: hidden; padding-top: 89px;">SpokeScript</a>';}
                                  ?>                                               
                                    <!--<span class="sposorA"><a class="text-black">Sponsor</a></span>-->
                                    
                                </div>
                </div>
            </div>
        </div>
          
    <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);

if($spokescript){
?>
 <div class="container-fluid content-bg-color padding-lr-65 bg-color-fffef3" id="spokeScriptsection">
                         <div class=" bg-color-fff hidemobile" id="spokeScriptsection" >
                            <div class="col-md-9 pl-0 spokescript-content">
                                <h2 class="">SpokeScript</h2>
                                <p><?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                            </div>
                            <div class="col-md-12 pl-0 sticky-stopper" style="
    padding: 47.5px;
">
    </div>
                        </div>
                         </div>
 <? } else {
 
 echo "";
 }?>
      
<?php endwhile; 

?>        

   </div>
   <div class="sticky-stopper"></div>
                       <div class="accordion hidelg" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link homepageinterviewaccbutt collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Interview</h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <?php //the_content(); 
                                    $content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 280, NULL );
echo $content;
                                    
                                    ?>
      </div>
    </div>
  </div>
  
  <?php $aboutcontent= get_post_meta($post->ID, 'about_text', true);

if($aboutcontent){
?>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link homepageaboutaccbutt collapsed" type="Three" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="width: 100%; border-bottom-width: 0px;text-align: left;">
          <h2 class="interview-heading-h2">About</h2>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p><?php echo get_post_meta($post->ID, 'about_text', true); ?></p>
      </div>
    </div>
  </div>
  
 <? } ?> 
  
<?php $sponsorcontent= get_post_meta($post->ID, 'sponsor_text', true);

if($sponsorcontent){
?>

 <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link homepagesponsoraccbutt collapsed" type="Two" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Sponsor</h2>
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p><?php echo get_post_meta($post->ID, 'sponsor_text', true); ?></p>
      </div>
    </div>
  </div>
 <? }?>  
 
 <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);

if($spokescript){
?>

<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link homepagesponsoraccbutt collapsed" type="Four" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Spokescript</h2>
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <p><?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
      </div>
    </div>
  </div>
 <? }else{}?>
  <span style="background: #f6f5e9;
    font-family: 'Helvetica Neue';
    padding: 0;
    font-size: 11.09pt;
    font-weight: 300;
    text-transform: capitalize;"><button style="display: block;
    text-align: left;
    text-transform: uppercase;
    padding: 0px 8px;
   
    background: #fffef3;
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    width: 100%;
    height: 43px;
 
    font-size: 11.09pt;
    font-size: 12.5pt;
    font-weight: 300;
   
    text-decoration: none;
    color: black;
    cursor: pointer;"  class="text-black" id="<?= $post->ID ?>" onclick="savepost(this)"> <?php if (in_array($post->ID, $_SESSION['savedposts'])) 
                                                                                          { 
                                                                                          echo "Saved"; 
                                                                                          } 
                                                                                        else
                                                                                          { 
                                                                                          echo "Save"; 
                                                                                          }  ?></button></button> </span>

</div> 
     <div class=" moreinterviewtab bg-color-eceadf" >
      
<div class="padding-lr-52">
   <div class="col-md-12 more_interviews">
        <h5 class="padd-left12">More&nbsp;&nbsp;<span>Interviews</span></h5>
        </div>
    <?php
                $argss = array('post_type' => 'interview', 'posts_per_page' => 9);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        if($src){
                            $src1 = $src;
                        }else{
                            $src1 = "http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg";
                        }
                        ?>
     <div class="col-md-4 col-sm-6 col-xs-12 container1 w3-animate-opacity1" style="margin-bottom: 25px;">
      <?php 
    global $post;
    $post_slug = $post->post_name;
?>
             <a class="lightbox" href="<?php echo get_home_url() .'/single-interview/?id='.get_the_ID()?>">   
                    <div class="box14">
                        <img src="<?php echo $src[0] ?>" alt="" style="padding-bottom:0px;">
                        <div class="box-content">
                            
                            <h3 class="text2 title"><?php the_title(); ?></h3>
    <div class="text3border title1"></div>
    <h3 class="text5 title2"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "Figure";}?></h4>
    <h3 class="text4 title3">S<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?></h4>
                        </div>
                    </div></a>

     </div>
     <?php endwhile; ?>
                <?php endif; ?>
      <div class="bg-color-f6f5e9">
        <div class="all_interviewhome padd-left12">
            <h5  class=""><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
    </div>
    <script>
    $(".spokeabout111").on("click", function() {
    $('html, body').animate({
        scrollTop: $("#spokeScriptsection").offset().top-90
    }, 0);
          $(".homeInterviewA").removeClass( "active");
      $(".homeAboutA").removeClass( "active");
      $(".sposorA").removeClass( "active");
       $(".spokescriptA").addClass( "active");
       $('.interview-heading-h2').html('Interview');
      $('.endoftext').html('Interview');
   
});

    </script>
<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        n2ss.ready(<?= $sliderId ?>, function (slider, sliderElement) {
            N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
                setTimeout(function () {
                    var html = '';
                    for (i = 0; i < slider.realSlides.length; i++) {
                        console.log(slider);
                        var ss = ''
                        var cl = (i == 0) ? 'active' : '';

                       // html = html + "<a href='#' onclick='ss(" + i + ");' class='switch slide-show-bullet " + cl + "' id='slide-tag-a-" + i + "'>&nbsp;</a>";
                        html = html + '<a onclick="ss('+ i + ')"><li id="slide-tag-a-' + i +'" class="' + cl + '"></li></a>'
                    }
                    $(".switchs").html(html);
                }, 500);
            });

            sliderElement.on('mainAnimationStart',
                function (e, animation, previousSlideIndex, currentSlideIndex) {
                });
            sliderElement.on('mainAnimationComplete',
                function (e, animation, previousSlideIndex, currentSlideIndex) {
                    $("#slide-tag-a-" + previousSlideIndex).removeClass('active');
                    $("#slide-tag-a-" + currentSlideIndex).addClass('active');
                });
        });
    });

    function nextSlide(next) {
        N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
            if (next) {
                slider.next();
            } else {
                slider.previous();
            }
        });
    }

    function ss(i) {
        N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
            slider.slide(i);
        });
    }
</script>

