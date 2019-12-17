<?php
/**
 * Template Name: Subscribe
 *
 */
 
get_header('new2'); ?>

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
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
 
  
  -webkit-box-shadow: 0 0 0px 1000px #edebdf inset;

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
.subscribeform{
    
}

.subscribeform input[type="text"], .subscribeform input[type="email"]{
    background-color:#edebdf !important;
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
.has_error{ background: red;}
@media only screen and (max-width: 770px) {
.subscribeform input[type="text"] {
    border-right-color: black;
}
    
}
</style>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="  crossorigin="anonymous"></script>
<div class="subscribeformsection" >
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    
    <div class="padding-lr-65 padd-bottom100" > 
    <div class="heightline">
        <h1 class="subscribeheading w3-animate-opacity1"><span>NEWSLETTER</span> SUBSCRIPTION</h1>
    </div>
    <h3 class="subscribetext">Loving our content? Subscribe to our newsletter! We will notify you every time we post a new interview, featuring the great and inspiring minds interviewed here at SPOKE!</h3>
    
   <!--<form method="POST" id="form" class="subscribeform" style="padding-left:0px;padding-right:0px; padding-bottom:55px;" >
        
            <div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px  ;height: 50px;">
                <input type="text" name="firstname" id="firstname" placeholder="Full Name" required></input>
            </div>
            <div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px ;  height: 50px;">
                <input type="email" name="email" id="email" placeholder="Your Email" required></input>
             </div>    
            <div class="col-md-2" style="padding-left:0px;padding-right:0px; margin-bottom:10px ;  ">
                <input type="submit formnovalidate" class="butt" id="mc-embedded-subscribe" name="subscribe" value="Subscribe" style="height: 54px;margin: 0px;"></input>
                
                
             </div>
        
    </form>-->
    
    
    
    
    
    <style>


.mce_inline_error {
    display: none !important;
} 
    </style>
  
    <div id="">
<form action="https://spoke-magazine.us19.list-manage.com/subscribe/post?u=fa0dcc2c86c2d064fe09c4435&amp;id=b437dd2693" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribeform" target="_blank" style="padding-left:0px;padding-right:0px; padding-bottom:0px;" novalidate>
    <div id="mc_embed_signup_scroll">


<div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px  ;height: 45px;">
<div class="mc-field-group">
	
	<input type="text" value=""  name="MMERGE1" class="required subscribeform"  placeholder="Full Name" id="mce-MMERGE1" style="display: block !important;">
</div></div>

 <div class="col-md-3" style="padding-left:0px;padding-right:0px;  margin-bottom:10px ;  height: 45px;">
<div class="mc-field-group">
	
	<input type="email" value="" name="EMAIL" class="required email subscribeform" placeholder="Your Email" id="mce-EMAIL" style="display: block !important;">
</div></div>
<div class="col-md-2" style="padding-left:0px;padding-right:0px; margin-bottom:0px ;  "><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button butt"></div>
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
    };t
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
            $('.butt').attr('value', 'Subscribe');
        }
         else if(!$('#mce-MMERGE1').val() && $('#mce-EMAIL').val()){
            
           $('#mce-MMERGE1').attr('placeholder', 'Please enter your full name')
             $('#mce-MMERGE1').addClass('your-class');
             $('.butt').attr('value', 'Subscribe');
        } 
         else if($('#mce-MMERGE1').val() && $('#mce-EMAIL').val() && !ValidateEmail($("#mce-EMAIL").val())){
            
           $('#mce-EMAIL').attr('placeholder', 'Please enter a valid email')
            $('#mce-EMAIL').val("");
             $('#mce-EMAIL').addClass('your-class');
             $('.butt').attr('value', 'Subscribe');
           
             
        } else{
            $('.butt').attr('value', 'Thank you!');
        }
         
   
})
        </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
 
    
    

    <script>
    /*errorPlacement: function(error, element) {
        
  
    var n = element.attr("name");
 
    if (n == "first_name")
        element.attr("placeholder", "Please enter your first name");
    else if (n == "last_name")
        element.attr("placeholder", "Please enter your last name");	
    else if (n == "email_address")
        element.attr("placeholder", "Please enter your email address");
}
JavaScript
$("#your_form_id").validate({
			
    errorPlacement: function(error, element) {
        
     
		var n = element.attr("name");
    
		if (n == "first_name")
			element.attr("placeholder", "Please enter your first name");
		else if (n == "last_name")
			element.attr("placeholder", "Please enter your last name");	
		else if (n == "email_address")
			element.attr("placeholder", "Please enter your email address");
            
    },
    rules: {
        first_name: {
            minlength: 2,
            required: true
        },
        last_name: {
            minlength: 2,
            required: true
        },
        email_address: {
            minlength: 6,
            required: true,
            email: true
        }
    },
    highlight: function(element) {
		
        
        $(element).addClass('has_error');
    },
    unhighlight: function(element) {
		
       
        $(element).removeClass('has_error');
    },
    submitHandler: function(form) {
        
       
    }
});

$("#your_form_id").validate({
			
    errorPlacement: function(error, element) {
        
        
		var n = element.attr("name");
    
		if (n == "first_name")
			element.attr("placeholder", "Please enter your first name");
		else if (n == "last_name")
			element.attr("placeholder", "Please enter your last name");	
		else if (n == "email_address")
			element.attr("placeholder", "Please enter your email address");
            
    },
    rules: {
        first_name: {
            minlength: 2,
            required: true
        },
        last_name: {
            minlength: 2,
            required: true
        },
        email_address: {
            minlength: 6,
            required: true,
            email: true
        }
    },
    highlight: function(element) {
		
        
        $(element).addClass('has_error');
    },
    unhighlight: function(element) {
		
 
        $(element).removeClass('has_error');
    },
    submitHandler: function(form) {
        
       
    }
});
*/
    </script>
    
