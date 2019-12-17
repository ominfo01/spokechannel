<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
  
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
 
    padding-bottom: 30px;
  
}
#boxes{position: relative;}
}
  </style>
  
  
  
  
  
  

<div class="col-md-12 col-xs-12 footerupper" style=" background: #fffef3;">
         <div class="col-md-3"></div>
         <div class="col-md-6" style="height: 33px;">
            <div class="ml-auto justify-content-center align-self-center text-center next-pre-div">
                                    <table class="pagination-table home_footer_link" style="margin-left: auto;margin-right: auto;padding-bottom: 10px;padding-top: 0;border-bottom: #8a8a8a3d solid 1px;line-height: 12px;">
                
                    <tbody><tr>
                        
                       <td class="nopaddfotter" style="vertical-align: middle;    width: 23px;;">  <a href="http://theaiteecompany.com/thespoke/wordpress/interviews/"><span>All</span> Interviews</a></td>
                                            <td style="vertical-align: middle;width: 1px;padding: 0 0;font-size: 20px;"><div class="pre-next-separator" style=" margin-right: 0px !important; margin-left: 0px !important;">|</div></td>
                                            <td class="nopaddfotter" style="vertical-align: middle;width: 20px;">   <a href="http://theaiteecompany.com/thespoke/wordpress/"><span>Back</span> Home</a></td>
                                           <td style="vertical-align: middle;width: 1px;vertical-align: middle;width: 1px;padding: 0 0;font-size: 20px;"><div class="pre-next-separator" style=" margin-right: 0px !important; margin-left: 0px !important;">|</div></td>
                                     <td class="nopaddfotter" style="vertical-align: middle;    width: 23px;"> <a id="backToTop" style="">Back To <span>Top</span></a></td>
                    </tr>
                </tbody></table>

            </div>
         </div>
          <div class="col-md-3"></div>
    </div>













	<div class="">
        <div class="footer">
           <div class="row site_wrapper">
              <div class="col-md-12 desktopfooter">
               <div class="col-md-2 col-sm-4 col-xs-6  footeremail" style=" height: 90px;
    display: flex;
    justify-content: center;
    flex-direction: column;">
                   <div>© 2018 - 2019 Spoke Magazine</div><div>speak@spoke-magazine.com</div>
                            </div>
                            <?php $count_posts = wp_count_posts( 'interview' )->publish;?>
                <div class="col-md-2 col-sm-4 col-xs-6 footercounters" style=" height: 90px;
    display: flex;
    justify-content: center;
    flex-direction: column;"><div >Interviews <span><?php echo $count_posts;?></span></div>
    
<div style="<?php if(do_shortcode('[wpstatistics stat=visits time=today]') >= 2000){echo "display:block;";}else{echo "display:none;";}?>">Daily Readers <span><?php echo do_shortcode('[wpstatistics stat=visits time=today]'); ?></span></div>

</div>




<div class="col-md-2 col-sm-4  col-xs-6 footercounters1" style="padding-left: 0px;">
                <li style="
    background: 0;
">
                    <div class="mid_wrapper footer_social_links">
                                <a href="https://www.facebook.com/spokemags/" target="_blank" class="social_icon hvr-rectangle-out"><img style="max-width: 14px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/fb-icon-footer-header.png"></a>
<a href="https://twitter.com/SpokeMags" target="_blank" class="social_icon hvr-rectangle-out"><img style="max-width: 14px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/twitter-icon-footer-header.png"></a>
<a href="https://www.instagram.com/SpokeMags/" target="_blank" class="social_icon hvr-rectangle-out"><img style="max-width: 14px;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/instagram-icon-footer-header.png"></a>
                
                            </div>
                        </li>
            </div>
 <div class="col-md-1 "></div>           
<div class="col-md-5 col-sm-12 col-xs-6 " style="padding-right: 0;">

