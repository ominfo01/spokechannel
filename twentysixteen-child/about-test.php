<?php
/**
 * Template Name: About test page
 *
 */
/*get_header('new2');*/
get_header('new2');
?>
<?php
$args = array('post_type' => 'member', 'posts_per_page' => 10);
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
<div class="container-fluid content-bg-color" id="content-body" xmlns="http://www.w3.org/1999/html">
    <div id="demo" class="carousel slide row carousel-fade" data-ride="carousel" data-interval="400000" style="background: #fffef3;">
        <div class="carousel-inner">
            <?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class=" carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                        <div class="slider">
                           <?php
                            $i++;
                            if (has_post_thumbnail()) {
                                //the_post_thumbnail('full', array('style' => 'width:100%'));
                                //$imgurl = the_post_thumbnail_url('full');
                                $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                echo '<div class="ak_header_image" style="background-image:url('.$imgurl.');"></div>';

                            }else{
                                 echo '<div class="ak_header_image" style="background-image:url(http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/10/image-not-available.jpg);"></div>';
                                
                            }
                            ?>
                        </div>
                        <!--<div class="row">
                            <div class="col separator-div"></div>
                        </div>-->
                        <div class="padding-lr-65 " style="" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
                        <div class="carousel-indicator-area bg-color-fffef3 padding-lr-65" style="margin-top:0px" >
        <div class="col-md-9 p-0 justify-content-center align-self-center padding-0 all_interview">
            
        </div>
        <div style="z-index:-99;margin-bottom: 24px;" class="col  d-flex h-100">
           
        </div>
        <div class="col-md-4"></div>
         <div class="col-md-4 col-xs-12" style="text-align:right">
             <div class="col d-flex h-100" style="margin-top: 2px; margin-bottom: 0;">
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
             
           
             
             
             
             
             
                                
        </div>
    </div>
                       
                         <div class= " col-md-12 padding-lr-65 bg-color-fffef3" >
                            <div class="col">
                                <div class="separator-div" ></div>
                            </div>
                        </div>
     <div class="col-md-12 padding-lr-65 bg-color-fffef3" style="z-index: 10;">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style="height: 64px;">
                                <?php the_title(); ?>
                            </div>
                            <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid" style="padding: 8px 0 11px;height: 64px;"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "FIGURE";}?> </div>
                            <div class="col-md-4 col-xs-12 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style="height: 64px;padding: 2px 0px;">
                                s<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;<?php echo get_post_meta($post->ID, 'season_episode', true); ?><?php echo get_post_meta($post->ID, 'right-top-text', true); ?></div>
                        </div>
                        
                        
                        <div class=" col-md-12 padding-lr-65 bg-color-fffef3 hidemobile" style=" padding-bottom: 24px;">
                            
                        </div>
                        <div class="bg-color-eceadf padding-lr-65 hidemobile col-md-12" style="height: 684px;">
                            <div class="col-md-3 col-xs-12 body-content " style="float: right;">
                                
                                
                                  
                                
                                
                                
                                  <div class="sticky-top">
                                <div class="float-right sharing-div" >
                                   <div class="heateor_sss_sharing_container heateor_sss_horizontal_sharing" ss-offset="0" heateor-sss-data-href="https://www.spoke-magazine.com/thespokechannel/interview/vikram-and-prateek/"><ul class="heateor_sss_sharing_ul"><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground" onclick="heateorSssPopup(&quot;https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssFacebookSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground" onclick="heateorSssPopup(&quot;http://twitter.com/intent/tweet?text=Vikram%20and%20Prateek&amp;url=https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel&quot;)"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssTwitterSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Pinterest" title="Pinterest" class="heateorSssSharing heateorSssPinterestBackground" onclick="javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><ss style="display:block;border-radius:999px;" class="heateorSssSharingSvg heateorSssPinterestSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width:32px;height:32px;border-radius:999px;" alt="Email" title="Email" class="heateorSssSharing heateorSssEmailBackground" onclick="window.location.href = 'mailto:?subject=' + decodeURIComponent('Vikram%20and%20Prateek' ).replace('&amp;', '%26') + '&amp;body=' + decodeURIComponent('https%3A%2F%2Fwww.spoke-magazine.com%2Fthespokechannel' )"><ss style="display:block" class="heateorSssSharingSvg heateorSssEmailSvg"></ss></i></li><li class="heateorSssSharingRound"><i style="width: 32px; height: 32px; border-radius: 999px; margin-left: 9px !important; visibility: visible;" title="Total Shares" class="heateorSssSharing heateorSssTCBackground"><div class="heateorSssTotalShareCount" style="font-size: 19.84px">0</div><div class="heateorSssTotalShareText" style="font-size: 12.16px">Shares</div></i></li></ul><div class="heateorSssClear"></div></div>
                                    
                                </div>
                                <div style="clear: both"><!-- --></div>
                                <div class="col-md-4 col-xs-12" style="text-align:right">
             <div class="col d-flex h-100" style="margin-top: 2px; margin-bottom: 0;">
                                <ul class="carousel-indicators justify-content-center align-self-center text-center" style="position: inherit !important;">
                                    
                                    
                                    <div class="float-right button-wrap about-wrap" style="padding: 80px 0;">
                                       

   


                                         <?php
                                         global $args;

                                    for ($ii = 0; $ii < $loop->post_count; $ii++) { ?>
                                        <a href="#demo" data-slide-to="<?php echo $ii ?>"
                                            class="<?php echo ($i - 1 == $ii) ? 'active' : ''; ?>"><span class="aboutAboutA "> <?php the_title($ii); ?></span></a>
                                    <?php } ?>
                                        
                                     
                                                            
                                 
 
                                           <span class="aboutpokescriptA"><a id="spkBtn_96" class="text-black">SpokeScript</a></span>                                   <!--  <span  style="display:none"><a class="text-black" href="#spokeScript1">SpokeScript</a> </span> -->
                                </div>
                                </ul>
                            </div>
             </div>
                            </div>
                            </div>
                            <div class="col-md-9 col-xs-12 padding- body-content" style="float: right;max-height: 615px;">
                                <h2 class="interview-heading-h2">Interview</h2>
                                <div class="interviewContentDiv">
                                   <?php   $content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 220, NULL );
echo '<p>' .$trimmed_content. '</p>';
                     ?>
                                    
                                    
                                </div>
                                <div class="aboutContentDiv">
                                     <?php   $content1 = get_post_meta($post->ID, 'about_text', true);
$trimmed_content1 = wp_trim_words( $content1, 220, NULL );
echo '<p>' .$trimmed_conten1t. '</p>';
                     ?>
                                   
                                </div>
                               
                            </div>
                            
                        </div>
                         
                        <div class="accordion hidelg" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Interview</h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
        <button class="btn btn-link" type="Three" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">About</h2>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
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
        <button class="btn btn-link" type="Two" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Sponsor</h2>
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
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




       
 <?php if(!empty(get_post_meta($post->ID, 'spokescript', true))) { ?>
                         <div class="row padding-lr-80 bg-color-fff spksrt hidemobile" id="spokeScriptsection_<?php echo $post->ID; ?>" style="background: #f7f5e9;">
                            <div class="col-md-9 spokescript-content" >
                                <h2 class="interview-heading-h2">SpokeScript</h2>
                                <div class="interviewContentDiv">
                                <p><?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                         </div>
                            </div>
                        </div>
                        
                       
                        

<?php } else { echo '';} ?> 
                
                
          
   






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
    width: 330px;
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
    width: 330px;
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

   
   
<?php get_footer(); ?>
