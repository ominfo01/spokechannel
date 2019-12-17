<?php
/**
 * Template Name: About Page
 *
 */
/*get_header('new2');*/
get_header('new2');

$args = array('post_type' => 'member', 'posts_per_page' => 9);
$loop = new WP_Query($args); ?>
<div class="container-fluid content-bg-color" id="content-body">
<div id="demo" class="carousel slide row carousel-fade" data-ride="carousel" data-interval="false">
<div class="carousel-inner">
<?php if ($loop->have_posts()) : ?>
<?php $i = 0;
while ($loop->have_posts()) : $loop->the_post(); 
?>
<style>
.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
    border-color: #a7a7a7;
}
.borderphotovid {
    border-bottom: 0px solid #000; 
    border-top: 0px solid #bcbcb5;}
.aboutusmembername a.active {
    font-weight: 900;
}
div#contentmem0 {
    display: block;
}
#topcarousel0 #contentmem3 {
    display: none !important;
}
#topcarousel0 #contentmem2 {
    display: none !important;
}
#topcarousel0 #contentmem1 {
    display: none !important;
}
#topcarousel0 #contentmem4 {
    display: none !important;
}
#topcarousel0 #contentmem5 {
    display: none !important;
}
#topcarousel0 #contentmem6 {
    display: none !important;
}
#topcarousel0 #contentmem7 {
    display: none !important;
}
#topcarousel0 #contentmem8 {
    display: none !important;
}
#topcarousel0 #contentmem9 {
    display: none !important;
}
@media only screen and (max-width: 600px){
.borderphotovid {
    border-bottom: 0px solid #000;
    border-top: 1px solid #000;
    padding-left: 0;
    padding-right: 0;
}}
@media only screen and (max-width: 770px){
.aboutnameplate {
    border-top: 0px solid #000;
    border-bottom: 1px solid #000;
    margin: 0px 20px;
}}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
function spokescipt(obj){
    alert(obj.innerText.length);
}
  function changecontent(obj){
      var id=obj.id;
      var newid1 = 1;
      if(id.startsWith("topmem")){
          var postno = id.replace("topmem","");
         var spokesection = 'spokeScriptsection'.concat(postno); 
                    var spokesections = document.getElementsByClassName(spokesection);
                if(spokesections.length == "0"){
                    var spokebuttons = document.getElementsByClassName("spokeabout111");
                    for(var j = 0; j < spokebuttons.length; j++){
                        spokebuttons[j].style.display="none";
                    }
            }else{
                var spokebuttons = document.getElementsByClassName("spokeabout111");
                    for(var j = 0; j < spokebuttons.length; j++){
                        spokebuttons[j].style.display="block";}
            } 
         var sidemempost = 'sidemem'.concat(postno); 
         var topmempost = 'topmem'.concat(postno);            
         var divsToHide0 = document.getElementsByClassName("topmembuttonclass");
        var temp0 = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide0.length; i++){
                divsToHide0[i].className = "topmembuttonclass";
            }     
        for(var i = 0; i < divsToHide0.length; i++){
                
                if(divsToHide0[i].id==topmempost){
                divsToHide0[i].className = "topmembuttonclass active";
                }
            }         
         var divsToHide01 = document.getElementsByClassName("sidemembuttonclass");
        var temp01 = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide01.length; i++){
                divsToHide01[i].className= "sidemembuttonclass";  
            } 
            for(var i = 0; i < divsToHide01.length; i++){
                 
                if(divsToHide01[i].id==sidemempost){
                divsToHide01[i].className = "sidemembuttonclass active";
                }
            }    
        var divsToHide1 = document.getElementsByClassName("carousel-item");
        var temp = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide1.length; i++){
                temp = divsToHide1[i].className;
                divsToHide1[i].style.display = "none";
                temp = temp.replace("active","");
            }
        var carousel_post = "topcarousel".concat(postno);   
        var carousel = document.getElementById(carousel_post);  
        var carousel_class = carousel.className;
        var new_carousel_class = carousel_class.concat(" active");
        carousel.className = new_carousel_class;
        carousel.style.display = "block";
          var divsToHide = document.getElementsByClassName("interviewContentDiv"); //divsToHide is an array
            for(var i = 0; i < divsToHide.length; i++){
                divsToHide[i].style.display = "none"; // depending on what you're doing
            }
        var newid = id.replace("topmem", "contentmem");  
         var divsToHide3 = document.getElementsByClassName("interviewContentDiv"); //divsToHide is an array
            for(var i = 0; i < divsToHide3.length; i++){
                if(divsToHide3[i].id==newid){
                divsToHide3[i].style.display = "block"; // depending on what you're doing
                }
            }
        var divsToHide6 = document.getElementsByClassName('spksrt'); //divsToHide is an array
            for(var i = 0; i < divsToHide6.length; i++){
                divsToHide6[i].style.display = "none";
            }
            var divsToHide7 = document.getElementsByClassName('spokescript-content'); //divsToHide is an array
            for(var i = 0; i < divsToHide7.length; i++){
                divsToHide7[i].style.display = "none";
            }
        
        
        
        
        var newid2 = id.replace("topmem", "spokemem");
     var newid3 = id.replace("topmem", "spokeScriptsubsection");
    
         
        var newid4 = id.replace("topmem", "spokeScriptsection");
             var divsToHide4 = document.getElementsByClassName(newid3); //divsToHide is an array
            for(var i = 0; i < divsToHide4.length; i++){
                divsToHide4[i].style.display = "block";
            }
            var divsToHide5 = document.getElementsByClassName(newid4); //divsToHide is an array
            for(var i = 0; i < divsToHide5.length; i++){
                divsToHide5[i].style.display = "block";
            }
    
      }else{
                    var postno = id.replace("sidemem","");
                    var spokesection = 'spokeScriptsection'.concat(postno); 
                    var spokesections = document.getElementsByClassName(spokesection);
                if(spokesections.length == "0"){
                    var spokebuttons = document.getElementsByClassName("spokeabout111");
                    for(var j = 0; j < spokebuttons.length; j++){
                        spokebuttons[j].style.display="none";
                    }
            }else{
                var spokebuttons = document.getElementsByClassName("spokeabout111");
                    for(var j = 0; j < spokebuttons.length; j++){
                        spokebuttons[j].style.display="block";
            }
            }
        var sidemempost = 'sidemem'.concat(postno); 
         var topmempost = 'topmem'.concat(postno);            
         var divsToHide0 = document.getElementsByClassName("topmembuttonclass");
        var temp0 = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide0.length; i++){
                divsToHide0[i].className = "topmembuttonclass";
            }     
        for(var i = 0; i < divsToHide0.length; i++){
                
                if(divsToHide0[i].id==topmempost){
                divsToHide0[i].className = "topmembuttonclass active";
                }
            }         
         var divsToHide01 = document.getElementsByClassName("sidemembuttonclass");
        var temp01 = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide01.length; i++){
                divsToHide01[i].className= "sidemembuttonclass";  
            } 
            for(var i = 0; i < divsToHide01.length; i++){
                 
                if(divsToHide01[i].id==sidemempost){
                divsToHide01[i].className = "sidemembuttonclass active";
                }
            } 
          var divsToHide1 = document.getElementsByClassName("carousel-item");
        var temp = "";
        //divsToHide is an array
            for(var i = 0; i < divsToHide1.length; i++){
                temp = divsToHide1[i].className;
                divsToHide1[i].style.display = "none";
                temp = temp.replace("active","");
            }
        var carousel_post = "topcarousel".concat(postno);   
        var carousel = document.getElementById(carousel_post);  
        var carousel_class = carousel.className;
        var new_carousel_class = carousel_class.concat(" active");
        carousel.className = new_carousel_class;
        carousel.style.display = "block";
          var divsToHide = document.getElementsByClassName("interviewContentDiv"); //divsToHide is an array
            for(var i = 0; i < divsToHide.length; i++){
                divsToHide[i].style.display = "none"; // depending on what you're doing
            }
        var newid = id.replace("sidemem", "contentmem");  
         var divsToHide3 = document.getElementsByClassName("interviewContentDiv"); //divsToHide is an array
            for(var i = 0; i < divsToHide3.length; i++){
                if(divsToHide3[i].id==newid){
                divsToHide3[i].style.display = "block"; // depending on what you're doing
                }
            }
             var divsToHide6 = document.getElementsByClassName('spksrt'); //divsToHide is an array
            for(var i = 0; i < divsToHide6.length; i++){
                divsToHide6[i].style.display = "none";
            }
            var divsToHide7 = document.getElementsByClassName('spokescript-content'); //divsToHide is an array
            for(var i = 0; i < divsToHide7.length; i++){
                divsToHide7[i].style.display = "none";
            }
        
        
        
        
        var newid2 = id.replace("sidemem", "spokemem");
     var newid3 = id.replace("sidemem", "spokeScriptsubsection");
    
         
        var newid4 = id.replace("sidemem", "spokeScriptsection");
             var divsToHide4 = document.getElementsByClassName(newid3); //divsToHide is an array
            for(var i = 0; i < divsToHide4.length; i++){
                divsToHide4[i].style.display = "block";
            }
            var divsToHide5 = document.getElementsByClassName(newid4); //divsToHide is an array
            for(var i = 0; i < divsToHide5.length; i++){
                divsToHide5[i].style.display = "block";
            }
    
      }

      
  }
 
