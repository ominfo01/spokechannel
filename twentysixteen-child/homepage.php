

<?php 
 
// begin the session
session_start();
get_header('new2');

?>

<?php
$args = array('post_type' => 'interview', 'posts_per_page' => 10);
$loop = new WP_Query($args); 
$i = 0;
?>


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

      <script src = "//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>

<div class="container-fluid content-bg-color" id="content-body" xmlns="http://www.w3.org/1999/html">
    <div id="demo" class="carousel slide row carousel-fade bg-color-fffef3" data-ride="carousel" data-interval="300000" >
        <div class="carousel-inner">
            <?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class=" carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                       <div class="slider">
                           <div class="ak_header_image" style="background-image:url('<?php
                            $i++;
                            if (get_post_meta($post->ID, 'thumbnail_image_url1', true)) {
                                //the_post_thumbnail('full', array('style' => 'width:100%'));
                                //$imgurl = the_post_thumbnail_url('full');
                               
                                $imgurl12 = get_post_meta($post->ID, 'thumbnail_image_url1', true);
                                echo $imgurl12;

                            }else if (has_post_thumbnail()){
							 $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                 echo $imgurl;
                                
                            }
                            ?>');"></div>
                        </div>
                        <!--<div class="row">
                            <div class="col separator-div"></div>
                        </div>-->
                        <div class="padding-lr-65" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
                        <div class="carousel-indicator-area bg-color-fffef3 padding-lr-65" style="margin-top:0px;height:auto;" >
        <div class="col-md-9 p-0 justify-content-center align-self-center padding-0 all_interview">
            
        </div>
        <div style="z-index:-99;margin-bottom: 24px;" class="col d-flex h-100">
           
        </div>
        <div class="col-md-4"></div>
         <div class="col-md-4 col-xs-12" style="text-align:right">
             <div class="col d-flex h-100" style="margin-top: -4px; margin-bottom: 0;">
                                <ul class="carousel-indicators justify-content-center align-self-center text-center" style="position: inherit !important;">
                                    <?php
                                    for ($ii = 0; $ii < $loop->post_count; $ii++) { ?>
                                        <li data-target="#demo" data-slide-to="<?php echo $ii ?>"
                                            class="<?php echo ($i - 1 == $ii) ? 'active' : ''; ?>"></li>
                                    <?php } ?>
                                </ul>
                            </div>
             </div>
             <div class="col-md-1"></div>
         <div class="col-md-3 col-xs-12" style="text-align:right;z-index:1; padding-right:0;    padding-left: 0;">
             
           
             
             
             
             
             
                                <div class="ml-auto justify-content-center align-self-center text-center next-pre-div">
                                    <table class="pagination-table" style="width: 100px;margin-left: auto;">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                if ($prev_post == null) {
                }
                ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <tr>  
                        <!--<td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" class="nextgo1" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-02.png" style="padding-bottom: 5px;"></a></td>--><td class="" style="vertical-align: middle;width: 1px;padding-bottom: 2px;width: 9px;line-height: 14px;padding:0;text-align: left;border-right: 1px solid #a4a39c !important;"><a class="slide-prevd" style="padding-left: 3px;" href="#demo" data-slide="prev">PREV</a></td>
                                            
                                            <td style="vertical-align: middle;width:10px;line-height: 14px; padding-bottom: 2px;width: 10px;padding:0;text-align: right;"><a style="padding-right: 3px;" href="#demo" data-slide="next">NEXT</a></td>
                                           <!-- <td class="" style="vertical-align: middle;width: 2px;    padding: 0;"><a href="#demo" style="letter-spacing: -1px;font-weight: 900;" data-slide="next" class="next-a"><img src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/Vector-Smart-Object2-01.png" class="prevgo1" style="padding-bottom: 5px;"></a></td>-->
                    </tr>
                </table>
                
                
               
                
                
                
                
                
                
                
                
                
                

            </div>
        </div>
    </div>
                       
                         <div class= " col-md-12 padding-lr-65 bg-color-fffef3" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
     <div class="container-fluid col-md-12 padding-lr-65 bg-color-fffef3" style="z-index: 10;">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style="height: 64px;">
                                <div class="w3-animate-opacity"><?php the_title(); ?></div>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style="padding: 0px;height: 64px;">  <div class="w3-animate-opacity"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "FIGURE";}?> </div></div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style="height: 64px;padding: 2px 0px;">
                                 <div class="w3-animate-opacity"> s<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?><?php echo get_post_meta($post->ID, 'right-top-text', true); ?></div></div>
                        </div>
                        
                        
                        <div class=" col-md-12 padding-lr-65 bg-color-fffef3 hidemobile" style=" padding-bottom: 24px;">
                            <div class="col-md-4 col-xs-4 h-100" style="padding-left: 0;">
                                <div class="align-self-center interview-col">
