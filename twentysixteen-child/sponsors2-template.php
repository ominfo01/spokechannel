<?php
/**
 * Template Name: Sponsors2 Page Template
 *
 */get_header('new2'); ?>
 
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
      padding: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */

 background-color: rgba(0, 0, 0, 0); /* Black w/ opacity */15
}
 .bg-color-eceadf{
     background:#eceadf;
 }
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #f6f5e900;
}

.dark:nth-child(1) .sponsor_thumbnail {
    text-align: left;
}
.dark:nth-child(7) .sponsor_thumbnail {
    text-align: left;
}
.dark:nth-child(12) .sponsor_thumbnail {
    text-align: left;
}
.dark:nth-child(17) .sponsor_thumbnail {
    text-align: left;
}
.dark:nth-child(5) .sponsor_thumbnail {
    text-align: right;
}
.dark:nth-child(11) .sponsor_thumbnail {
    text-align: right;
}
.dark:nth-child(17) .sponsor_thumbnail {
    text-align: right;
}
.dark:nth-child(23) .sponsor_thumbnail {
    text-align: right;
}
.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    height: 40px;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 0px solid #e9ecef;
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem;
}
.show {
    display: block!important;
    visibility: visible;
    opacity: 1;
}
.modal-content-p{
    line-height: 30px;
    font-family: 'GeorgiaProW01-Light';
    font-size: 12pt;
    color: #424240;
    display: block;
    padding: 0 0 29px 0;
    letter-spacing: 1.33px;
    font-weight: lighter;
    max-width: 400px;
    margin: 0;
    text-align: left;
}
.modal-body::-webkit-scrollbar {
  width: 0px;
}
.modal-header .close {
   top: 0px;
    right: 5px;
    position: absolute;
}
.title_sponsor h5{font-family:'Gill Sans Light' !important;color:#000;font-weight:bold;font-size:16pt;text-transform:uppercase;margin:20px 0;letter-spacing:0.3px;transform:scale(1, 1.1);-webkit-transform:scale(1, 1.1);-moz-transform:scale(1, 1.1);-ms-transform:scale(1, 1.1);-o-transform:scale(1, 1.1);}
.title_sponsor h5 span{font-family:'Gill Sans';font-weight:300;letter-spacing:0.6px !important;}
.modal-body {
   
       padding: 0px 70px 0px 0px;
    overflow-y: auto;
    
}
/* Modal Content */
.modal-content {
    background-color: #f6f5e9;
    margin: auto;
    padding: 105px 0px 105px 70px;
     min-height: 740px;
max-height: 740px;
    padding-right: 5px;
    border: 1px solid #38242400;
    width: 100%;
    border-radius: 0;
    webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0); 
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0);
}
.sponsor_thumbnail {
    width: 100%;
    height: auto;
    min-height: 400px;
    align-self: center;
    align-content: center;
    vertical-align: middle;
    display: grid;
    text-align: center;
    text-decoration: none;
    color: #848484;
}

/* The Close Button */
.close {
  float: right;
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 1;
}