<div class="logo-footer">
                    <a class="justify-content-center align-self-center logo-div" href="#">
                         <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );?>
                        <img src="<?php echo esc_url( $custom_logo_url )?>" class="logoheader" style="padding-top: 20px; padding-bottom: 20px;">
                    </a>
                    <div class="float-right theendimg" style="margin-right:5px;">
                        <img style="height: 100%;padding-right: 0;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/footerimg.png">
                    </div>
                </div>
            </div>
                    
                   <!--  <div class="float-right d-flex h-100 slogan-wrapper" style="margin-right: 25px;">
                        <a class="justify-content-center align-self-center text-center" href="https://www.spoke-magazine.com/thespokechannel" style="text-decoration: none;">
                            <span class="justify-content-center align-self-center menu-slogan">the interview magazine</span>
                        </a>
                    </div>
                    <div class="float-right d-flex h-100 footer-logo-wrapper">
                        <div class="justify-content-center align-self-center text-center">
                            <a href="https://www.spoke-magazine.com/thespokechannel"> <img style="max-width: 134px;" src="http://www.spoke-magazine.com/thespokechannel/wp-content/themes/spoke/images/site_logo.png"/></a>
                        </div>
                    </div> -->
                     <div class="float-right pt-3 pb-0 mr-3 hide-side-menu">
                
                </div>

               </div>
               
               
               <div class="col-md-12 mobilefooter">
               <div class="col-md-2 col-sm-4 col-xs-6  footeremail" style=" height: 60px;padding: 10px 5px;
    display: flex;
    justify-content: center;
    flex-direction: column;">
                   <div>© 2018 - 2019 Spoke Magazine</div><div>speak@spoke-magazine.com</div>
                            </div>
                 <div class="col-md-5 col-sm-12 col-xs-6 " style="padding-right: 0;height: 60px;
    padding: 10px 5px;">

<div class="logo-footer">
                    <a class="justify-content-center align-self-center logo-div" href="#">
                         <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );?>
                        <img src="<?php echo esc_url( $custom_logo_url )?>"  style="padding-top: 20px; padding-bottom: 20px;">
                    </a>
                    <div class="float-right theendimg" style="margin-right:5px;">
                        <img style="height: 100%;padding-right: 0;" src="http://theaiteecompany.com/thespoke/wordpress/wp-content/uploads/2019/09/footerimg.png">
                    </div>
                </div>
            </div>           
                            
                            <?php $count_posts = wp_count_posts( 'interview' )->publish;?>
                <div class="col-md-2 col-sm-4 col-xs-6 footercounters" style="height: 60px;
    padding: 10px 5px;"><div >Interviews <span><?php echo $count_posts;?></span></div>
    
<div style="<?php if(do_shortcode('[wpstatistics stat=visits time=today]') >= 2000){echo "display:block;";}else{echo "display:none;";}?>">Daily Readers <span><?php echo do_shortcode('[wpstatistics stat=visits time=today]'); ?></span></div>


</div>

<div class="col-md-2 col-sm-4  col-xs-6 footercounters1" style="padding-left: 0px;    height: 60px;
    padding: 10px 5px;">
                <li style="
    background: 0;
">
                    <div class="mid_wrapper footer_social_links">
                        
                                            <?php 
$argss1 = array('post_type' => 'social', 'posts_per_page' => -1,'orderby' => 'date',            'order'   => 'ASC', );
$loopp1 = new WP_Query($argss1);
if ($loopp1->have_posts()) : ?>  

 <?php while ($loopp1->have_posts()) : $loopp1->the_post();
$imgurl11 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url1 =  get_post_meta($post->ID, 'social_link', true);
if(!empty($website_url1)) { $url1 = "href=".$website_url1; }
else { $url = '';}

echo '<a href="'.$website_url1.'" target="_blank"><img style="max-width: 14px;" src="'.$imgurl11.'"></a>';
endwhile; ?>


                   
     <?php endif; ?>    
                        
                        
                        
                        
                               
                
                            </div>
                        </li>
            </div>
 <div class="col-md-1 "></div>           

                    
                   
                     <div class="float-right pt-3 pb-0 mr-3 hide-side-menu">
                
                </div>

               </div>
           
        </div>
    </div>
	</div><!-- .site-inner -->
</div><!-- .site -->



