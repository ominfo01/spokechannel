<?php
/**
 * Template Name: Sponsors Page Template
 *
 */get_header('new2'); ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    .sp_carousel-indicators { display:block !important;}
    .sp_carousel-indicators li {display:inline-block; width:14px !important; margin:7px !important; height:14px !important; background-color: #dfddd3;  border: 1px solid #dfddd3;}
    .sp_carousel-indicators li:hover, .sp_carousel-indicators li:active, .sp_carousel-indicators li:focus, .sp_carousel-indicators .active { background-color: #373633 !important;border: 1px solid #373633;}

.modal-dialog { max-width:510px !important; }
.modal-content { background-color:#fffef3 !important; border-color:transparent !important;height:640px;  padding-bottom: 90px;}
.modal { background-color:transparent !important;}
.modal-body{ padding:40px 50px;}
.modal-body p{ font-weight:lighter !important; }
.close {
    float: right;
    font-size: 60px !important;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 1 !important;
    font-family: Arial !important;
}
.title_sponsor h1{
    font-family: 'Gill Sans Light' !important;
    color: #000;
    font-weight: 300 !important;
    font-size: 17.37pt !important;

        text-transform: uppercase;
    padding-bottom:30px;
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
.title_sponsor span {
   
    font-family: 'Gill Sans MT' !important;
    color: #000;
    font-weight: 700 !important;
    font-size: 17.37pt !important;
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
</style>


<div class="subscribeformsection" style="padding-bottom: 80px;">
    
    
    <div class="padding-lr-65"> 
    
        <h1 class="subscribeheading" style="margin-top: 0px; margin-bottom: 0px;"><span>OUR</span> SPONSORS</h1>
    
    <div class="subscribetext" style="max-width: 100%;margin-bottom:0px;" > <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
                    <?php echo the_content(); ?>
               
            <?php endwhile; ?>
        <?php endif; ?></div>
  
    </div>
    
    
    
</div>
<div class="container-fluid bg-color-f6f5e9" id="content-body">
   
 <div class="row padding-lr-80 bg-color-f6f5e9">
<div class="separate" style="height:80px;"></div>
</div>
<div class="row padding-lr-80 bg-color-f6f5e9">
<div id="demo" class="carousel w-100 slide row carousel-fade" data-ride="carousel" data-interval="false">
<div class="carousel-inner">

<?php
$args = array('post_type' => 'title_sponsor');
$loop = new WP_Query($args); 
$i = 0;
if ($loop->have_posts()) : 
while ($loop->have_posts()) : $loop->the_post(); 
?> 
<div class="bg-color-f6f5e9 carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>" style="width:100%;">
<div class="row bg-color-f6f5e9">   
<?php $i++; ?>
<div class="col-md-10 d-flex"><div class="title_sponsor"><h1>TITLE&nbsp;&nbsp;<span>SPONSORS</span></h1></div></div>
<div class="col-md-2 pt-2 my-auto text-right">
<ul class="carousel-indicators sp_carousel-indicators text-right" style="position: inherit !important;">
<?php
for ($ii = 0; $ii < $loop->post_count; $ii++) { ?>
<li data-target="#demo" data-slide-to="<?php echo $ii ?>"
class="<?php echo ($i - 1 == $ii) ? 'active' : ''; ?>"></li>
<?php } ?>
</ul>
</div>
</div>
<div class="separator-div" style="height:3px; background-color:#000"></div>
<div class="row align-items-center" style="margin-top:60px; height:700px;">
<div class="col-sm-6 col-md-6 col-lg-6 p-0 m-0">
<table style="width:100%; height:100%;"><tr><td class="sp_title_logo" >
<?php
if (has_post_thumbnail()) {
$imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$website_url =  get_post_meta($post->ID, 'website_url', true);
if(!empty($website_url)) { $url = "href=".$website_url; }
else { $url = '';}
echo '<a '.$url.' target="_blank"><img src="'.$imgurl.'" alt="" /></a>';
}
?>
</td></tr></table>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 sp_title_content">
<table style="width:100%; height:100%;"><tr><td class="sp_title_content linkContentDiv">
<?php // the_content($post->ID);
$content = get_the_content($post->ID);
$trimmed_content = wp_trim_words( $content, 70, NULL );
echo '<p>' .$trimmed_content. '</p>';
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
<div class="row padding-lr-80 bg-color-f6f5e9">
<div class="col-md-12"><div class="title_sponsor"><h1><?php echo $cat->name; ?>&nbsp;&nbsp;<span>Sponsors</span></h1></div><div class="separate" style="height:3px; background-color:#000"></div></div>
</div>
<div class="row padding-lr-80 bg-color-f6f5e9" style=" min-height:848px">
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
echo '<a '.$url.' target="_blank"><img src="'.$imgurl.'" alt="" /></a>';
}
else {
echo '<img src="'.bloginfo('template_directory').'/images/dummy.png">';
}
echo '<a href="#" data-toggle="modal" data-target="#myModal-'.$post->ID.'"><button id="myBtn">Open Modal</button></a></div> </div>';?>
<!--<div class="modal hide fade" id="myModal-<?php echo $post->ID;?>">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      
      <div class="modal-body">
        <h4 class="modal-title">INFO</h4>
        <?php $content = apply_filters( 'the_content', get_the_content() );
    echo $content;
        ?>
      </div>

<!-- <div class="modal-footer"> <img src="<?php echo bloginfo('template_directory')?>/images/spoke_logo.jpg" style="width:100%; max-width:150px;"/> </div> 

    </div>
  </div>
</div>-->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php $content = apply_filters( 'the_content', get_the_content() );
    echo $content;
        ?></p>
  </div>

</div>
<?php }
?>
        
</div>
<?php
} // category fetch
?>


</div><!-- ./container -->
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- Modal -->
<!--<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
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
</div>-->


<script type="text/javascript">
$(document).ready(function(){
$('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('content') 
  var modal = $(this)
  modal.find('.modal-title').text('INFO')
  modal.find('.modal-body').val(recipient)
})

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
<?php get_footer(); ?>