.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    background: #0000;
    opacity: 1;
}
.modal-title, .sponsor_thumbnail span {
    display: block;
    font-size: 14px;
    color: #848484;
    font-family: "Gill Sans MT";
    font-weight: normal;
    line-height: 20px;
    outline: none;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1.2px;
  margin-bottom: 50px;
    margin-top: 50px;
}
.title_sponsor h1 {
    font-family: 'Gill Sans Light' !important;
    color: #000;
    font-weight: 300 !important;
    font-size: 21px !important;
    line-height: 17px;
    text-transform: uppercase;
    padding-bottom: 30px;
    transition: all 0.6s ease-in-out 0s;
    -moz-transition: all 0.6s ease-in-out 0s;
    -webkit-transition: all 0.6s ease-in-out 0s;
    letter-spacing: 1px;
    transform: scale(1, 1.05) !important;
    -webkit-transform: scale(1, 1.05) !important;
    -moz-transform: scale(1, 1.05) !important;
    -ms-transform: scale(1, 1.05) !important;
    -o-transform: scale(1, 1.05) !important;
}
.sp_carousel-indicators li {
    display: inline-block;
    width: 14px !important;
    margin: 7px !important;
    height: 14px !important;
    background-color: #dfddd3;
    border: 1px solid #dfddd3;
}
.title_sponsor span {
    font-family: 'GillSans' !important;
    color: #000;
    font-weight: 700 ;
    font-size: 21px !important;
    color: #000;
    transition: all 0.6s ease-in-out 0s;
    -moz-transition: all 0.6s ease-in-out 0s;
    -webkit-transition: all 0.6s ease-in-out 0s;
    letter-spacing: 1px;
    transform: scale(1, 1.1) !important;
    -webkit-transform: scale(1, 1.1) !important;
    -moz-transform: scale(1, 1.1) !important;
    -ms-transform: scale(1, 1.1) !important;
    -o-transform: scale(1, 1.1) !important;
}
.sp_carousel-indicators li:hover, .sp_carousel-indicators li:active, .sp_carousel-indicators li:focus, .sp_carousel-indicators .active {
    background-color: #373633 !important;
    border: 1px solid #373633;
}
@media only screen and (max-width: 770px) {
.modal-content {
    background-color: #f6f5e9;
    margin: auto;
    padding: 40px 20px 40px 20px;
    min-height: 500px;
    max-height: 672px;
    padding-right: 5px;
    border: 1px solid #38242400;
    width: 90%;
    border-radius: 0;
    webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0);
}
.modal-content-p{
        max-width: 329px;

}}
</style>

 <div class="subscribeformsection bg-color-eceadf padd-bottom0">
    
    
    <div class="padding-lr-65"> 
    
        <h1 class="subscribeheading w3-animate-opacity" ><span>OUR</span> SPONSORS</h1>
    
    <div class="subscribetext" style="max-width: 100%;margin-bottom:0px;" > Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
  
    </div>
    
    
    
</div>
 <div class="container-fluid bg-color-eceadf" id="content-body">
   
 
<div class="row  bg-color-eceadf">
<div id="demo" class="carousel w-100 padding-lr-65 slide  carousel-fade" data-ride="carousel" data-interval="false">
<div class="carousel-inner">