<script>
function save_interview(interview_id, url) { 
    
    var obj = $('#save-link-' + interview_id);
    if (obj.text() == 'Save') {
        obj.text('Saved');
    }else {
        obj.text('Save');
    }
 
   
    $.ajax({url:url,
        data:'action=save_interview_action&interview_id=' + interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
          console.log(result);
            var obj = $('#save-link-' + interview_id);
            if (result == 'saved') {
                obj.text('Saved');
            }else {
                obj.text('Save');
            }
        }});
}


function Unsave_interview(interview_id, url) {
//alert(interview_id);

$('#item-'+interview_id).fadeOut(1000);
      $.ajax({url:url,
        data:'action=unsave_interview_action&interview_id='+interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
          console.log(result);
            var obj = $('#item-' + interview_id);
            if (result == 'removed') {
                obj.fadeOut(100);
            } 
            // else {
            //    obj.fadeIn(100);
            // }
        }});
}

function deleteSaved(interview_id, url) {

    $.ajax({url:url,
        data:'action=save_interview_action&interview_id=' + interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
            location.reload();
        }});
}


/*$( document ).on( "pageinit", "#demo-page", function() {
    $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
        // We check if there is no open panel on the page because otherwise
        // a swipe to close the left panel would also open the right panel (and v.v.).
        // We do this by checking the data that the framework stores on the page element (panel: open).
        if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
            if ( e.type === "swipeleft"  ) {
                $( "#right-panel" ).panel( "open" );
            } else if ( e.type === "swiperight" ) {
                $( "#left-panel" ).panel( "open" );
            }
        }
    });
});*/
</script>


