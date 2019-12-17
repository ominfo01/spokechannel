<?php
/**
 * Template Name: Contact Page
 *
 */ ?>
<?php get_header('new2'); ?>
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
    
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Bebas";
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}
</style>
<div id="block-block-15" class="block block-block block-copyright-tooltip relocated" style="display: none; left: 784px; top: 339px;"><div class="content"><p>You are violating copyright laws, this content is copyrighted.<br>© spoke. Do not attempt to copy/save.</p></div></div>  
 
<div class="container-fluid bg-color-eceadf" id="content-body" style="padding-bottom: 10px;">
    <div class="row contact-header w3-animate-opacity1">
        <div class="col heightline">
            <span>CONTACT</span>
        </div>
    </div>
    <div class="row padding-lr-65 w3-animate-opacity1">
        <div class="col heightline">
            <div class="form-control-contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">EMAIL</div>
            <span class="contact-label">speak@spoke-magazine.com</span>
        </div>
    </div>
    <div class="row padding-lr-65 w3-animate-opacity1">
        <div class="col heightline">
            <div class="form-control-contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">PHONE</div>
            <span class="contact-label">+91 982. 040. 1703</span>
        </div>
    </div>
    <div class="row padding-lr-65 w3-animate-opacity1">
        <div class="col heightline">
        <div class="form-control-contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">OTHER</div>
            <span class="contact-label">if you want to sponsor or suggest a guest name for our next season, email us.</span>
        </div>
    </div>
  
</div>


<div class="col-md-12 moreinterviewtab bg-color-eceadf padding-lr-52">
       

   <div class="col-md-12 more_photos heightline" style="padding-left:0px;">
        <h5 class="padd-left12">MORE  <span>INTERVIEWS</span></h5>
        </div>
        <?php
                $argss = array('post_type' => 'interview', 'posts_per_page' => 9);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
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
       
      <div class=" bg-color-f6f5e9">
        <div class="all_interviewhome" >
            <h5 class="" ><a href="https://www.spoke-magazine.com/thespokechannel/categories">ALL&nbsp;&nbsp;<span>Interviews</span></a>
            </h5>
        </div>
    </div>
   
   
    </div>
<?php get_footer(); ?>