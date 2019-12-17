<?php
/**
 * Template Name: Videos Page
 *
 */ ?>
<?php get_header('new2'); ?>
<style>
.container1 {
  position: relative;
  
}
.w3-animate-opacity1{
    opacity: 0;
   animation: fadeIn 1s ease-in both;
}
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
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
.text4 {
    color: black;
    font-size: 18.37pt;
    padding: 2px 3px 4px;
   
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}

.text5 {
 
  color: black;
    font-size: 16.37pt;
    padding: 16px 0px;
   
    text-transform: capitalize;
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}</style>




<div class="section_photos padding-lr-52 col-md-12" style="min-height: 700px;background-color:#edebdf;">
      <div class=" ">
     <div class="more_photos nopaddfotter  heightline">
        <h5 class="photogalheader w3-animate-opacity1"><span>VIDEO</span> GALLERY</h5>
        </div>
   
                <?php
                $argss = array('post_type' => 'interview', 'posts_per_page' => 100);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        
                        $photo_slider_id =  get_post_meta(($post->ID),'video_slider_id', true);
                       
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
             <!-- <div class="row bg-color-f6f5e9">

    </div>-->
            
           <!-- <div class="row padding-lr-80 bg-color-eceadf"><div class="col pl-0 all_interview"><h5><a href="<?php echo get_home_url() .'/videos' ?>"> All&nbsp;&nbsp;<span>VIDEOS</span></a></h5></div></div>-->

    </div>

 </div>







 
<div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-52" >
   <div class="col-md-12 more_interviews heightline">
        <h5 class="w3-animate-opacity" style=" padding-left: 10px;">More&nbsp;&nbsp;<span>Interviews</span></h5>
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
   <div class="col-md-4 col-sm-6 container1 w3-animate-opacity1" style="margin-bottom: 25px;">
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
        <div class="all_interviewhome" style="padding-left:12px; ">
            <h5  class="w3-animate-opacity"><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
   
    </div>    
   
<?php get_footer(); ?>
