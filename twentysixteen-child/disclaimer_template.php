<?php
/**
 * Template Name: disclaimer Page
 *
 */ ?>
 <?php get_header('new2'); ?>
 <style>
 



.sticky h5#sticky_h5 {
    padding: 20px 0px;
}



 </style>
 
 
 
 
 
 
 
 
 

 <div oncontextmenu="showCoords(event)" class="bg-color-f6f5e9 descl_wrap" >
    <div id="scroll-div" class="fixed-topk photo-gallery-header content-bg-color">
        <div class="sticky-header padding-lr-65 heightline">
           <h5 id="sticky_h5" >Disclaimer</h5>
        </div>
    </div>
    </div>
     <div oncontextmenu="showCoords(event)" class="bg-color-f6f5e9 descl_wrap" >
     <div class="padding-lr-65 content-bg-color padd-bottom100" >
 <?php
                $argss = array('post_type' => 'disclaimer', 'posts_per_page' => 9,'orderby'   => 'date',);
                $loopp = new WP_Query($argss);
                if ($loopp->have_posts()) :
                    $i = 0;
                    while ($loopp->have_posts()) : $loopp->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                        ?>    

<div class="entry disclaimer">

    
                        <h3><?php echo get_the_title(); ?></h3>
<?php $content = apply_filters( 'the_content', get_the_content() );
    echo $content;
        ?>

                    </div>
    
<?php endwhile; ?>
                <?php endif; ?>
                  </div>    </div>
                  
  <script>
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $(".sticky-header").addClass("sticky");
    }
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll <= 100) {
        //clearHeader, not clearheader - caps H
        $(".sticky-header").removeClass("sticky");
    }
});



  </script>


<script>
/*$(document).on('keydown', function(e) {
    if(e.ctrlKey && (e.key == "p" || e.charCode == 16 || e.charCode == 112 || e.keyCode == 80) ){
        alert("Please use the Print PDF button below for a better rendering on the document");
        e.cancelBubble = true;
        e.preventDefault();

        e.stopImmediatePropagation();
    }  
});*/
</script>
 <?php get_footer(); ?>