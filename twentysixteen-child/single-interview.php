<?php
/**
 * Template Name: single interview Page
 *
 */ ?>
<?php get_header('new2'); ?>
<?php
$post = $_GET['id'];

?>
<?php
$args = array('post_type' => 'interview', 'p' => $_GET['id']);
$loop = new WP_Query($args); 
$i = 0;
?>
<style>
#menu-item-300 a{
    color:#d3a36f !important;
}
</style>
<style>
.container1 {
  position: relative;
  
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.button-wrap a {
    display: block;
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
    cursor: pointer;
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
   border-top: 0.5px solid #929292;
    margin-left: 100px;
    margin-right: 100px;
}

.text3 {
 
  color: black;
    font-size: 21.37pt;
    padding: 16px 0px;
    
    text-transform: uppercase;
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
.text4 {
    color: black;
    font-size: 21.37pt;
    padding: 2px 10px 4px;
    width: 94px;
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Bebas";
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 
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
<div class="container-fluid content-bg-color" id="content-body" xmlns="http://www.w3.org/1999/html">
    <div id="demo" class="carousel slide row carousel-fade" data-ride="carousel" data-interval="400000">
        <div class="carousel-inner">
            <?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class=" carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                        <div class="slider">
                          <div class="row">
        <?php
        $images = get_images_for_slide($post->ID);           
$videos = get_videos_for_slide($post->ID);
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
       
       if(!empty($photo_slider_id) && empty($video_slider_id)) {
        echo '<div class="w3-animate-opacity" id="">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        }
        else if(!empty($video_slider_id) && empty($photo_slider_id)) {
        echo '<div class="w3-animate-opacity" id="">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }

        else if(!empty($photo_slider_id) && !empty($video_slider_id)) {
        echo '<div class="photo_slide" id="photo_slide">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        echo '<div class="video_slide" id="video_slide" style="display:none">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }        
        else if (has_post_thumbnail()) {
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="ak_header_image w3-animate-opacity" style="background-image:url('.$imgurl.'); "></div>';
        }else{
                                 echo '<div class="ak_header_image" style="background-image:url(http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg);"></div>';
                                
             }              
        ?>
</div>
                        </div>
                        <!--<div class="row">
                            <div class="col separator-div"></div>
                        </div>-->
                        <div class="padding-lr-65 " style="" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
                        <div class="col-md-12 carousel-indicator-area bg-color-fffef3 padding-lr-65" style="margin-top:0px; height: 61px;" >
        <?php if(!empty($images) && !empty($videos)) { ?>
        <div style="z-index:-99;    margin-bottom: 17px;" class="col  d-flex h-100">
          
        </div>
  <? } ?>
  <?php
        if(!empty($images) && empty($videos)) {
       
        echo '<div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview" style="padding-left:0px;">';
            echo '<div class="btn-group switch" role="group" aria-label="Basic example" style="padding-top: 5px;    width: 90px;">';
       
          echo '</div>
        </div>';  
       
        }
        else if(!empty($videos) && empty($images)) {
       echo '<div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview" style="padding-left:0px;">';
            echo '<div class="btn-group switch" role="group" aria-label="Basic example" style="padding-top: 5px;width: 90px;">';
       
          echo '</div>
        </div>';  
            
        }

        else if(!empty($videos) && !empty($images)) {
            echo '<div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview" style="padding-left:0px;">';
            echo '<div class="btn-group switch" role="group" aria-label="Basic example" style="padding-top: 5px;">';
        echo '<a  class="btn photn_active border-right pl-0" id="showPhotos" style="padding-left:0;width: 90px;">Photo</a>';
    
        echo '<a  class="btn" id="showVideos"  style="width: 90px;">Video</a>';
          echo '</div>
        </div>';  
        }
        
        else 
        {
           echo '<div class="col-md-4 p-0 justify-content-center align-self-center padding-0 all_interview hidemobile" style="padding-left:0px;">';
            echo '<div class="btn-group switch" role="group" aria-label="Basic example" style="padding-top: 5px;">';
       
          echo '</div>
        </div>';  
        }
?>

        <div class="col-md-4"></div>
        
             <div class="col-md-1"></div>
         <div class="col-md-3 col-xs-12 hidemobile" style="text-align:right;z-index:1; padding-right:0; padding-left: 0;">
             
           
             
             
             
             
              <?php if(!empty($images) && !empty($videos)) { ?>
                                <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" style="  margin-top: 7px;">
                                    
                <table class="pagination-table" style="width: 100px;margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <tr>  
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" class="nextgo1" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-02.png" style="padding-bottom: 5px;"></a></td>--><td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;line-height: 14px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a class="slide-prevd" style="padding-left: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>" data-slide="prev">PREV</a></td>
                                            
                                            <td style="vertical-align: middle;width:10px;line-height: 14px; 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" data-slide="next">NEXT</a></td>
                                           <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-01.png" class="prevgo1" style="padding-bottom: 5px;"></a></td>-->
                    </tr>
                </table>

            </div>
            <?php } else if(!empty($videos) && empty($images)) { ?>
            
            <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" style=" padding-top: 20px;">
                                   
                <table class="pagination-table" style="width: 100px;margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <tr>  
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" class="nextgo1" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-02.png" style="padding-bottom: 5px;"></a></td>--><td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;line-height: 14px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a class="slide-prevd" style="padding-left: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>" data-slide="prev">PREV</a></td>
                                            
                                            <td style="vertical-align: middle;width:10px;line-height: 14px; 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" data-slide="next">NEXT</a></td>
                                           <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-01.png" class="prevgo1" style="padding-bottom: 5px;"></a></td>-->
                    </tr>
                </table>

            </div>
           <?php } else if(empty($videos) && !empty($images)) { ?>
           <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" style=" padding-top: 20px;">
                                    <table class="pagination-table" style="width: 121px;margin-left: auto;    padding-top: 6px;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>

                    <!--<tr >
                        <td class="" style="vertical-align: middle;width: 1px;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="prev" class="pre-a">&#8249;&#8249;</a></td>
                       <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 23px;"><a class="slide-prevd" href="#demo" data-slide="prev">PREV</a></td>
                                            <td style="vertical-align: middle;width: 1px;font-size: 13px;"><div class="pre-next-separator" >|</div></td>
                                            <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 23px;"><a href="#demo" data-slide="next">NEXT</a></td>
                                            <td class="" style="vertical-align: middle;width: 1px;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a">&#8250;&#8250;</a></td>
                    </tr>-->
                    
                    
                    <tr >
                        <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>"class="pre-a"><img   style="  margin-bottom: 3px; " src=""></a></td>
                        <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a style="    padding-left: 3px;" class="slide-prevd" href="<?php echo get_home_url() .'/single-interview?id='.  (($next_post == null) ? get_the_ID(): $next_post->ID) ?>" >PREV</a></td>
                       
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="    padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" >NEXT</a></td>
                        <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a    href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" class="next-a"><img style="  margin-bottom: 3px; " src=""></a></td>
                    </tr>
                </table>

            </div>
        <?    } else if(empty($videos) && empty($images)) { ?>
        
         <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" style=" padding-top: 20px;">
                                    <table class="pagination-table" style="width: 121px;margin-left: auto;    padding-top: 6px;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>

                    <!--<tr >
                        <td class="" style="vertical-align: middle;width: 1px;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="prev" class="pre-a">&#8249;&#8249;</a></td>
                       <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 23px;"><a class="slide-prevd" href="#demo" data-slide="prev">PREV</a></td>
                                            <td style="vertical-align: middle;width: 1px;font-size: 13px;"><div class="pre-next-separator" >|</div></td>
                                            <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 23px;"><a href="#demo" data-slide="next">NEXT</a></td>
                                            <td class="" style="vertical-align: middle;width: 1px;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a">&#8250;&#8250;</a></td>
                    </tr>-->
                    
                    
                    <tr >
                        <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="<?php echo get_home_url() .'/single-interview?id='. (($next_post == null) ? get_the_ID(): $next_post->ID) ?>"class="pre-a"><img   style="  margin-bottom: 3px; " src=""></a></td>
                        <td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a style="    padding-left: 3px;" class="slide-prevd" href="<?php echo get_home_url() .'/single-interview?id='.  (($next_post == null) ? get_the_ID(): $next_post->ID) ?>" >PREV</a></td>
                       
                        <td style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="    padding-right: 3px;" href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" >NEXT</a></td>
                        <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a    href="<?php echo get_home_url() .'/single-interview?id='. (($prev_post == null) ? get_the_ID(): $prev_post->ID) ?>" class="next-a"><img style="  margin-bottom: 3px; " src=""></a></td>
                    </tr>
                </table>

            </div>
        
        <? } ?>
        </div>
    </div>
                       
                         <div class= " col-md-12 padding-lr-65 carousel-indicator-area bg-color-fffef3" style=" z-index: -10;">
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
     <div class="col-md-12 padding-lr-65 bg-color-fffef3" style="    z-index: 10;">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style="height: 64px;">
                                <?php the_title(); ?>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style="padding: 0px;height: 64px;"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "FIGURE";}?> </div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style="height: 64px;padding: 4px 0px;">
                                s<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;<?php echo get_post_meta($post->ID, 'season_episode', true); ?><?php echo get_post_meta($post->ID, 'right-top-text', true); ?></div>
                        </div>
                        
                        
                        <div class="col-md-12 padding-lr-65 bg-color-fffef3 hidemobile" style=" padding-bottom: 24px;">
                            <div class="col-md-4 col-xs-4 h-100" style="padding-left: 0;">
                                <div class="align-self-center interview-col">
<span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_1_Lable', true)) { echo get_post_meta($post->ID, 'box_1_Lable', true);} else { echo 'Occupation';} ?>
                                    </span>
                                    <span class="d-block home-sub-header2" style="font-weight: lighter;"><?php echo get_post_meta($post->ID, 'box_1_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4  h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_2_Lable', true)) { echo get_post_meta($post->ID, 'box_2_Lable', true);} else { echo 'Writer';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2" style="font-weight: lighter;"><?php echo get_post_meta($post->ID, 'box_2_value', true); ?></span>
                                </div>

                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_3_Lable', true)) { echo get_post_meta($post->ID, 'box_3_Lable', true);} else { echo 'Photographer';} ?>
                                   </span>
                                    <span class="d-block home-sub-header2" style="font-weight: lighter;"><?php echo get_post_meta($post->ID, 'box_3_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_4_Lable', true)) { echo get_post_meta($post->ID, 'box_4_Lable', true);} else { echo 'Location';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2" style="font-weight: lighter;"><?php echo get_post_meta($post->ID, 'box_4_value', true); ?></span>
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
                                    <span class="d-block home-sub-header2" style="font-weight: lighter;"><?php echo date("F d, Y", $oldDateUnix); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 bg-color-eceadf padding-lr-65 hidemobile">
                             <div class="col-md-9 col-xs-12 padding- body-content" style="max-height:100%;min-height:685px;margin-top: 0;margin-bottom: 0;">
                                <h2 class="interview-heading-h2" style="    margin: 100px 0 100px;">Interview</h2>
                                <div class="interviewContentDiv w3-animate-opacity">
                                     <?php the_content();?>
                     <h5 style=" padding-left: 12px;font-family: 'GillSans';color: #000;font-weight: bold;font-size: 16pt;line-height: 16px;text-transform: uppercase;padding: 69px 0 100px;letter-spacing: 0.3px;transform: scale(1, 1.1);-webkit-transform: scale(1, 1.1);">END <span>of interview</span> &nbsp;&nbsp;</h5>
                                    
                                    
                                </div><?php if(get_post_meta($post->ID, 'about_text', true) != ""){ ?>
                                <div class="aboutContentDiv w3-animate-opacity">
                                    <p style="padding-bottom: 100px;"><?php echo get_post_meta($post->ID, 'about_text', true); ?></p>
                                </div>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID, 'sponsor_text', true) != ""){ ?>
                                <div class="sponsorContentDiv w3-animate-opacity" style="display:none">
                                    <p  style="padding-bottom: 100px;"><?php echo get_post_meta($post->ID, 'sponsor_text', true); ?></p>
<!--                                    <h5 style=" padding-left: 12px;font-family: 'GillSans';color: #000;font-weight: bold;font-size: 16pt;line-height: 16px;text-transform: uppercase;padding: 0 100px;letter-spacing: 0.3px;transform: scale(1, 1.1);-webkit-transform: scale(1, 1.1);"></h5>
-->                               </div>
                               <?php } ?>
                            </div>
                            <div class="col-md-3 col-xs-12 body-content " style="max-height:100%;min-height:685px;">
                                
                                
                                  
                                
                                
                                
                                  <div class="sticky-top">
                                <div class="float-right sharing-div" >
                                   <div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" ss-offset="0" heateor-sss-data-href="https://www.spoke-magazine.com/thespokechannel/interview/vikram-and-prateek/"><ul class="heateor_sss_sharing_ul"><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground" onclick="heateorSssPopup(&quot;https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssFacebookSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground" onclick="heateorSssPopup(&quot;http://twitter.com/intent/tweet?text=Vikram%20and%20Prateek&amp;url=https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Pinterest" title="Pinterest" class="heateorSssSharing heateorSssPinterestBackground" onclick="javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssPinterestSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Email" title="Email" class="heateorSssSharing heateorSssEmailBackground" onclick="window.location.href = 'mailto:?subject=' + decodeURIComponent('Vikram%20and%20Prateek' ).replace('&amp;', '%26') + '&amp;body=' + decodeURIComponent('https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel' )"><ss style="display:block" class="heateorSssSharingSvg heateorSssEmailSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width: 32px; height: 32px; border-radius: 999px; margin-left: 9px !important; visibility: visible;" title="Total Shares" class="heateorSssSharing heateorSssTCBackground"><div class="heateorSssTotalShareCount" style="font-size: 19.84px">0</div><div class="heateorSssTotalShareText" style="font-size: 12.16px">Shares</div></i></li></ul><div class="heateorSssClear"></div></div>
                                    
                                </div>
                                <div style="clear: both"><!-- --></div>
                                <div class="float-right button-wrap" style="padding: 80px 0 0px;">
                                    <span class="active homeInterviewA">Interview</span>
                               <?php if(get_post_meta($post->ID, 'about_text', true) != ""){ ?>     <span class="homeAboutA">About</span> <?php } ?>
                                <?php if(get_post_meta($post->ID, 'sponsor_text', true) != ""){ ?>    <span class="sposorA">Sponsor</span> <?php } ?>
                                    <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);

if($spokescript){
?>
                                     <a href="#spokeScriptsection" style="color:#000000 !important;">Spokescript</a>
                                    <? } else {
 
 echo "";
 }?>
 
                                    <span style="background: #f6f5e9;
    font-family: 'Helvetica Neue';
    padding: 0;
    font-size: 11.09pt;
    font-weight: 300;
    text-transform: capitalize;"><button style="display: block;    text-align: left;text-transform: capitalize;
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
                                    <!--<span class="sposorA"><a class="text-black">Sponsor</a></span>-->
                                    
                                </div>
                            </div>
                            </div>
                           
                            
                        </div>
                         
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
        <button class="btn btn-link homepageaboutaccbutt collapsed" type="Three" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="width: 100%; text-align: left;">
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
    <div class="card-header" id="headingOne">
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
</div>  
                        
                        
                       
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
 
<style>
    .interviewContentDiv, .aboutContentDiv {
      
        overflow: hidden;
    }

    .interview-overlay {
        top: 0 !important;
    }
</style>
</div>




       
 <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);

if($spokescript){
?>
 <div class="container-fluid content-bg-color padding-lr-65" style="background: #fffef3;" id="spokeScriptsection">
                         <div class=" bg-color-fff hidemobile" id="spokeScriptsection" style="    background-color: #fff;">
                            <div class="col-md-9 pl-0 spokescript-content">
                                <h2 class="">SpokeScript</h2>
                                <p><?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                            </div>
                        </div>
                         </div>
 <? } else {
 
 echo "";
 }?>
   
   








     <div class=" moreinterviewtab bg-color-eceadf" >
       
<div class="padding-lr-52">
   <div class="col-md-12 more_interviews">
        <h5 style=" padding-left: 12px;">More&nbsp;&nbsp;<span>Interviews</span></h5>
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
        <div class="all_interviewhome" style="padding-left:12px">
            <h5  class=""><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
    
    <script>
    $("span.homespokescriptA").on("click", function() {
    $('html, body').animate({
        scrollTop: $(".spokeScriptsubsection3").offset().top
    }, 0);
        
   
});



    </script>
<?php get_footer(); ?>