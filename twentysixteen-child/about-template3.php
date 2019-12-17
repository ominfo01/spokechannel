<?php
/**
 * Template Name: single interview Page22
 *
 */ ?>

<?php get_header('new2');
$post = $_GET['id'];

if($post == null){
    $args = array('post_type' => 'member', 'posts_per_page' => 1);
}else{
    $args = array('post_type' => 'member', 'p' => $_GET['id']);
}

$string = $post;


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
.button-wrap span {
    background-color: #fffef3;
}
.spokeabout111 {
    
    background-color: #fffef3;
}
.block-copyright-tooltip {
    font-size: 14px;
}
.vertical-center {
  margin: 0;
 
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.spokehight {
    padding: 100px 0px 0px;
}
.block-copyright-tooltip, .block-copyright-dropdown {
    background-color: #dda269;
    color: #f6f5e9 !important;
    font-size: 12px;
    padding: 8px;
    position: fixed;
    text-align: justify;
    width: 460px;
    z-index: 2000;
}
.block-copyright-tooltip p:last-of-type, .block-copyright-dropdown p:last-of-type {
    margin-bottom: 0;
}
.block-copyright-tooltip {
    font-size: 14px;
}

.block-copyright-tooltip p:last-of-type, .block-copyright-dropdown p:last-of-type {
    margin-bottom: 0;
}/*
.n2-ss-slider .n2-grab{
    width: 100% !important;
}
.n2-ss-slide{
        width: 100% !important;
    margin: 0px !important;
}
.n2-ss-slider .n2-ss-layers-container{
    width: 100% !important;
    margin: 0px !important;
        height: 110vh ;
}*/
@media only screen and (max-width: 770px){
.carousel-indicator-area .all_interview {
    margin-top: 35px;
}}
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

    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset ;
    var diff = stopPoint + stickOffset ;
  

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: 'initial', right: 0 });
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', right: '65px', top: '130px'});
          
      } else {
          $sticky.css({position: 'absolute', top: 'initial', right: 0 });
          /*$('#sidemem4123').css({display:'none' });*/
            
          
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
        echo '<div class="" id="">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        }
        else if(!empty($video_slider_id) && empty($photo_slider_id)) {
        echo '<div class="" id="">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }

        else if(!empty($photo_slider_id) && !empty($video_slider_id)) {
        echo '<div class="photo_slide" id="photo_slide">'.do_shortcode("[smartslider3 slider='" . $photo_slider_id . "']").'</div>';
        echo '<div class="video_slide" id="video_slide" style="display:none">'.do_shortcode("[smartslider3 slider='" . $video_slider_id . "']").'</div>';
        }
        
        else 
        {
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="ak_header_image" style="background-image:url('.$imgurl.');"></div>';
        }
        ?>
</div>
</div> 
<?php endwhile; ?>
            <?php endif; ?>
<div class="content-bg-color" style="background: #fffef300;" id="content-body">
<div class=" padding-lr-65 carousel-indicator-area bg-color-fffef3" style="margin-top:0px; background-color: #fffef300;  " >
        <?php
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
        
        ?>
       <!-- <div style="z-index:-99;    margin-bottom: 0px;" class="col  d-flex h-100">
          
        </div>-->
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

        
         <div class="ml-auto justify-content-center align-self-center text-center next-pre-div" >
                                    
            </div>
       
        </div>
    </div>
        <div class=" padding-lr-80 bg-color-f6f5e9">
            <div class="col p-0">
                <div class="separator-div"></div>
            </div>
        </div>
        <div class="container-fluid col-md-12 padding-lr-65 bg-color-fffef3" >
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" >
                                <?php the_title(); ?>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style="padding: 0px;"><?php echo get_post_meta($post->ID, 'occupation', true); ?> <?php echo get_post_meta($post->ID, 'center-top-text', true); ?> </div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid hidemobile" style="padding: 4px 0px;">
                                </div>
                        </div>
        
        <div class="col-md-12 aboutusmembername padding-lr-65 bg-color-fffef3" style="padding-top: 5px;padding-bottom: 5px;">
                        
                        <div class="col-md-12 text-right home-right-text justify-content-center align-self-center season-episode-txt" >
                            
                            
<div class="col ml-auto justify-content-center align-self-center text-right next-pre-div" style="line-height:18px; min-height:33px;">
    
   


<?php  
 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 
 ?>
 
 <a class="about-tab tab-<?php echo get_the_ID(); ?> <?php if(get_the_ID() == $_GET['id']){ echo 'active'; } else if($_GET['id'] == null && $s == 0){echo 'active'; }    ?> " href="<?php echo get_home_url() .'/about-us?id='.get_the_ID() ?>" ><span id="<?php echo 'topmem'.$s; ?>" onclick="changecontent(this)" class="topmembuttonclass "  ><? echo get_the_title(); ?></span></a>
 
 
      <? $s++;  endwhile; 
?>
</div>
                                </div>
                        </div>
                        
     
                        
                        
                        
                        
       
        <div class=" row-eq-height bg-color-eceadf padding-lr-65 hidemobile about1-height" style="display: flex;">
            <div class="col-md-9 pl-0 body-content-single padd-bottom100" style="flex: 1;padding-left:0px;padding-right:0px; ">
                <h2 class="interview-heading-h2">Interview</h2>
                <?php  
                                 
                                 if($_GET['id'] == null){
    $args222 = array('post_type' => 'member', 'posts_per_page' => 1);
}else{
    $args222 = array('post_type' => 'member', 'p' => $_GET['id']);
}
                                  $loop12 = new WP_Query($args222);
                                  $s= 0;
                                 while($loop12->have_posts() && $s2 < 9) : $loop12->the_post();
                                 
                                 ?>
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s2; ?>" >
                                    <?php the_content($post->ID); ?>
                                </div>
                            
                                      <? $s2++;  endwhile; 
                                ?>
                
                
            </div>
            <div class="col-md-3 pr-0 padd-top100" style="<?php if($sp){ echo "margin-top:0px";}else{ echo "padding-top:100px"; };  ?> ; padding-left:0px;padding-right:0px;" >
                <div class="sticky static-right-button">
                     <div class="float-right sharing-div" >
                        <?php echo do_shortcode('[Sassy_Social_Share total_shares="ON"]') ?>
                    </div>
                                <div style="clear: both"><!-- --></div>
                                <div class="float-right button-wrap about-wrap padd-top-80 marg-right5">
                                    <?php  
 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 
 ?>
  
 <a href="<?php echo get_home_url() .'/about-us?id='.get_the_ID() ?>"> <span id="<?php echo 'sidemem'.$s; ?>" onclick="changecontent(this)"  class="sidemembuttonclass <?php if($s == 0) echo ''; ?> <?php if(get_the_ID() == $_GET['id']){ echo 'active'; } else if($_GET['id'] == null && $s == 0){echo 'active'; }    ?>" ><? echo get_the_title(); ?></span></a>

 
      <? $s++;  endwhile; 
?>

<?php  
                                if($_GET['id'] == null){
    $args222 = array('post_type' => 'member', 'posts_per_page' => 1);
}else{
    $args222 = array('post_type' => 'member', 'p' => $_GET['id']);
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
                                  echo ' <a id="spokesciptabout'.$i.'" class="spokeabout111">SpokeScript</a>' ;}else{ echo '<a id="spokesciptabout'.$i.'" class="spokeabout111" style="visibility: hidden; padding-top: 89px;">SpokeScript</a>';}
                                  ?>
                                   <!--  <span  style="<?= (($i - 1) == 0) ? 'display:none' : '' ?>"><a class="text-black" href="#spokeScript<?= $i ?>">SpokeScript</a> </span> -->
                                    <? $s++;  endwhile; 
?>    
                                </div>
                </div>
            </div>
        </div>
          <div class=" bg-color-eceadf padding-lr-65 hidemobile" style="margin-top:-15px">
            
        </div>
         <?php  
                                if($_GET['id'] == null){
    $args222 = array('post_type' => 'member', 'posts_per_page' => 1);
}else{
    $args222 = array('post_type' => 'member', 'p' => $_GET['id']);
}
                                  $loop12 = new WP_Query($args222);
                                  $s= 0;
                                 while($loop12->have_posts() && $s2 < 9) : $loop12->the_post();
                                 
                                 ?>
    <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);

if($spokescript){
?>
 <div class="container-fluid content-bg-color padding-lr-65" style="background: rgb(247, 245, 233);" id="spokeScriptsection">
                         <div class=" bg-color-fff hidemobile" id="spokeScriptsection" >
                            <div class="col-md-9 pl-0 spokescript-content spokehight" style="min-height: 400px;">
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
   <? $s++;  endwhile; 
?>    
<?php endwhile; 

?>        
<div class="sticky-stopper"></div>
   </div>

<div class="sticky-stopper"></div>   
 <div class="accordion hidelg" id="accordionExample">
  <div class="card" style="padding-bottom:0px">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link homepageinterviewaccbutt collapsed" style="<?php $spokescript11= get_post_meta($post->ID, 'spokescript', true); if(!empty($spokescript11)){  echo 'border-bottom-width: 0;'; } else {  echo 'border-bottom-width: 1px;'; }?>" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%; padding-top: 10px;text-align: left;border-top-width: 1px;">
          <h2 class="interview-heading-h2"><?php echo ($i - 1 == 0) ? 'About' : 'About'; ?></h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
                                
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s; ?>" >
                                    <?php the_content($post->ID); ?>
                                </div>
                            
                                      
      </div>
    </div>
  </div>
  <?php $spokescript= get_post_meta($post->ID, 'spokescript', true); if(!empty($spokescript)) { ?>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link homepageinterviewaccbutt collapsed " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%; text-align: left;">
           <h2 class="interview-heading-h2">SpokeScript</h2>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s; ?>" >
                                  <p> <?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                                </div>
                            
                    
                        
                       
                        
                        

      </div>
    </div>
  </div>
  <?php } else { echo '';} ?>
 
</div>  

     <div class=" moreinterviewtab bg-color-eceadf" >
      
</div>
    
    <script>
    $("span.homespokescriptA").on("click", function() {
    $('html, body').animate({
        scrollTop: $(".spokeScriptsubsection3").offset().top
    }, 0);
        
   
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
<script>
    /*function width_adjust(){

var screenwidth = window.innerHeight;
alert(screenwidth);
var elements = document.getElementsByClassName("n2-ss-slider n2-grab");
var elements2 = document.getElementsByClassName("n2-ss-slide");
var elements3 = document.getElementsByClassName("n2-ss-slider n2-ss-layers-container");
for(var i=0; i<elements3.length; i++){

    
elements3[i].style.margin = "0px 0px 0px 0px";
elements3[i].style.height = screenwidth;
}
for(var i=0; i<elements2.length; i++){

    
elements2[i].style.margin = "0px 0px 0px 0px";
elements2[i].style.height = screenwidth;
}

for(var j=0; j<elements.length; j++){


elements[j].style.margin = "0px 0px 0px 0px";
    elements[j].style.height = screenwidth;
}
}*/
</script>
<script>
    $(".spokeabout111").on("click", function() {
    $('html, body').animate({
        scrollTop: $("#spokeScriptsection").offset().top-90
    }, 0);
          $(".homeInterviewA").removeClass( "active");
      $(".homeAboutA").removeClass( "active");
      $(".sposorA").removeClass( "active");
       $(".spokeabout111").addClass( "active");
       $('.interview-heading-h2').html('Interview');
      $('.endoftext').html('Interview');
   
});




</script>

<?php get_footer(); ?>