</script>

<div id="<?php echo 'topcarousel'.$i; ?>"class="bg-color-fffef3 carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
<?php $i++; ?>
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
 

<div class="row carousel-indicator-area d-flex padding-lr-80 bg-color-fffef3" style="height: 62px;">
            
  <?php
        if(!empty($photo_slider_id) && empty($video_slider_id)) {
            
          echo '  <div class="col-md-12 col-xs-12 justify-content-center align-self-center" style="padding-left:0;padding-right:0px;">';
echo '<div class="btn-group switch" role="group" aria-label="Basic example">';
        echo '<a  class="btn pl-0 photn_active border-right" id="showPhotos" style="padding-left:0;">Photo</a>';
         
        echo '<a  class="btn text-muted" style="color:#808080;pointer-events: none;cursor: default;padding-right: 0;">Video</a>';
       echo '</div>';
echo '</div>';
       
        }
        else if(!empty($video_slider_id) && empty($photo_slider_id)) {
              echo '  <div class="col-md-12 col-xs-12 justify-content-center align-self-center" style="padding-left:0;padding-right:0px;">';
echo '<div class="btn-group switch" role="group" aria-label="Basic example">';
        echo '<a  class="btn pl-0 text-muted border-right" style="color:#808080;pointer-events: none;cursor: default;    padding-left: 0;">Photo</a>';
    
        echo '<a  class="btn photn_active" id="showVideos" style="padding-right: 0;">Video</a>';
         echo '</div>';
echo '</div>';
            
        }

        else if(!empty($video_slider_id) && !empty($photo_slider_id)) {
              echo '  <div class="col-md-4 col-xs-12 justify-content-center align-self-center" style="padding-left:0;padding-right:0px;">';
echo '<div class="btn-group switch" role="group" aria-label="Basic example">';
        echo '<a  class="btn photn_active border-right pl-0" id="showPhotos" style="padding-left:0;">Photo</a>';
      
        echo '<a  class="btn" id="showVideos" style="padding-right: 0;">Video</a>';
         echo '</div>';
echo '</div>';
            
        }
        
        else 
        {
 echo '  <div class="col-md-4 col-xs-12 justify-content-center align-self-center" style="padding-left:0;padding-right:0px;">';            
echo '<div class="btn-group switch" role="group" aria-label="Basic example">';
        echo '<a  class="btn pl-0 text-muted border-right" style="color:#808080;pointer-events: none;cursor: default;    padding-left: 0;">Photo</a>';
    
        echo '<a  class="btn " id="showVideos" style="color:#808080;pointer-events: none;cursor: default;padding-right: 0;">Video</a>';
         echo '</div>';
echo '</div>'; 
        }
