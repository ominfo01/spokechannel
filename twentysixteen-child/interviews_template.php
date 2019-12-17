<?php
/**
 * Template Name: All Interviews Page
 *
 */ ?>
<?php get_header('new2'); ?>
<style>
.navbar-nav-sub{
     display:none;
 }
</style>
<div class="col-md-12 topheadercate">
<div align="center" class="col-md-12" id="catlist">
             <button class="btn btn-default filter-button" id="allbutton" data-filter="all" style="font-weight:600;font-family: 'GillSans' !important;">All</button>
           
            <?php
                            $categories = get_categories();
                            $i = 0;
                            foreach ($categories as $category) {
                                if ($category->parent == 0 && $category->cat_name != 'All') {
                                    $i++;
                                    ?>
                                    <li style="margin-top:2px;margin-bottom:2px;" class="btn btn-default filter-button" id="menu<?= $i ?>" data-filter="<?= $category->cat_name ?>"><?= $category->cat_name ?></li>
           
             <?php }} ?>
        </div>
        <div id="sub-navbar" align="center" class="col-md-12" style=" height: 33px;">
         <?php
                        $r=0;
                        foreach ($categories as $category) {
                            if ($category->parent == 0 && $category->cat_name != 'All') {
                                $r++;
                                ?>
                                <ul id="sub-menu<?= $r ?>" class="navbar-nav navbar-nav-sub <?= $category->cat_name ?>">
                                <?php
                            } ?>

                            <?php
                            $subcats = get_categories('child_of='.$category->term_id);
                            if($subcats) {?>
                                 <button class="btn btn-default filter-button" id="menu<?= $i ?> all" data-filter="<?= $category->cat_name ?>">All</button>
                                <?php
                                foreach( $subcats as $subcat )
                                { ?>
                                 <button class="btn btn-default filter-button" id="menu<?= $i ?> all" data-filter="<?= $subcat->name ?>"><?= $subcat->name ?></button>
                                    
                                <?php }
                            }
                            ?>
                            <?php if ($category->parent == 0 && $category->cat_name != 'All') { ?>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                        </div>
</div>
 <div class="padding-lr-52 row moreinterviewtab" style="background-color: #f7f5e9;    min-height: 540px;padding-top: 226px;padding-bottom:41px;">
       
        
        <br/>



            
<?php
        $argss = array('post_type' => 'interview', 'posts_per_page' => -1);
        $loopp = new WP_Query($argss);
        if ($loopp->have_posts()) :
            $i = 0;
            while ($loopp->have_posts()) : $loopp->the_post();
                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'gallery-grid', false);
                ?>
            <!--<div class="gallery_product container1 col-lg-4 col-md-4 col-sm-12 col-xs-12 all filter <?=  get_category_names( $post->ID ) ?>">
                 <?php 
    global $post;
    $post_slug = $post->post_name;
?>
                <a class="lightbox" href="<?php echo get_home_url() .'/interview?id='.  get_the_ID()?>"> 
                <img class="image" src="<?php echo $src[0] ?>" class="img-responsive">
                 <div class="middle">
    
    <h3 class="text2"><?php the_title(); ?></h3>
    <div class="text3border"></div>
    
    <h3 class="text3"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "FIGURE";}?> </h3>
    
    <h3 class="text4">S<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;<?php echo get_post_meta($post->ID, 'season_episode', true); ?></h3>
    </a>
  </div>
            </div>-->
            
            <div class="gallery_product container1 w3-animate-opacity col-lg-4 col-md-4 col-sm-6 col-xs-12 all filter <?=  get_category_names( $post->ID ) ?>" style="margin-bottom: 25px;">
      <?php 
    global $post;
    $post_slug = $post->post_name;
?>
             <a class="lightbox " href="<?php echo get_home_url() .'/single-interview/?id='.get_the_ID()?>">   
                    <div class="box14 ">
                        <img class="" src="<?php echo $src[0] ?>" alt="" style="padding-bottom:0px;">
                        <div class="box-content">
                            
                            <h3 class="text2 title w3-animate-zoom"><?php the_title(); ?></h3>
    <div class="text3border title1 w3-animate-zoom"></div>
    <h3 class="text5 title2 w3-animate-zoom"><?php $data123=get_post_meta($post->ID, 'figure', true);  if($data123){echo get_post_meta($post->ID, 'figure', true); }else{echo "Figure";}?></h4>
    <h3 class="text4 title3 w3-animate-zoom">S<?php echo get_post_meta($post->ID, 'season_no', true); ?>&nbsp;-&nbsp;E<?php echo get_post_meta($post->ID, 'season_episode', true); ?></h4>
                        </div>
                    </div></a>

     </div>
            
            <?php endwhile; ?>
        <?php endif; ?>
        </div>

<p id = "GFG_DOWN" style =  
            "color:green; font-size: 20px; font-weight: bold;"> 
        </p> 

