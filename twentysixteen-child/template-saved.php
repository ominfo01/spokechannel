<?php
/**
 * Template Name: Saved Interview Page
 *
 */ 
 session_start();
get_header('new2'); 


?>
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
  opacity: 0;
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
.unsaveBtn {
    float: right;
    margin: 0px 0 0 0;
    z-index: 99;
    position: absolute;
    right: 12px;
    width: 30px;
    height: 30px;
    background:url(https://www.spoke-magazine.com/thespokechannel/wp-content/themes/spoke/images/Close-Icon.jpg);
    background-size: cover;
    border: none;
    cursor: pointer;
}
.text3 {
 
  color: black;
    font-size: 18.37pt;
    padding: 16px 0px;
    
    text-transform: capitalize;
    font-weight: 300;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
}

</style>
<?php 





foreach($_SESSION['savedposts'] as $result) {
    
}?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

    function unsavepost(obj){
       
       var str = "http://theaiteecompany.com/thespoke/wordpress/test?q=";
       var id=obj.id;
        var url = str.concat(id);
        var xmlhttp = new XMLHttpRequest();
        var newid = "container".concat(id);
        var container = document.getElementById(newid);
     var fadeTarget = document.getElementById(newid);
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 30);
     setTimeout(function () {
        document.getElementById(newid).style.display = "none";
        var temp=0;
        var x = document.getElementsByClassName("count");
         for(var i = 0; i < x.length; i++){
             if(x[i].style.display!="none"){
               temp=1;  
             }
         }
        if(temp==0){
           var node = document.createElement("P");
           node.innerHTML = "You haven’t saved any interviews yet, your saved interviews will appear here.";
           node.id="nosavemsg";
           document.getElementById("nomsg_father").appendChild(node);
        }
         }, 300);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        
        
        
    }
   
</script>
   <div class="col-md-12 more_photos padding-lr-52" id="nomsg_father" style="padding-bottom:75px; min-height: 700px;    background: #edebdf;">
        <h5 class="leftpad12" ><span>SAVED</span> INTERVIEW</h5>
<?php

if(sizeof($_SESSION['savedposts'])>0){
foreach($_SESSION['savedposts'] as $id) {
$post = get_post($id); //assuming $id has been initialized
setup_postdata($post);

// display the post here



$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
?>
<?php if(!empty($post->ID)) {?>
<div class="col-md-4 col-sm-6 container1 count" id = "<?php echo 'container'.$id; ?>"style="padding-left:12.5px;padding-right:12.5px;margin-bottom: 25px;">
<?php 
    global $post;
    $post_slug = $post->post_name;
?></button>
 <button class="unsaveBtn" id="<?php echo $post->ID;?>" onclick="unsavepost(this)"></button>
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

     
<?php } else {



} 
}}else{echo '<p id="nosavemsg">You haven’t saved any interviews yet, your saved interviews will appear here.</p>';}
?>


 </div>
 
  <div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-52">
   <div class="col-md-12 more_interviews">
        <h5 class="moreinterviewsheader leftpad12">More&nbsp;&nbsp;<span>Interviews</span></h5>
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
     <div class="col-md-4 col-sm-6 container1" >
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
        <div class="all_interviewhome leftpad12">
            <h5  class=""><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
   
    </div>
<?php get_footer(); ?>
<style>
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
    }

</style>

<script>
    $(document).ready(function () {
       // window.onscroll = function() {myFunction()};
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