<span class="d-block home-sub-header ">
<?php if(get_post_meta($post->ID, 'box_1_Lable', true)) { echo get_post_meta($post->ID, 'box_1_Lable', true);} else { echo 'Occupation';} ?>
                                    </span>
                                    <span class="d-block home-sub-header2 w3-animate-opacity" ><?php echo get_post_meta($post->ID, 'box_1_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4  h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_2_Lable', true)) { echo get_post_meta($post->ID, 'box_2_Lable', true);} else { echo 'Writer';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2 w3-animate-opacity" ><?php echo get_post_meta($post->ID, 'box_2_value', true); ?></span>
                                </div>

                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header ">
<?php if(get_post_meta($post->ID, 'box_3_Lable', true)) { echo get_post_meta($post->ID, 'box_3_Lable', true);} else { echo 'Photographer';} ?>
                                   </span>
                                    <span class="d-block home-sub-header2 w3-animate-opacity" ><?php echo get_post_meta($post->ID, 'box_3_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <span class="d-block home-sub-header">
<?php if(get_post_meta($post->ID, 'box_4_Lable', true)) { echo get_post_meta($post->ID, 'box_4_Lable', true);} else { echo 'Location';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2 w3-animate-opacity" ><?php echo get_post_meta($post->ID, 'box_4_value', true); ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-4 h-100 interview-col2">
                                <div class="align-self-center interview-col ">
                                    <?php
                                    $oldDateUnix = strtotime(get_post_meta($post->ID, 'interview_date', true));
                                    ?>
                                    <!-- <span class="d-block home-sub-header"><?php echo date("Y", $oldDateUnix); ?></span> -->
                                    <span class="d-block home-sub-header ">
<?php if(get_post_meta($post->ID, 'interview_date_Lable', true)) { echo get_post_meta($post->ID, 'interview_date_Lable', true);} else { echo 'Date';} ?>
                                        </span>
                                    <span class="d-block home-sub-header2 w3-animate-opacity" ><?php echo date("F d, Y", $oldDateUnix); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="hometier2 bg-color-eceadf padding-lr-65 hidemobile col-md-12" >
                            <div class="col-md-3 col-xs-12 body-content fl-right">
                                
                                
                                  
                                
                                
                                
                                  <div class="sticky-top">
                                <div class="float-right sharing-div" >
                                   <?php echo do_shortcode("[Sassy_Social_Share]"); ?>
                                    
                                </div>
                                <div style="clear: both"><!-- --></div>
                                <div class="float-right button-wrap padd-top-80">
                                    <span class="active homeInterviewA1">Interview</span>
                                    <span class="homeAboutA1">About</span>
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
    cursor: pointer;"  class="text-black" id="<?= $post->ID ?>" onclick="savepost(this)"> <?php if (in_array($post->ID, $_SESSION['savedposts'])) 
                                                                                          { 
                                                                                          echo "Saved"; 
                                                                                          } 
                                                                                        else
                                                                                          { 
                                                                                          echo "Save"; 
                                                                                          }  ?></button></button> </span>
                                    <!--<span class="sposorA"><a class="text-black">Sponsor</a></span>-->
                                    <span class="read_now"><a class="text-white" href="<?php echo get_home_url() .'/single-interview/?id='.  get_the_ID()?>">Read now</a></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-9 col-xs-12 padding- body-content" >
                                <h2 class="interview-heading-h21 w3-animate-opacity">Interview</h2>
                                <div class="interviewContentDiv1 w3-animate-opacity">
                                   <?php   $content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 220, NULL );
echo '<p>' .$trimmed_content. '</p>';
                     ?>
                                    
                                    
                                </div>
                                <div class="aboutContentDiv1 w3-animate-opacity" style="display:none">
                                     <?php   $content1 = get_post_meta($post->ID, 'about_text', true);
$trimmed_content1 = wp_trim_words( $content1, 220, NULL );
echo '<p>' .$trimmed_content1. '</p>';
                     ?>
                                   
                                </div>
                               
                            </div>
                            
                        </div>
                         
                        <div class="accordion hidelg" id="accordionExample<?php echo $i ?>">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" id="homepageinterviewaccbutt<?php echo $i ?>" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
          <h2 class="interview-heading-h2">Interview</h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample<?php echo $i ?>">
      <div class="card-body">
          
          
         
        <?php //the_content(); 
                                    $content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 280, NULL );
echo '<p>' .$content. '</p>';
                                    
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
        <button class="btn btn-link collapsed" id="homepageaboutaccbutt<?php echo $i ?>" type="Three" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" >
          <h2 class="interview-heading-h2">About</h2>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample<?php echo $i ?>">
      <div class="card-body">
        <p><?php echo get_post_meta($post->ID, 'about_text', true); ?></p>
      </div>
    </div>
  </div>
  
 <? } ?> 
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
    /* border-bottom: #9c9c9c solid 1px; */
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
                                                                                          <span class="read_now" ><a style="display: block;    text-align: left;text-transform: uppercase;   padding: 8px 8px;   background: #292826;   margin-top: 0;   margin-bottom: 0;   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;   width: 100%;   height: 43px;   font-size: 12.5pt;   font-weight: 300;   border-bottom: #9c9c9c solid 1px;   color: #f6f5e9;   cursor: pointer; " class="text-white" href="<?php echo get_home_url() .'/single-interview/?id='.  get_the_ID()?>">Read now</a></span>

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
    border-top: 1px solid #929292;
    margin-left: 100px;
    margin-right: 100px;
}
.text3 {
 
  color: black;
    font-size: 21.37pt;
    padding: 16px 0px;
    width: 100%;
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

   <div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-52">
   <div class="col-md-12 more_interviews  heightline">
        <h5 class="moreinterviewsheader w3-animate-opacity leftpad12">More&nbsp;&nbsp;<span>IOnterviews</span></h5>
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
     <div class="col-md-4 col-sm-6 container1 w3-animate-opacity1" >
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
    <h3 class="text4 title3">S<?php echo get_post_meta($post->ID, 'season_no', true);?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true);?></h4>
                        </div>
                    </div></a>

     </div>
     <?php endwhile; ?>
                <?php endif; ?>
      <div class="bg-color-f6f5e9">
        <div class="all_interviewhome">
            <h5  class="w3-animate-opacity"><a href="http://theaiteecompany.com/thespoke/wordpress/interviews/">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
   
    </div>

  <style>
  #mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
 
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  
  border-radius: 0px;
  text-align: center;
}
#boxes #dialog {
  width:100%; 
  height:auto;
  left:0px;
   padding-bottom: 0px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}