<?php
$args = array('post_type' => 'title_sponsor');
$loop = new WP_Query($args); 
$i = 0;
if ($loop->have_posts()) : 
while ($loop->have_posts()) : $loop->the_post(); 
?> 
<div class="bg-color-eceadf carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>" style="width:100%;">
<div class="row bg-color-eceadf">   
<?php $i++; ?>
<div class="col-md-10 d-flex"><div class="title_sponsor"><h1><span>TITLE</span>&nbsp;SPONSORS</h1></div></div>
<div class="col-md-2 pt-2 my-auto text-right">
<ul class="carousel-indicators sp_carousel-indicators text-right titlesponscara" style="position: inherit !important;    display: block !important;">
<?php
for ($ii = 0; $ii < $loop->post_count; $ii++) { ?>
<li data-target="#demo" data-slide-to="<?php echo $ii ?>"
class="<?php echo ($i - 1 == $ii) ? 'active' : ''; ?>"></li>
<?php } ?>
</ul>
</div>
</div>
<div class="separator-div" style="height:3px; background-color:#000"></div>
<div class="row align-items-center" style="margin-top:70px;min-height:700px;">
<div class="col-sm-6 col-md-6 col-lg-6 p-0 m-0">
<table class="sponsorlogoheight" style="width:100%; height:720px;"><tr><td class="sp_title_logo" >
<?php
if (has_post_thumbnail()) {
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<a '.$url.' target="_blank"><img src="'.$imgurl.'" class="w3-animate-opacity" alt="" style="padding-right:65px;max-width: 580px;" /></a>';
}
?>
</td></tr></table>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 sp_title_content" >
<table style="width:100%; height:100%;margin: 0 0 0px;"><tr><td class="sp_title_content linkContentDiv" style="vertical-align: middle;">
<?php // the_content($post->ID);
$content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 70, NULL );
echo '<div style="    height: 500px;    overflow: scroll;">';
echo '<p class="w3-animate-opacity padding-lr-65" >' .$content. '</p>';
echo '</div>';
?>
</td></tr></table>
</div>
</div>
</div>
<?php 
endwhile; 
endif; 
?>
</div>             
</div>
</div>
<div style="clear:both"></div>
<?php
   $args = array(
               'taxonomy' => 'Country',
               'orderby' => 'name',
               'order'   => 'ASC'
           );
   $cats = get_categories($args);
   //echo '<pre>';
   //print_r($cats);
   foreach($cats as $cat) {
?>
<div class="row padding-lr-65 bg-color-eceadf">
<div class="col-md-12" style="padding-left:0px;padding-right:0;"><div class="title_sponsor"><h1 style=" padding-top: 00px;"><span><?php echo $cat->name; ?></span>&nbsp;SPONSORS</h1></div><div class="separate" style="height:3px; background-color:#000"></div></div>
</div>
<div class="row padding-lr-65 bg-color-eceadf" id="popupsection" style=" min-height:848px;padding-bottom: 20px;">
    <?php
       $post_args = array(
      'posts_per_page' => -1,
      'hide_empty' => 1,
      'hierarchical' => 1,
      'post_type' => 'country_sponsor', // you can change it according to your custom post type
      'tax_query' => array(
          array(
              'taxonomy' => 'Country',
              'terms' => $cat->term_id,
    )
  )
);

$myposts = get_posts($post_args);
foreach ($myposts as $post){ 
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<div class="col-md-6 col-lg-4 dark p-0 m-0"><div class="sponsor_thumbnail">';  
if (has_post_thumbnail()) {
//the_post_thumbnail('full', array('style' => 'width:100%'));
$imgurl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
echo '<a class="linkpopup" href="#" data-toggle="modal" data-target="#myModal-'.$post->ID.'"><span><img src="'.$imgurl.'" alt="" /></span></a></div> </div>';
}
else {
echo '<img src="'.bloginfo('template_directory').'/images/dummy.png"></div></div>';
}
?>
<div class="modal hide fade" id="myModal-<?php echo $post->ID;?>">
  <div class="modal-dialog modal-dialog-centered" style="margin: 300px auto 0%;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"   style="  padding: 0px;height: 60px;    FLOAT: RIGHT;">
       
        <button type="button" class="close" data-dismiss="modal" style="z-index: 20;">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
        <?php $args = array( 'post_type' => 'country_sponsor', 'posts_per_page' => 1, 'p' => $post->ID);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-md-12 col-xs-12 modal-content-p" style="padding-left:0px;position: fixed;background: #f6f5e9;padding: 0 0 0px 0;">
<p style="margin-bottom:10px;display: inline-block;float: left;margin-right: 5px;">Link: </p><a style="color:#dca167 !important;box-shadow: none;float: left;display: inline-block;" href="https://<?php echo get_post_meta($post->ID, 'website_url', true);?>" target="_blank"><?php echo get_post_meta($post->ID, 'website_url', true);
	?></a></div>
<?
	echo '<div class="entry-content modal-content-p" style=" margin-right: 0; margin-left: 0;margin-top: 45px;">';
	$content1 = the_content();?>
	
	
	<?php
	echo '</div>';
endwhile;
        ?>
      </div>

<!-- <div class="modal-footer"> <img src="<?php echo bloginfo('template_directory')?>/images/spoke_logo.jpg" style="width:100%; max-width:150px;"/> </div> -->

    </div>
  </div>
</div>
<?php }
?>
        
</div>
<?php
} // category fetch
?>



</div><!-- ./container -->
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
/*$(document).ready(function(){
$('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('content') 
  var modal = $(this)
  modal.find('.modal-title').text('INFO')
  modal.find('.modal-body').val(recipient)
})

});*/
</script>


<?php get_footer(); ?>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var body1 = document.getElementByTagName("html");

var overflow = document.getElementsByClassName("modal")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  overflow.style.overflowY = "hidden";
  body1.style.overflowY="hidden"
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
   overflow.style.overflowY = "scroll";
    body1.style.paddingLeft="0px"
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
   overflow.style.overflowY = "scroll";
    body1.style.paddingLeft="0px"
  }
}
</script>
<script>
$('.linkpopup').click(function(){ 
   $("html").css({"overflow": "hidden"});
   $(".modal").css({"overflow": "hidden"});
});
$('.close').click(function(){ 
   $("html").css({"overflow": "initial"});
    $(".modal").css({"overflow": "initial"});
});
$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal,.js-open-modal").length) {
    $("body").find(".modal").removeClass("visible");
    $("html").css({"overflow": "initial"});
  }
});

</script>


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
            $('#sticky_h5').css("padding", "100px 0");
        }
    }
    
    
</script>