?>


  <?php if(empty($videos) && empty($images)){ ?>
  
  <?}else{ echo '<div class="col-md-4 col-xs-0" style="padding-left:0px; padding-right:0px;z-index: -99;"></div>';}?>


                        </div>
                        
                        <div class="row bg-color-fffef3 aboutnameplate">
                            <div class="col-md-4 col-sm-4 col-xs-12 padding-0 home-header justify-content-center align-self-center interview-title" style="padding: 0px;line-height:64px;">
                                <div class="w3-animate-opacity"><?php the_title(); ?></div>
                            </div>
                            <div
                                class="col-md-4 col-sm-4 col-xs-12 text-center home-header-center justify-content-center align-self-center type-text borderphotovid">
                               <div class="w3-animate-opacity"><?php echo get_post_meta($post->ID, 'occupation', true); ?> <?php echo get_post_meta($post->ID, 'center-top-text', true); ?></div></div>
                            <div class="col-md-4 col-sm-4 padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt">
                               
                                </div>
                        </div>
                        
                         
                         
                         

                         
                         
                         
                         
                         

                        
                       
                         
                         
                         
<!--------------------------------------------------------------------->                   
                        <div class="col-md-12 aboutusmembername padding-lr-65 bg-color-fffef3" style="padding-top: 5px;padding-bottom: 5px;">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 text-right home-right-text justify-content-center align-self-center season-episode-txt" >
                            
                            