.maintext{
    text-align: center;
  font-family: "Segoe UI", sans-serif;
  text-decoration: none;
}
body{
  background: url('bg.jpg');
}
#lorem{
	font-family: "Segoe UI", sans-serif;
	font-size: 12pt;
  text-align: left;
}
#popupfoot{
	font-family: "Segoe UI", sans-serif;
	font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
	text-decoration: none;
}
.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
	background-color:#D1D1D1;
	color: green;
}
.popupoption2:hover{
	
	color: red;
}
.subscribeform{
    
}

.subscribeform input[type="text"], .subscribeform input[type="email"]{
    background-color:rgb(255, 254, 243);
    padding:15px;
    border-radius:0px;
    border-color:#000000;
    font-family: 'GeorgiaProW01-Light';font-size: 15pt;
}
.subscribeform input[type="text"]{
    border-right-color:transparent;
}
.subscribeform input[type="submit"]{
    width:100%;padding-top:15px;padding-bottom:15px;    font-size: 24px;border-radius:0px;font-family: 'GillSans';font-weight:700;
}
.subscribeform input[type="text"]::placeholder , .subscribeform input[type="email"]::placeholder{
 font-family: 'GeorgiaProW01-Light';
 font-size: 15pt;

}
.subscribeform input[type="text"]:-ms-input-placeholder , .subscribeform input[type="email"]:-ms-input-placeholder{ /* Internet Explorer 10-11 */
 font-family: 'GeorgiaProW01-Light';font-size: 15pt;

}
.subscribeform input[type="text"]::-ms-input-placeholder , .subscribeform input[type="email"]::-ms-input-placeholder{ /* Microsoft Edge */
font-family: 'GeorgiaProW01-Light';font-size: 15pt;

}
.your-class::-webkit-input-placeholder {
    color: #dca167 !important;
}
input.butt {
   width: 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    font-size: 24px;
    /* border-radius: 0px; */
    font-family: 'GillSans';
    font-weight: 700;
    background: #1a1a1a;
    border: 0;
    border-radius: 2px;
    color: #fff;
    letter-spacing: 0.046875em;
    line-height: 1;
    padding: 0.84375em 0.875em 0.78125em;
    text-transform: uppercase;
    text-align: center;
    -webkit-appearance: button;
    cursor: pointer;user-select: none;
    white-space: pre;
    align-items: flex-start;
    text-align: center;
}
input.butt:focus {
    outline: none;
    color: #ffffff00;
    text-shadow: 0px 0px 0px #fff;
}
div#popup_box_close_322{
    position: absolute;
    background-image: url(https://www.spoke-magazine.com/thespokechannel/wp-content/themes/spoke/images/cross_button.png);
    background-position: center;
    background-color: transparent;
    opacity: 1;
    top: 50px;
    right: 50px;
    width: 46px;
    height: 46px;
}
.boxes .window{
    padding:0px 65px 100px;
}
.has_error{ background: red;}
@media only screen and (max-width: 770px) {
.subscribeform input[type="text"] {
    border-right-color: black;
}

div#popup_box_close_322{
top: 10px;
    right: 10px;
    background-repeat: no-repeat;
    background-size: 23px 23px;
}