<script>
$("li").on('click',function() { 
                var subs = (this.id); 
                var subt= "sub-";
                
                var link12 = "#"+subt + subs ;
              var count = $("#catlist").children().length;
              
              /* $("#GFG_DOWN").html(count);*/
              $('#sub-navbar').children('ul').each(function () {
                  $(this).hide();
        });
           
                $(link12).show();
                 
            }); 
             $("#hide").click(function(){
    $("p").hide();
  });
            $("#allbutton").on('click',function() { 
                 $("#sub-navbar ul button").hide();
                 $("#sub-navbar ul").hide();
              });  
          $("#catlist li").on('click',function() { 
                 $("#sub-navbar ul button").show();
              });  

</script>

<style>

.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.navbar-nav {
    float: none !important;
    margin: 0 !important;
}

</style>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show();
            $('button.btn.btn-default.filter-button').css('font-weight','600');
            $('button.btn.btn-default.filter-button').css('font-family','"GillSans"');
                $('button.btn.btn-default.filter-button').css('margin-bottom','"0px"');
            $('#catlist li.active').css('font-weight','200');
            $(".filter-button").removeClass("active")
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('500');
            $('.filter').filter('.'+value).show();
             $('button.btn.btn-default.filter-button').css('font-weight','300');
             $('button.btn.btn-default.filter-button').css('font-family','"Gill Sans Light"');
             $('button.btn.btn-default.filter-button').css('margin-bottom','0');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>

<?php get_footer(); ?>
<style>
 .navbar-nav-sub{
     display:none;
 }
.nav-item { margin: auto !important;}
.category-title-bg-color {background-color: #eceadf !important; }
.navbar { padding: 0 !important;}
    .category-main-nav-bar {
        background-color: #eceadf !important;
        padding-top: 80px;
        padding-bottom: 80px !important;
    }
  
    .bg-dark {
        background-color: black !important;
    }

    .bg-secondary {
        background-color: #eceadf !important;
    }

    .category-nav-bar .active, .navbar-nav-sub .active {
        font-weight: bold;
    }


    .active a {
        font-weight: bold !important;
        font-family: "GillSans" !important;

    }
    .body-class {
        /*padding-top: 196px !important;*/
    }
    .grid-gallery {
        padding-left: 48px;
        padding-right: 48px;
    }

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
    
    .element-item {
       
        height:328px;
        
    }
    .row{
            margin: 0 auto;
    }
.element-grid img {
    height: 328px;
        width: 100%;
}
    

    .navbar-dark .navbar-nav .nav-link {
        color: white !important;
    }
    #content-body {

    }

    @media screen and (min-width: 992px){
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .7rem;
            padding-left: .7rem;
        }
    }
</style>

<script>
    

    //optional close button, can be removed along with the div with ID `close-sub-menu`
    $( "#close-sub-menu" ).click(function() {
        $('div#sub-navbar').hide();
    });

    //menu handler, will keep only the last selected menu open.
    $( ".main-menu" ).click(function() {
        $("#navSub").children().hide(); //hide all sub menu items
        $('div#sub-navbar').show(); //show main menu

        //handle links
        id = $(this).attr('id');
        $(this).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
        $(this).parent().addClass("active"); //set selected navbar link to active
        $("ul#sub-"+id).show(); //show sub menu

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $( ".sub-nav-item" ).click(function() {

        //handle links
        id = $(this).attr('id');
        $(this).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
        $(this).parent().addClass("active"); //set selected navbar link to active

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $(document).ready(function () {
        $grid.isotope({ filter: '.all' });
        window.onscroll = function() {myFunction()};
    });

    var $grid = $('.element-grid').isotope({
        itemSelector: '.element-item',
    });

    $(".sub-nav-item").click(function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $(document).ready(function () {
        window.onscroll = function() {myFunction()};
        $('#content-body').css("padding-top", "240px");
    });

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
    $('nav#sub-navbar').hide(); //hide navbar on page load

    //optional close button, can be removed along with the div with ID `close-sub-menu`
    $( "#close-sub-menu" ).click(function() {
        $('nav#sub-navbar').hide();
    });

    //menu handler, will keep only the last selected menu open.
    $( ".main-menu" ).click(function() {
        $("#navSub").children().hide(); //hide all sub menu items
        $('nav#sub-navbar').show(); //show main menu

        //handle links
        id = $(this).attr('id');
        $(this).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
        $(this).parent().addClass("active"); //set selected navbar link to active
        $("ul#sub-"+id).show(); //show sub menu

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $( ".sub-nav-item" ).click(function() {

        //handle links
        id = $(this).attr('id');
        $(this).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
        $(this).parent().addClass("active"); //set selected navbar link to active

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $(document).ready(function () {
        $grid.isotope({ filter: '.all' });
        window.onscroll = function() {myFunction()};
    });

    var $grid = $('.element-grid').isotope({
        itemSelector: '.element-item',
    });

    $(".sub-nav-item").click(function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: '.' + filterValue });
    });

    $(document).ready(function () {
        window.onscroll = function() {myFunction()};
        $('#content-body').css("padding-top", "240px");
    });

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
    $("#catlist li").on("click", function() {
      $("#catlist li").removeClass("active");
      $(this).addClass("active");
    });
     $("#sub-navbar button").on("click", function() {
      $("#sub-navbar button").removeClass("active");
      $(this).addClass("active");
    });

</script>