<div class="col ml-auto justify-content-center align-self-center text-right next-pre-div" style="line-height:18px; height:33px;">
    
  


<?php  
 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 
 ?>
  
 <a class="about-tab" ><span id="<?php echo 'topmem'.$s; ?>" onclick="changecontent(this)" class="topmembuttonclass <?php if($s == 0) echo 'active'; ?>"  ><? echo get_the_title(); ?></span></a>
 
 
      <? $s++;  endwhile; 
?>
</div>
                                </div>
                        </div>
                        
                       <div class="row padding-lr-80 bg-color-fffef3 hidemobile" > <div class="col"><div style="height:60px;"></div></div></div>
                    
                        
                       
                        
                        <div class="row bg-color-eceadf padding-lr-80 hidemobile" style="min-height: 770px;">
                            <div class="col-md-9 body-content-single" style="padding-bottom:80px !important;padding-left: 0;">
                                <h2 class="interview-heading-h2"><?php echo ($i - 1 == 0) ? 'About' : 'About'; ?></h2>
                                 <?php  
                                 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
                                  $loop1 = new WP_Query($args22);
                                  $s= 0;
                                 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
                                 
                                 ?>
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s; ?>" >
                                    <?php the_content($post->ID); ?>
                                </div>
                            
                                      <? $s++;  endwhile; 
                                ?>
                            </div>
                            
                        
                            
                            <div class="col-md-3 body-content-single" style="padding-right:7px;">
                <div class="<?php echo 'sticky'.$i ?> static-right-button">
                    <div class="float-right sharing-div" >
                                    <?php echo do_shortcode('[Sassy_Social_Share total_shares="ON"]') ?>
                                </div>
                                <div style="clear: both"><!-- --></div>
                                <div class="float-right button-wrap about-wrap" style="padding: 80px 0;">
                                    <?php  
 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 
 ?>
  
 <a > <span id="<?php echo 'sidemem'.$s; ?>" onclick="changecontent(this)"  class="sidemembuttonclass <?php if($s == 0) echo 'active'; ?>" ><? echo get_the_title(); ?></span></a>

 
      <? $s++;  endwhile; 
?>
                                    <?php 
                                   $sp = get_post_meta($post->ID, 'spokescript', true); 
                                   $one = 1;
                                   $about_num = $i - $one;
                                  echo ' <a style="color:#000000 !important;" id="spokesciptabout'.$i.'" class="spokeabout111">SpokeScript</a>';  
                                  ?>
                                   <!--  <span  style="<?= (($i - 1) == 0) ? 'display:none' : '' ?>"><a class="text-black" href="#spokeScript<?= $i ?>">SpokeScript</a> </span> -->
                                </div>
                            </div>
                            </div>
                        </div>
      <?php  
                                 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
                                  $loop1 = new WP_Query($args22);
                                  $s= 0;
                                 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
                                 $temp = "style = 'background: #f7f5e9; display:none;'";
                                 $temp1 = "style = 'background: #f7f5e9;'";
                                                                  $temp2 = "style = 'display:none;'";
                                 if(get_post_meta($post->ID, 'spokescript', true)!=""){
                                 ?>
                         <div class="<?php echo 'row padding-lr-80 bg-color-fff spksrt hidemobile spokeScriptsection'.$s; ?>" id="<?php echo 'aboutspokesection'.$s; ?>" style = 'background: #f7f5e9;'>
                           
                                
                                 <div class="<?php echo 'col-md-9 spokescript-content spokeScriptsubsection'.$s; ?>" <?php if($s > 0){ echo $temp2;} ?> >
                                 <h2 class="interview-heading-h2">SpokeScript</h2>
                               
                                <div class="interviewspokecontentDiv spokescriptcontent" id="<?php echo 'spokemem'.$s; ?>" >
                                   <?php echo get_post_meta($post->ID, 'spokescript', true); ?>
                                </div>
                            
                                      
                        </div>
                            
                        </div>
                        
                       <? }$s++;  endwhile; 
                                ?>
 <div class="accordion hidelg" id="accordionExample">
  <div class="card" style="padding-bottom:0px;border-top: 1px solid #bbb2b2;    border-bottom: 1px solid #bbb2b2;">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" style="border-bottom-width: 0;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%; padding-top: 10px;text-align: left;border-top-width: 1px;">
          <h2 class="interview-heading-h2"><?php echo ($i - 1 == 0) ? 'About' : 'About'; ?></h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
                                 <?php  
                                 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
                                  $loop1 = new WP_Query($args22);
                                  $s= 0;
                                 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
                                 
                                 ?>
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s; ?>" >
                                    <?php the_content($post->ID); ?>
                                </div>
                            
                                      <? $s++;  endwhile; 
                                ?>
                                      
      </div>
    </div>
  </div>
  <?php if(!empty($sp)) { ?>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%; text-align: left;">
           <h2 class="interview-heading-h2">SpokeScript</h2>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <?php
                                $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
                                  $loop1 = new WP_Query($args22);
                                  $s= 0;
                                 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
                                 
                                 ?>
                                <div class="interviewContentDiv" id="<?php echo 'contentmem'.$s; ?>" >
                                  <p> <?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                                </div>
                            
                                      <? $s++;  endwhile; 
                                ?>
                    
                        
                       
                        
                        

      </div>
    </div>
  </div>
  <?php } else { echo '';} ?>
 
