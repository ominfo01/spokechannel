<?php
/**
 * Template Name: Press Page
 *
 */ ?>
 <?php get_header('new2'); ?>
 
 
 
 <style>
 .disclaimer p{ 
    font-size: 16pt;
    font-family: 'GeorgiaProW01-Light';
    color: black;
    font-weight: 300;
    padding-bottom: 0;
    margin-bottom: 0;
    display: block;
    line-height: 36px;
    letter-spacing: 0.6px;
 }
 .disclaimer h3 {
    display: block;
    padding-top: 120px;
    border-bottom: black 3px solid;
    padding-bottom: 25px;
    margin-bottom: 50px;
    font-size: 16pt;
    font-family: 'GillSans';
    text-transform: uppercase;
    font-weight: bold;
    transform: scale(1, 1.1);
    -webkit-transform: scale(1, 1.1);
    -moz-transform: scale(1, 1.1);
    -ms-transform: scale(1, 1.1);
    -o-transform: scale(1, 1.1);
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
    width: 100%;
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
    width: 330px;
    text-transform: uppercase;
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}
.text4 {
    color: black;
    font-size: 21.37pt;
        padding: 2px 4px 0px;
    
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Bebas";
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}



</style>
 
 
 
 
 
 
 
 

 <div class="bg-color-edebdf descl_wrap" style="background: #edebdf;">
    <div id="scroll-div" class="fixed-topk photo-gallery-header content-bg-color">
        <div class="sticky-header padding-lr-65  heightline">
           <h5 id="sticky_h5" class="w3-animate-opacity1 leftpad00" >Press</h5>
        </div>
    </div>
    </div>
     <div class="bg-color-f6f5e9 descl_wrap" >
     <div class="padding-lr-52 col-md-12 content-bg-color pressopeningsec" style=" background: #edebdf;">
 <?php
                $argss = array('post_type' => 'press', 'posts_per_page' => 100);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        ?>
    <div class="col-md-4 col-sm-6 container1 w3-animate-opacity1 press1" style="padding-left:12.5px; padding-right:12.5px;margin-bottom: 25px;">
      <?php 
    global $post;
    $post_slug = $post->post_name;
?>
             <a class="lightbox" href="<?php echo get_home_url() .'/single-press/?id='.  get_the_ID() ?>">   
                    <div class="box14">
                        <img src="<?php echo $src[0] ?>" alt="" style="padding-bottom:0px;">
                         <div class="box-content">
                            
                            <h3 class="text2 title"><?php echo get_post_meta($post->ID, 'publication', true); ?></h3>
    <div class="text3border title1"></div>
    <h3 class="text5 title2"><?php $data123=get_post_meta($post->ID, 'country', true);  if($data123){echo get_post_meta($post->ID, 'country', true); }else{echo "Figure";}?></h3>
    <h3 class="text4 title3">Press</h4>
                        </div>
                    </div></a>

     </div>  
     <?php endwhile; ?>
                <?php endif; ?>
                  </div>    </div>
                  
  <script>
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $(".sticky-header").addClass("sticky");
    }
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll <= 100) {
        //clearHeader, not clearheader - caps H
        $(".sticky-header").removeClass("sticky");
    }
});
  </script>
 
 
 
 
 
 
 
 
 
 

<!--<div class="moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-65">
   <div class="col-md-12 more_photos">
        <h5 >PRESS</h5>
        </div>
        <?php
                $argss = array('post_type' => 'press', 'posts_per_page' => 100);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        ?>
    <div class="col-md-4 ">
        
             <a class="lightbox" href="<?php echo get_home_url() .'/single-press?id='.  get_the_ID() ?>">           
       <?php if($src){?>
            <img src="<?php echo $src[0] ?>" >
            
        <?} else { ?>
        <img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg" >
        <? }?>
        
     </div>
     <?php endwhile; ?>
                <?php endif; ?>
       
      
    </div>
   
    </div>
  <div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-65">
   <div class="col-md-12 more_interviews">
        <h5 >More&nbsp;&nbsp;<span>Interviews</span></h5>
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
    <div class="col-md-4 ">
        <?php 
    global $post;
    $post_slug = $post->post_name;
?>
             <a class="lightbox" href="<?php echo get_home_url() .'/interview/'. $post_slug ?>">           
        <img src="<?php if($src){ echo $src1[0];}else{ echo "http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg";} ?>">
        
     </div>
     <?php endwhile; ?>
                <?php endif; ?>
      <div class="bg-color-f6f5e9">
        <div class="all_interviewhome" >
            <h5  class=""><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
   
    </div>-->
    
     <div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-52" >
   <div class="col-md-12 more_interviews">
        <h5 class="padd-left12" >More&nbsp;&nbsp;<span>Interviews</span></h5>
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
    <div class="col-md-4 col-sm-6 container1 w3-animate-opacity1" style="padding-left:12.5px; padding-right:12.5px;margin-bottom: 25px;">
<?php 
    global $post;
    $post_slug = $post->post_name;
?>
             <a class="lightbox" href="<?php echo get_home_url() .'/single-interview/?id='.get_the_ID()?>">   
                    <div class="box14">
                        <img src="<?php echo $src[0] ?>" alt="" style="padding-bottom:0px;">
                        <div class="box-content">
                            
                            <h3 class="text2 title"><?php the_title(); ?></h3>
    <div class="text3border title1"     style= "margin-bottom: 0%;"></div>
    <h3 class="text5 title2" style="padding-top: 7.6%;"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "Figure";}?></h4>
    <h3 class="text4 title3" style=" border: 2px solid #000;">S<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?></h4>
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
 <?php get_footer(); ?>