</div>
<!--<div id="icegram_message_322" style="background-color:#fffef3;">

<div class="ig_clear_fix" data="322">
<div class="ig_form_container layout_left"></div>
<div class="ig_content es_form_container">
<div class="ig_message ig_clear_fix">
<div class="ig_heading"><span class="heading_bold">NEWSLETTER</span>&nbsp;&nbsp;<span class="heading_Light">SUBSCRIPTION</span></div>
<div class="ig_sub_heading">Loving our content? Subscribe to our newsletter! We will notify you every time we post a new interview, featuring the great and inspiring minds interviewed here at SPOKE!</div>
<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
</div>
</div>
</div>
</div>-->
 <div class=" moreinterviewtab bg-color-eceadf">
       
<div class="padding-lr-52" >
   <div class="col-md-12 more_interviews heightline">
        <h5 class="w3-animate-opacity1 padd-left12">More&nbsp;&nbsp;<span>Interviews</span></h5>
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
      <div class="bg-color-f6f5e9">
        <div class="all_interviewhome padd-left12">
            <h5 class="w3-animate-opacity1"><a href="#">ALL&nbsp;&nbsp;<span>INTERVIEWS</span></a>
            </h5>
        </div>
    </div>
    </div>
   
    </div>
    
    <script>
    
    $(document).ready(function () {

    $('.wpcf7-form').validate({ // initialize the plugin
        rules: {
            your-name: {
                required: true,
                minlength: 5
            },
            your-email: {
                required: true,
                minlength: 5
            }
        },
        errorPlacement: function (error, element) {
            element.attr("placeholder", error.text());
        },
        submitHandler: function (form) { // for demo
            alert('valid form submitted'); // for demo
            return false; // for demo
        }
    });

});
    </script>
   
    
    <script>
function myFunction() {
  document.getElementById("myText").placeholder = "Type name here..";
}


</script>






<?php get_footer(); ?>