<script>
window.MultiPostThumbnails = {
    
    setThumbnailHTML: function(html, id, post_type){
	    jQuery('.inside', '#' + post_type + '-' + id).html(html);
    },

    setThumbnailID: function(thumb_id, id, post_type){
	    var field = jQuery('input[value=_' + post_type + '_' + id + '_thumbnail_id]', '#list-table');
	    if ( field.size() > 0 ) {
		    jQuery('#meta\\[' + field.attr('id').match(/[0-9]+/) + '\\]\\[value\\]').text(thumb_id);
	    }
    },

    removeThumbnail: function(id, post_type, nonce){
	    jQuery.post(ajaxurl, {
		    action:'set-' + post_type + '-' + id + '-thumbnail', post_id: jQuery('#post_ID').val(), thumbnail_id: -1, _ajax_nonce: nonce, cookie: encodeURIComponent(document.cookie)
	    }, function(str){
		    if ( str == '0' ) {
			    alert( setPostThumbnailL10n.error );
		    } else {
			    MultiPostThumbnails.setThumbnailHTML(str, id, post_type);
		    }
	    }
	    );
    },


    setAsThumbnail: function(thumb_id, id, post_type, nonce){
	    var $link = jQuery('a#' + post_type + '-' + id + '-thumbnail-' + thumb_id);
		$link.data('thumbnail_id', thumb_id);
	    $link.text( setPostThumbnailL10n.saving );
	    jQuery.post(ajaxurl, {
		    action:'set-' + post_type + '-' + id + '-thumbnail', post_id: post_id, thumbnail_id: thumb_id, _ajax_nonce: nonce, cookie: encodeURIComponent(document.cookie)
	    }, function(str){
		    var win = window.dialogArguments || opener || parent || top;
		    $link.text( setPostThumbnailL10n.setThumbnail );
		    if ( str == '0' ) {
			    alert( setPostThumbnailL10n.error );
		    } else {
			    $link.show();
			    $link.text( setPostThumbnailL10n.done );
			    $link.fadeOut( 2000, function() {
				    jQuery('tr.' + post_type + '-' + id + '-thumbnail').hide();
			    });
			    win.MultiPostThumbnails.setThumbnailID(thumb_id, id, post_type);
			    win.MultiPostThumbnails.setThumbnailHTML(str, id, post_type);
		    }
	    }
	    );
    }
}
</script>
<script>
/*global window,jQuery,wp */
var MediaModal = function (options) {
  'use strict';
  this.settings = {
    calling_selector: false,
    cb: function (attachment) {}
  };
  var that = this,
  frame = wp.media.frames.file_frame;

  this.attachEvents = function attachEvents() {
    jQuery(this.settings.calling_selector).on('click', this.openFrame);
  };

  this.openFrame = function openFrame(e) {
    e.preventDefault();

    // Create the media frame.
    frame = wp.media.frames.file_frame = wp.media({
      title: jQuery(this).data('uploader_title'),
      button: {
        text: jQuery(this).data('uploader_button_text')
      },
      library : {
        type : 'image'
      }
    });
		
    // Set filterable state to uploaded to get select to show (setting this
    // when creating the frame doesn't work)
    frame.on('toolbar:create:select', function(){
      frame.state().set('filterable', 'uploaded');
    });

    // When an image is selected, run the callback.
    frame.on('select', function () {
      // We set multiple to false so only get one image from the uploader
      var attachment = frame.state().get('selection').first().toJSON();
      that.settings.cb(attachment);
    });

    frame.on('open activate', function() {
      // Get the link/button/etc that called us
      var $caller = jQuery(that.settings.calling_selector);

      // Select the thumbnail if we have one
      if ($caller.data('thumbnail_id')) {
        var Attachment = wp.media.model.Attachment;
        var selection = frame.state().get('selection');
        selection.add(Attachment.get($caller.data('thumbnail_id')));
      }
    });
        
    frame.open();
  };

  this.init = function init() {
    this.settings = jQuery.extend(this.settings, options);
    this.attachEvents();
  };
  this.init();

  return this;
};
</script>
<script>
$(document).ready(function () {

var savIn = [];

jQuery(document).bind('keyup', function(e) {
  if (e.keyCode==39) {
      jQuery('a.carousel-control.right').trigger('click');
  }   
  else if(e.keyCode==37){
      jQuery('a.carousel-control.left').trigger('click');
  }
});


 $(".saved_item").on ("click", function (e) { //alert('hello');
  e.preventDefault();
  var s = $(this).data('link');
  //alert(s);
   window.location = s; 
   return true;  
 });


 $("#showPhotos").on ("click", function (e) { 
  e.preventDefault();
   $('#photo_slide').show();
   $('.imageBullet').show();
   $('.videoBullet').hide();
   $('#video_slide').hide();
  
    $(this).css("font-family", "Gill Sans Light");
    $(this).css("color", "#000");
    $(this).addClass("activate");
    $('#showVideos').css("font-family", "Gill Sans Light ");
    $('#showVideos').css("color", "#000");
     $("#showVideos").removeClass("activate");
 });

 $("#showVideos").on ("click", function (e) { 
  e.preventDefault();
   $('#photo_slide').hide();
   $('.imageBullet').hide();
   $('.videoBullet').show();
   $('#video_slide').show();
     $(this).css("font-family", "Gill Sans Light");
    $(this).css("color", "#000");
    $(this).addClass("activate");
    $('#showPhotos').css("font-family", "Gill Sans Light");
    $('#showPhotos').css("color", "#000");
     $("#showPhotos").removeClass("activate");

});

  $('.dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
  });

  $('.dropdown').on('hide.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
  });
  

  
  
  
  

$(".homeInterviewA").on ("click", function () {
      $(".aboutContentDiv").hide();
      $(".linkContentDiv").hide();
      $(".interviewContentDiv").show();
      $(".sponsorContentDiv").hide();
      $(".homeInterviewA").addClass( "active");
      $(".homeAboutA").removeClass( "active");
      $(".sposorA").removeClass( "active");
      $(".spokescriptA").removeClass( "active");
      $('.interview-heading-h2').html('Interview');
     
      $('html, body').animate({scrollTop: $(".interviewContentDiv").offset().top-300}, 100);
});




$(".homepageinterviewaccbutt").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample").offset().top-10}, 100);

});

$(".homepageaboutaccbutt").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample").offset().top+18}, 100);

});

$(".homepagesponsoraccbutt").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample").offset().top+60}, 100);

});

$("#homepageinterviewaccbutt1").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample1").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt2").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample2").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt3").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample3").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt4").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample4").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt5").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample5").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt6").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample6").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt7").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample7").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt8").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample8").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt9").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample9").offset().top-10}, 100);

});
$("#homepageinterviewaccbutt10").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample10").offset().top-10}, 100);

});