</div>                                 
                                
                                
                                


                   
                        

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<script>
        $(document).ready(function (){
            var all = $(".spokeScriptsection0").map(function() {
                return this.innerHTML;
            }).get();
            if(all.length=="0"){
                $('.spokeabout111').each(function(i, obj) {
                    obj.style.display="none";
                });
            }
        });    
        $(document).ready(function (){
            $("#spokesciptabout1").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection0").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout2").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel1 #aboutspokesection1").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout3").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel2 #aboutspokesection2").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout4").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel3 #aboutspokesection3").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout5").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection4").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout6").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection5").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout7").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection6").offset().top
                }, 300, "linear");
               
            });
        });
         $(document).ready(function (){
            $("#spokesciptabout8").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection7").offset().top
                }, 300, "linear");
               
            });
        }); $(document).ready(function (){
            $("#spokesciptabout9").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topcarousel0 #aboutspokesection8").offset().top
                }, 300, "linear");
               
            });
        });
    </script>
	
<script>
$("span").on("click", function() {
     $("html, body").animate({
            scrollTop: 0
        }, 0);
   
});
/*$("#topmem0").on("click", function() {
     
     $("#topcarousel0 #topmem0").addClass('active');
     $("#topcarousel0 #sidemem0").addClass('active');
     $("#topcarousel0 #topmem1").removeClass('active');
     $("#topcarousel0 #topmem2").removeClass('active');
     $("#topcarousel0 #topmem3").removeClass('active');
   
});
$("#topmem1").on("click", function() {
     $("#topcarousel1 #topmem0").removeClass('active');
     $("#topcarousel1 #topmem1").addClass('active');
     $("#topcarousel1 #sidemem1").addClass('active');
     $("#topcarousel1 #topmem2").removeClass('active');
     $("#topcarousel1 #topmem3").removeClass('active');
   
});
$("#topmem2").on("click", function() {
     $("#topcarousel2 #topmem0").removeClass('active');
     $("#topcarousel2 #topmem1").removeClass('active');
   $("#topcarousel2 #topmem2").addClass('active');
   $("#topcarousel2 #sidemem2").addClass('active');
     $("#topcarousel2 #topmem3").removeClass('active');
});
$("#topmem3").on("click", function() {
     
    $("#topcarousel3 #topmem0").removeClass('active');
     $("#topcarousel3 #topmem1").removeClass('active');
   $("#topcarousel3 #topmem2").removeClass('active');
     $("#topcarousel3 #topmem3").addClass('active');
   $("#topcarousel3 #sidemem3").addClass('active');
});
*/



</script>
<script>$("#spokesciptabout123").click(function() {
   /* $('html, body').animate({
       
        scrollTop: $("#aboutspokesection").offset().top
    }, 0);
});*/
 alert('its happening');
 </script>
 <script>
    $("span.aboutpokescriptA").on("click", function() {
   $('html, body').animate({
        scrollTop: $("#aboutspokesection").offset().top
    }, 0);
        
 
});
    </script>
    <div class="sticky-stopper"></div>
<?php get_footer(); ?>