.boxes .window{
    padding:0px 30px 30px;
}
  #boxes .subscribeheading {
    padding: 50px 0 50px 0;
}  
#boxes #dialog {
 
    padding-bottom: 0px;
  
}
}
  </style>
  
  
  
  
  
  
  
  
   <script>
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
    $('.butt').click(function() {
        if(!$('#firstname').val() && !$('#email').val()){
            $('#firstname').attr('placeholder', 'Please enter your full name')
            $('#firstname').addClass('your-class');
           $('#email').attr('placeholder', 'Please enter a valid email')
            $('#email').addClass('your-class');
        }
        else if($('#firstname').val() && !$('#email').val() ){
            
           $('#email').attr('placeholder', 'Please enter a valid email')
            $('#email').addClass('your-class');
        }
         else if(!$('#firstname').val() && $('#email').val()){
            
           $('#firstname').attr('placeholder', 'Please enter your full name')
             $('#firstname').addClass('your-class');
        } 
         else if($('#firstname').val() && $('#email').val() && !ValidateEmail($("#email").val())){
            
           $('#email').attr('placeholder', 'Please enter a valid email')
            $('#email').val("");
             $('#email').addClass('your-class');
             
        } else{
            $('.butt').attr('value', 'Thank you!')
        }
         
   
})
        </script>
 <!--<script> 
 setTimeout( function(){ 
$(document).ready(function() {    

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#boxes').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#boxes').fadeIn(0);	
		$('#boxes').fadeTo("fast",1);	
	 $("html").css({"overflow": "hidden"});
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
	
	
		//transition effect
		$(id).fadeIn(0); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		 $("html").css({"overflow": "initial"});
		$('#boxes').hide();
		$('.window').hide();
		setTimeout( function(){ 
		     	$('#boxes').show();
		$('.window').show();
		$("html").css({"overflow": "hidden"});
		 },180000);
	});		
	
	//if mask is clicked
	$('#boxes').click(function () {
		$(this).hide();
		$('.window').hide();
		
		
		 $("html").css({"overflow": "initial"});
		 
		 setTimeout( function(){ 
		     	$(this).show();
		$('.window').show();
		$("html").css({"overflow": "hidden"});
		 },180000);
	});		
	
});
}, 3000);



$(document).ready(function(){

    $('#popup_box_close_322').live('click', function(e) {  
        alert(1);
    });
});

</script> --> 
  <div id="boxes" >
      
  <div style="top: 199.5px; left: 0px; display: none; background-color: rgb(255, 254, 243);   position: fixed;" id="dialog" class="window padding-lr-65">
       <div class="ig_close close" id="popup_box_close_322"></div>
      <h1 class="subscribeheading w3-animate-opacity1" style=" text-align: left;width:80%;"><span>NEWSLETTER</span> SUBSCRIPTION</h1>
   
    <h3 class="subscribetext">Loving our content? Subscribe to our newsletter! We will notify you every time we post a new interview, featuring the great and inspiring minds interviewed here at SPOKE!</h3>
       <style>


.mce_inline_error {
    display: none !important;
} 
    </style>
  
    <div id="">
<form action="https://spoke-magazine.us19.list-manage.com/subscribe/post?u=fa0dcc2c86c2d064fe09c4435&amp;id=b437dd2693" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribeform" target="_blank" style="padding-left:0px;padding-right:0px; padding-bottom:90px;" novalidate>
    <div id="mc_embed_signup_scroll">