$("#homepageaboutaccbutt1").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample1").offset().top+18}, 100);

});
$("#homepageaboutaccbutt2").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample2").offset().top+18}, 100);

});
$("#homepageaboutaccbutt3").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample3").offset().top+18}, 100);

});
$("#homepageaboutaccbutt4").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample4").offset().top+18}, 100);

});
$("#homepageaboutaccbutt5").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample5").offset().top+18}, 100);

});
$("#homepageaboutaccbutt6").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample6").offset().top+18}, 100);

});
$("#homepageaboutaccbutt7").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample7").offset().top+18}, 100);

});
$("#homepageaboutaccbutt8").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample8").offset().top+18}, 100);

});
$("#homepageaboutaccbutt9").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample9").offset().top+18}, 100);

});
$("#homepageaboutaccbutt10").on ("click", function () {
    
    
    $('html, body').animate({scrollTop: $("#accordionExample10").offset().top+18}, 100);

});



$(".homeInterviewA1").on ("click", function () {
      
      $(".aboutContentDiv1").hide();
      $(".linkContentDiv1").hide();
      $(".interviewContentDiv1").show();
      $(".sponsorContentDiv1").hide();
      $(".homeInterviewA1").addClass( "active");
      $(".homeAboutA1").removeClass( "active");
      $(".sposorA1").removeClass( "active");
      $(".spokescriptA1").removeClass( "active");
      $('.interview-heading-h21').html('Interview');
     
     
});


$(".homespokescriptA").on ("click", function () {
      $(".homeInterviewA").removeClass( "active");
      $(".homeAboutA").removeClass( "active");
      $(".sposorA").removeClass( "active");
       $(".spokescriptA").removeClass( "active");
      $(".homespokescriptA").addClass( "active");
      /*$('html, body').animate({scrollTop: $("#spokeScriptsection").offset().top-92}, 1000);*/
});
/*
$(".spokescriptA").on ("click", function () {

      $(".homeInterviewA").removeClass( "active");
      $(".homeAboutA").removeClass( "active");
      $(".sposorA").removeClass( "active");
       $(".spokescriptA").addClass( "active");
      
      $('.interview-heading-h2').html('Interview');
     
      
});
*/

$(".homeAboutA").on ("click", function () {
      $(".interviewContentDiv").hide();
      $(".linkContentDiv").hide();
      $(".aboutContentDiv").show();
      $(".sponsorContentDiv").hide();
      $(".homeInterviewA").removeClass( "active");
      $(".spokescriptA").removeClass( "active");
      $(".sposorA").removeClass( "active");
      $(".homeAboutA").addClass( "active");
      $('.interview-heading-h2').html('About');
    
      $('html, body').animate({scrollTop: $(".aboutContentDiv").offset().top-300}, 100);
});


$(".homeAboutA1").on ("click", function () {
       $(".interviewContentDiv1").hide();
      $(".linkContentDiv1").hide();
      $(".aboutContentDiv1").show();
      $(".sponsorContentDiv1").hide();
      $(".homeInterviewA1").removeClass( "active");
      $(".spokescriptA1").removeClass( "active");
      $(".sposorA1").removeClass( "active");
      $(".homeAboutA1").addClass( "active");
      $('.interview-heading-h21').html('About');
    
    
      
});


$(".sposorA").on ("click", function () {
     $(".interviewContentDiv").hide();
     $(".aboutContentDiv").hide();
     $(".linkContentDiv").hide();
     $(".sponsorContentDiv").show();
     $(".homeInterviewA").removeClass( "active");
      $(".spokescriptA").removeClass( "active");
     $(".sposorA").addClass( "active");
     $(".homeAboutA").removeClass( "active");
     $('.interview-heading-h2').html('Sponsor');
    
     $('html, body').animate({scrollTop: $(".sponsorContentDiv").offset().top-300}, 100);
});

$(".pressArticleA").on ("click", function (){
  $('.interviewContentDiv').fadeIn('slow');
  $('.linkContent').fadeOut('fast');
  $('.legalContent').fadeOut('fast');
  $('.pressArticleA').addClass('active');
  $('.pressLinkA').removeClass('active');
  $('.pressLegalA').removeClass('active');
  
});

$(".pressLinkA").on ("click", function (){
  $('.interviewContentDiv').fadeOut('fast');
  $('.linkContent').fadeIn('slow');
  $('.legalContent').fadeOut('fast');
  $('.pressArticleA').removeClass('active');
  $('.pressLinkA').addClass('active');
  $('.pressLegalA').removeClass('active');
  
});

$(".pressLegalA").on ("click", function (){
  $('.interviewContentDiv').fadeOut('fast');
  $('.linkContent').fadeOut('fast');
  $('.legalContent').fadeIn('slow');
  $('.pressArticleA').removeClass('active');
  $('.pressLinkA').addClass('active');
  $('.pressLegalA').removeClass('active');
   $('.pressArticleA').removeClass('active');
  $('.pressLinkA').removeClass('active');
  $('.pressLegalA').addClass('active');
});


   /* $(".pressLinkA").on ("click", function () {
        $(".interviewContentDiv").hide();
        $(".aboutContentDiv").hide();
        $(".legalContentDiv").hide();
        $(".sponsorContentDiv").hide();
        $(".linkContentDiv").show(100);
        $(".pressArticleA").removeClass( "active");
        $(".pressLegalA").removeClass( "active");
        $(".pressLinkA").addClass( "active");
        $('.endoftext').html('Link');
        $('html, body').animate({scrollTop: $(".linkContentDiv").offset().top-200}, 1000);
    });

    $(".pressLegalA").on ("click", function () {
        $(".interviewContentDiv").hide();
        $(".aboutContentDiv").hide();
        $(".legalContentDiv").show(100);
        $(".sponsorContentDiv").hide();
        $(".linkContentDiv").hide();
        $(".pressArticleA").removeClass( "active");
        $(".pressLinkA").removeClass( "active");
        $(".pressLegalA").addClass( "active");
        $('.endoftext').html('Legal');
        $('html, body').animate({scrollTop: $(".legalContentDiv").offset().top-200}, 1000);
    });
    $(".pressArticleA").on ("click", function () {
        $(".interviewContentDiv").show(100);
        $(".aboutContentDiv").hide();
        $(".legalContentDiv").hide();
        $(".sponsorContentDiv").hide();
        $(".linkContentDiv").hide();
        $(".pressLinkA").removeClass( "active");
        $(".pressLegalA").removeClass( "active");
        $(".pressArticleA").addClass( "active");
        $('.endoftext').html('Article');
        $('html, body').animate({scrollTop: $(".interviewContentDiv").offset().top-200}, 1000);
    });*/

  $(".aboutContentDiv").hide();
   $(".sponsorContentDiv").hide();
  $(".interviewContentDiv").show();
  $(".legalContentDiv").show();
  $(".linkContentDiv").show();


    var elems = document.body.getElementsByTagName("*");
    for (var ss in elems) {
        var el = elems[ss];
        //console.log(elems[ss]);
    }
/*

        var windowHeight = $(window).height();
        var contHeight = $("#content-body").height();
        var footHeight = $("#footer").height();
        var testHeight = windowHeight - footHeight;
        if (contHeight < testHeight) {
            $("#footer").css("bottom", "0");
            $("#footer").css("position", "fixed");
        }*/

});



function save_interview(interview_id, url) { 
    
    var obj = $('#save-link-' + interview_id);
    if (obj.text() == 'Save') {
        obj.text('Saved');
    }else {
        obj.text('Save');
    }
 
   
    $.ajax({url:url,
        data:'action=save_interview_action&interview_id=' + interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
          console.log(result);
            var obj = $('#save-link-' + interview_id);
            if (result == 'saved') {
                obj.text('Saved');
            }else {
                obj.text('Save');
            }
        }});
}