<div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px  ;height: 50px;">
<div class="mc-field-group">
	
	<input type="text" value=""  name="MMERGE1" class="required subscribeform"  placeholder="Full Name" id="mce-MMERGE1" style="display: block !important;">
</div></div>

 <div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px ;  height: 50px;">
<div class="mc-field-group">
	
	<input type="email" value="" name="EMAIL" class="required email subscribeform" placeholder="Your Email" id="mce-EMAIL" style="display: block !important;">
</div></div>
<div class="col-md-2" style="padding-left:0px;padding-right:0px; margin-bottom:10px ;  "><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button butt"></div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fa0dcc2c86c2d064fe09c4435_b437dd2693" tabindex="-1" value=""></div>
    <div class="clear"></div>
    </div>
</form>
</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<script>
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
    $('.butt').click(function() {
        if(!$('#mce-MMERGE1').val() && !$('#mce-EMAIL').val()){
            $('#mce-MMERGE1').attr('placeholder', 'Please enter your full name')
            $('#mce-MMERGE1').addClass('your-class');
           $('#mce-EMAIL').attr('placeholder', 'Please enter a valid email')
            $('#mce-EMAIL').addClass('your-class');
        }
        else if($('#mce-MMERGE1').val() && !$('#mce-EMAIL').val() ){
            
           $('#mce-EMAIL').attr('placeholder', 'Please enter a valid email')
            $('#mce-EMAIL').addClass('your-class');
        }
         else if(!$('#mce-MMERGE1').val() && $('#mce-EMAIL').val()){
            
           $('#mce-MMERGE1').attr('placeholder', 'Please enter your full name')
             $('#mce-MMERGE1').addClass('your-class');
        } 
         else if($('#mce-MMERGE1').val() && $('#mce-EMAIL').val() && !ValidateEmail($("#mce-EMAIL").val())){
            
           $('#mce-EMAIL').attr('placeholder', 'Please enter a valid email')
            $('#mce-EMAIL').val("");
             $('#mce-EMAIL').addClass('your-class');
           
             
        } else{
            $('.butt').attr('value', 'Thank you!');
        }
         
   
})
        </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
 
    

		</div><!-- .site-content -->
		<div style="width: 100%; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<script> 
 setTimeout( function(){ 
$(document).ready(function() {    

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(0);	
		$('#mask').fadeTo("slow",0);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
	
	
		//transition effect
		$(id).fadeIn(0); 	
	$("html").css({"overflow": "hidden"});
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		$("html").css({"overflow": "initial"});
		$('#mask').hide();
		$('.window').hide();
		
		setTimeout( function(){ 
		     	$('#mask').show();
		$('.window').show();
		$("html").css({"overflow": "hidden"});
		 },180000);
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
	    $("html").css({"overflow": "initial"});
		$(this).hide();
		$('.window').hide();
		 setTimeout( function(){ 
		     	$('#mask').show();
		$('.window').show();
		$("html").css({"overflow": "hidden"});
		 },180000);
	});		
	
});
}, 30000 );
$(document).ready(function(){

    $('#popup_box_close_322').live('click', function(e) {  
        alert(1);
    });
});

</script>  


<!--<script>
$(document).ready(function(){
    $("[data-parent='#accordion']").on("click", function(){
        var trigger = $(this);
        $(".panel-collapse.collapse.in").each(function(){
            if( trigger.attr("href") != ("#"+$(this).attr("id")) ){
            $(this).removeClass("in");
            } // condition returns false on iteration on div to be opened
        });   
    });
});
$(document).ready(function(){
    var screenwidth = $(window).width();
   $(".ak_header_image").width(screenwidth); 
   var photoht = (screenwidth * 9)/16;
   $(".ak_header_image").height(photoht); 
});    
$(window).on('resize', function(){
 var screenwidth = $(window).width();
   $(".ak_header_image").width(screenwidth); 
   var photoht = (screenwidth * 9)/16;
   $(".ak_header_image").height(photoht); 
});

</script>-->
<script>
function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.padding = "0 0px 0 0";
        document.getElementById("mySidenav").style.borderRight = "#d0cfc6 0px solid";
    }

$(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $('#demo').carousel('next');
    if (direction == 'right') $('#demo').carousel('prev');

  },
  tap:function(event,target){
      closeNav();
      
  },
  
  allowPageScroll:"vertical"

});

$(".dialog").swipe({

  
  tap:function(event,target){
      $(".dialog").css("display","none");
      
  },
  
  allowPageScroll:"vertical"

});



$('.carousel').carousel({
    pause: "false"
});




</script>

<?php get_footer(); ?>