function Unsave_interview(interview_id, url) {
//alert(interview_id);

$('#item-'+interview_id).fadeOut(1000);
      $.ajax({url:url,
        data:'action=unsave_interview_action&interview_id='+interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
          console.log(result);
            var obj = $('#item-' + interview_id);
            if (result == 'removed') {
                obj.fadeOut(100);
            } 
            // else {
            //    obj.fadeIn(100);
            // }
        }});
}

function deleteSaved(interview_id, url) {

    $.ajax({url:url,
        data:'action=save_interview_action&interview_id=' + interview_id,
        type:'POST',
        dataType: 'text',
        success: function(result){
            location.reload();
        }});
}

</script>

<script>
var navbar = document.getElementById("scroll-div");
    var sticky = navbar.offsetTop - 30;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            $('#content-body').css("padding-top", "100px");
            $('#sticky_h5').css("padding", "50px 0");

        } else {
            navbar.classList.remove("sticky");
            $('#content-body').css("padding-top", "100px");
            $('#sticky_h5').css("padding", "100px 0");
        }
    }

</script>
<script>
 $(document).ready(function () {   
    $('#backToTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "600", "linear");
        return false;
    });
 });
</script>
<script>
function SmoothVerticalScrolling(e, time, where) {
    var eTop = e.getBoundingClientRect().top;
    var eAmt = eTop / 100;
    var curTime = 0;
    while (curTime <= time) {
        window.setTimeout(SVS_B, curTime, eAmt, where);
        curTime += time / 100;
    }
}

function SVS_B(eAmt, where) {
    if(where == "center" || where == "")
        window.scrollBy(0, eAmt / 2);
    if (where == "top")
        window.scrollBy(0, eAmt);
}
function SmoothHorizontalScrolling(e, time, amount, start) {
    var eAmt = amount / 100;
    var curTime = 0;
    var scrollCounter = 0;
    while (curTime <= time) {
        window.setTimeout(SHS_B, curTime, e, scrollCounter, eAmt, start);
        curTime += time / 100;
        scrollCounter++;
    }
}

function SHS_B(e, sc, eAmt, start) {
    e.scrollLeft = (eAmt * sc) + start;
}
</script>
<script>
window.MultiPostThumbnails = {
    
    setThumbnailHTML: function(html, id, post_type){
	    jQuery('.inside', '#' + post_type + '-' + id).html(html);
    },

    setThumbnailID: function(thumb_id, id, post_type){
	    var field = jQuery('input[value=_' + post_type + '_' + id + '_thumbnail_id]', '#list-table');
	    if ( field.size() > 0 ) {
		    jQuery('#meta\\[' + field.attr('id').match(/[0-9]+/) + '\\]\\[value\\]').text(thumb_id);
	    }
    },

    removeThumbnail: function(id, post_type, nonce){
	    jQuery.post(ajaxurl, {
		    action:'set-' + post_type + '-' + id + '-thumbnail', post_id: jQuery('#post_ID').val(), thumbnail_id: -1, _ajax_nonce: nonce, cookie: encodeURIComponent(document.cookie)
	    }, function(str){
		    if ( str == '0' ) {
			    alert( setPostThumbnailL10n.error );
		    } else {
			    MultiPostThumbnails.setThumbnailHTML(str, id, post_type);
		    }
	    }
	    );
    },


    setAsThumbnail: function(thumb_id, id, post_type, nonce){
	    var $link = jQuery('a#' + post_type + '-' + id + '-thumbnail-' + thumb_id);
		$link.data('thumbnail_id', thumb_id);
	    $link.text( setPostThumbnailL10n.saving );
	    jQuery.post(ajaxurl, {
		    action:'set-' + post_type + '-' + id + '-thumbnail', post_id: post_id, thumbnail_id: thumb_id, _ajax_nonce: nonce, cookie: encodeURIComponent(document.cookie)
	    }, function(str){
		    var win = window.dialogArguments || opener || parent || top;
		    $link.text( setPostThumbnailL10n.setThumbnail );
		    if ( str == '0' ) {
			    alert( setPostThumbnailL10n.error );
		    } else {
			    $link.show();
			    $link.text( setPostThumbnailL10n.done );
			    $link.fadeOut( 2000, function() {
				    jQuery('tr.' + post_type + '-' + id + '-thumbnail').hide();
			    });
			    win.MultiPostThumbnails.setThumbnailID(thumb_id, id, post_type);
			    win.MultiPostThumbnails.setThumbnailHTML(str, id, post_type);
		    }
	    }
	    );
    }
}
</script>

<script>

$(window).load(function(){
    var screenwidth = $(window).width();
       $("#photo_slide .n2-ss-slider-1").width(screenwidth); 
        
   var photoht = (screenwidth * 9)/16;
   $("#photo_slide .n2-ss-slider-1").css('min-height',photoht);
   $(".n2-ss-slider-1").height(photoht); 
    $("#photo_slide .n2-ss-slide").css('min-height',photoht);
    $("#photo_slide .n2-ss-slide").width(screenwidth); 
   /* $(".n2-ss-layers-container").css('min-height',photoht);
    $(".n2-ss-layers-container").width(screenwidth);*/
    $(" #photo_slide .ak_header_image").width(screenwidth);
    $("#photo_slide .ak_header_image").css('min-height',photoht);
     /*  $(".n2-ss-layers-container").css('margin','0px');*/
     $("#video_slide .n2-ss-slider-1").css('min-height',photoht);
    $("#video_slide .n2-ss-layers-container").css('min-height',photoht);
    $("#video_slide .n2-ss-canvas").css('min-height',photoht);
    
});   
$(window).on('resize', function(){
 var screenwidth = $(window).width();
   $("#photo_slide .n2-ss-slider-1").width(screenwidth); 
   var photoht = (screenwidth * 9)/16;
   $("#photo_slide .n2-ss-slider-1").height(photoht); 
   $(".n2-ss-slider-1").height(photoht); 
      $("#photo_slide .n2-ss-slide").height(photoht); 
    $("#photo_slide .n2-ss-slide").width(screenwidth); 
   $("#photo_slide .n2-ss-layers-container").width(screenwidth); 
      $("#photo_slide .n2-ss-layers-container").css('min-height',photoht); 
       $("#photo_slide .n2-ss-layers-container").css('margin','0px'); 
  $("#video_slide .n2-ss-slider-1").css('min-height',photoht1);
    $("#video_slide .n2-ss-layers-container").css('min-height',photoht1);
    $("#video_slide .n2-ss-canvas").css('min-height',photoht1);
      $(".ak_header_image").width(screenwidth);
    $(".ak_header_image").css('min-height',photoht);
    
});


$(window).click(function(e) {
    var screenwidth1 = $(window).width();
     var photoht1 = (screenwidth1 * 9)/16;
   $("#video_slide .n2-ss-slider-1").css('min-height',photoht1);
    $("#video_slide .n2-ss-layers-container").css('min-height',photoht1);
    $("#video_slide .n2-ss-canvas").css('min-height',photoht1);
    $(".n2-ss-slider-1").height(photoht); 
    
    
   
});



</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>

window.oncontextmenu = function ()
{
  var x = event.clientX;
  var y = event.clientY;
 var coords = document.getElementById("block-block-15");
 var total = screen.width;
 var totalbot = screen.height;
 
 var perc = ((x/total) * 100);
 var percbot = ((y/totalbot)*100);
 
 var given = ((79*total)/100);
 var givenbot = ((85*totalbot)/100);
 
 if(perc <= 79 && percbot <= 85){
  coords.style.left = x + 'px';
  coords.style.top = y + 'px';
 
 }
 else if(perc <= 79 && percbot >= 85){
   coords.style.left = x + 'px';
  coords.style.top = givenbot + 'px';
 
 }
 else if (perc >= 79 && percbot >= 85){
   coords.style.left = given + 'px';
  coords.style.top = givenbot + 'px';
 
 }else{
      coords.style.left = given + 'px';
  coords.style.top = y + 'px';
    
 }
 
 
            
    coords.style.display  = 'block';  
           
    document.getElementById("page").onclick = function() { coords.style.display  = 'none'; };   
   setTimeout(function(){ coords.style.display  = 'none'; }, 7000);
   
   
   
   
}




document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
  }, false);
</script>

<?php wp_footer(); ?>
</body>
</html>
