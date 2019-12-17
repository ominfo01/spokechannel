<?php
/**
 * Template Name: About Page22
 *
 */
/*get_header('new2');*/?>


<?php 
session_start();
get_header('new2');
$_SESSION['member']=array();
$_SESSION['member_ID']=array();  
$args221 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop221 = new WP_Query($args221);
  $s221= 0;
 while($loop221->have_posts() && $s221 < 9) : $loop221->the_post();
if($s221==0){$currentpost=get_the_ID();}
$s221++;  endwhile;   
  
 $args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 array_push($_SESSION['member'],get_the_title());
 array_push($_SESSION['member_ID'],get_the_ID());
$s++;  endwhile; 






$args = array('post_type' => 'member', 'p' => $currentpost);
$loop = new WP_Query($args); 
$i = 0;


$j = 0;
$p = 0;
while ( have_posts() ) : the_post(); 

?>
<script>
$( document ).ready(function() {
  console.log( "document ready!" );

  var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
  
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: 'initial', right: 0 , margin:'0px 0px 100px'});
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', right: '65px', top: stickOffset, margin:'100px 0px'});
      } else {
          $sticky.css({position: 'absolute', top: 'initial', right: 0, margin:'0px 0px 100px'});
      }
       if ($('.sticky').offset().top + $(".sticky").height() > $(".sticky-stopper").offset().top) {
        $('.sticky').css('top',-($(".sticky").offset().top + $(".sticky").height() - $(".sticky-stopper").offset().top));
    }
    });

  }
});
$(".topmembuttonclass").on('click', function(event){
     var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
  
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: 'initial', right: 0 , margin:'0px 0px 100px'});
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', right: '65px', top: stickOffset, margin:'100px 0px'});
      } else {
          $sticky.css({position: 'absolute', top: 'initial', right: 0, margin:'0px 0px 100px'});
      }
       if ($('.sticky').offset().top + $(".sticky").height() > $(".sticky-stopper").offset().top) {
        $('.sticky').css('top',-($(".sticky").offset().top + $(".sticky").height() - $(".sticky-stopper").offset().top));
    }
    });

  }
});
$(".sidemembuttonclass").on('click', function(event){
     var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 0;
    var stickyStopperPosition = $stickyrStopper.offset().top;
  
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: 'initial', right: 0 , margin:'0px 0px 100px'});
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', right: '65px', top: stickOffset, margin:'100px 0px'});
      } else {
          $sticky.css({position: 'absolute', top: 'initial', right: 0, margin:'0px 0px 100px'});
      }
       if ($('.sticky').offset().top + $(".sticky").height() > $(".sticky-stopper").offset().top) {
        $('.sticky').css('top',-($(".sticky").offset().top + $(".sticky").height() - $(".sticky-stopper").offset().top));
    }
    });

  }
});
</script>
<style>
.container1 {
  position: relative;
  
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
   border-top: 0.5px solid #929292;
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
        padding: 2px 4px 0px;
    width: 94px;
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Bebas";
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}.box14 .title3 {
    opacity: 0;
    transform: translate3d(0,00px,0);
    transition: transform .5s ease 0s;
    color: black;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 21.37pt;
       padding: 2px 4px 0px;
    width: 105px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    font-family: "TypoPRO Bebas Neue";
    border: 2px solid #000;
    margin-right: auto;
    margin-left: auto;
    margin-top: 0;
}
.box14 .title {
    color: black;
    margin-right: auto;
    margin-left: auto;
    font-size: 21.37pt;
    font-weight: 400;
    margin-top: 0;
    margin-bottom: 0;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
    /* padding: 5.6% 0px; */
    opacity: 0;
    padding-top: 15.625%;
    padding-bottom: 8%;
    transform: translate(-50%, -50%);
    transform: translate3d(0,5px ,0);
    transition: transform .5s ease 0s;
    animation: animatezoom 0.6s;
    /* animation: opac 0.8s; */
}
.box14 .title2 {
    color: black;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16.37pt;
    margin-right: auto;
    margin-left: auto;
    padding: 25px 0px;
    width: 220px;
    text-transform: uppercase;
    font-weight: 100;
    font-family: "Gill Sans Light";
    text-align: center;
    margin-left: auto;
    /* padding: 25px 0px; */
    padding-top: 0;
    padding-bottom: 15.2%;
    opacity: 0;
    transform: translate3d(0,10px,0);
    transition: transform .5s ease 0s;
}.box14 .title1 {
    margin-bottom: 8%;
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

@media only screen and (max-width: 1556px){
.box14 .title {
    color: black;
    margin-right: auto;
    margin-left: auto;
    font-size: 15.37pt;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 0;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
    /* padding: 5.6% 0px; */
    opacity: 0;
    padding-top: 12.625%;
    padding-bottom: 5.6%;
    transform: translate(-50%, -50%);
    transform: translate3d(0,5px ,0);
    transition: transform .5s ease 0s;
    animation: animatezoom 0.6s;
    /* animation: opac 0.8s; */
}}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    function changecontent(obj){
            
         var id=obj.id;
      if(id.startsWith("topmem")){
          var postno = id.replace("topmem","");
      }else{
           var postno = id.replace("sidemem","");
      }
         var titlesections = document.getElementsByClassName("interview-title");
         var newtitleID = "title".concat(postno);
        for(var j = 0; j < titlesections.length; j++){
                        titlesections[j].innerHTML = document.getElementById(newtitleID).innerHTML;
                    }
        
        var figuresections = document.getElementsByClassName("interview-figure");
         var newfigureID = "figure".concat(postno);
        for(var j = 0; j < figuresections.length; j++){
                        figuresections[j].innerHTML = document.getElementById(newfigureID).innerHTML;
                    }
        var topbuttons = document.getElementsByClassName("topmembuttonclass");            
        for(var j = 0; j < topbuttons.length; j++){
                        topbuttons[j].className = "topmembuttonclass";
                    }
        var newtopbuttonid = "topmem".concat(postno);
        document.getElementById(newtopbuttonid).className = "topmembuttonclass active";
        
        var sidebuttons = document.getElementsByClassName("sidemembuttonclass");            
        for(var j = 0; j < sidebuttons.length; j++){
                        sidebuttons[j].className = "sidemembuttonclass";
                    }
        var newsidebuttonid = "sidemem".concat(postno);
        document.getElementById(newsidebuttonid).className = "sidemembuttonclass active";
        
        var newaboutcontent = "aboutcontent".concat(postno);
        var aboutsections = document.getElementsByClassName("aboutcontent");            
        for(var j = 0; j < aboutsections.length; j++){
                        aboutsections[j].innerHTML = document.getElementById(newaboutcontent).innerHTML;
                        aboutsections[j].className=" w3-animate-opacity aboutcontent";
                    }
        var newspokecontentID = "spokescriptcontent".concat(postno);
        
        var spokesections = document.getElementsByClassName("spokeScriptsection");            
        for(var j = 0; j < spokesections.length; j++){
            if(document.getElementById(newspokecontentID)){
                        spokesections[j].style.display = "block";
                       document.getElementById("spokescript-content").innerHTML=document.getElementById(newspokecontentID).innerHTML;
                       var spokebuttons = document.getElementsByClassName("spokeabout111");
                       for(var k = 0; k < spokebuttons.length; k++){
                          spokebuttons[j].style.display = "block"; 
                       }
                    }else{
                      spokesections[j].style.display = "none";  
                       var spokebuttons = document.getElementsByClassName("spokeabout111");
                       for(var k = 0; k < spokebuttons.length; k++){
                          spokebuttons[j].style.display = "none"; 
                       }
                    }
    }
        
        
            var oldphotoslider = document.getElementById("photosliderframe");
             var oldvideoslider = document.getElementById("videosliderframe");
              var oldfeaturedimage = document.getElementById("ak_header_image");
              var showphotos = document.getElementById("showPhotos");
               var showvideos = document.getElementById("showVideos"); 
              
          
            var newphotoslider= "photosliderid".concat(postno);
            var newvideoslider= "videosliderid".concat(postno);
            var newfeaturedimage= "featuredimage".concat(postno);
           
                    if(document.getElementById(newphotoslider) != null && document.getElementById(newvideoslider) != null){
                        var newidphoto = document.getElementById(newphotoslider).innerHTML;
                          var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var urlphoto = str.concat(newidphoto);
                                  oldphotoslider.src = urlphoto;
                                 /* alert(urlphoto);*/
                     var newidvideo = document.getElementById(newvideoslider).innerHTML;
                            var urlvideo = str.concat(newidvideo);
                                  oldvideoslider.src = urlvideo; 
                                
                                oldphotoslider.style.display ="block";
                                  showphotos.style.display ="block";
                                  
                                
                                 showphotos.style.cursor = "pointer";
                                 showphotos.style.pointerEvents = "auto";
                                 
                                 
                                 
                                 showphotos.classList.add("photn_active"); 
                                 showphotos.classList.add("border-right");
                                 oldvideoslider.style.display ="none";
                                 showvideos.style.display = "block";
                                 showvideos.style.color = "#000000";
                                 showvideos.style.cursor = "pointer";
                                 showvideos.style.pointerEvents = "auto";showphotos.style.color ="#000000";
                                 showvideos.classList.remove("photn_active");
                               
                              oldfeaturedimage.style.display ="none";
                              oldfeaturedimage.style.backgroundImage = "";
                         showphotos.setAttribute("onclick","showPhotoVideo(this)");  
                         showvideos.setAttribute("onclick","showPhotoVideo(this)");  
                    
                    }else if(document.getElementById(newphotoslider) == null && document.getElementById(newvideoslider) != null){
                         var newidvideo = document.getElementById(newvideoslider).innerHTML;
                           var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var urlvideo = str.concat(newidvideo);
                                  oldvideoslider.src = urlvideo;
                                 /* alert(urlvideo);*/
                              oldphotoslider.src = "about:blank"; 
                              frameDoc = oldphotoslider.contentDocument || oldphotoslider.contentWindow.document;
                                frameDoc.documentElement.innerHTML = "";
                                  oldphotoslider.style.display ="none";
                                  showphotos.style.display ="block";
                                 showphotos.classList.remove("photn_active"); 
                                 
                                 showphotos.style.color ="#808080 !important";
                                 
                                 showphotos.style.cursor = "display";
                                 showphotos.style.pointerEvents = "none";
                                 oldvideoslider.style.display ="block";
                               showvideos.style.display ="block";
                               showvideos.classList.add("photn_active");
                               showvideos.style.display ="block";
                                 showvideos.style.color ="#000000 !important";
                                 showvideos.style.cursor = "pointer";
                                 showvideos.style.pointerEvents = "auto";
                               oldfeaturedimage.style.display ="none";
                               oldfeaturedimage.style.backgroundImage = "";
                         showphotos.setAttribute("onclick","showPhotoVideo(this)");  
                         showvideos.setAttribute("onclick","showPhotoVideo(this)");  
                        
                    }else if(document.getElementById(newphotoslider) != null && document.getElementById(newvideoslider) == null){
                        var newidphoto = document.getElementById(newphotoslider).innerHTML;
                          var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var urlphoto = str.concat(newidphoto);
                                  oldphotoslider.src = urlphoto; 
                                 /* alert(urlphoto);*/
                                 oldvideoslider.src = "about:blank"; 
                                  frameDoc = oldvideoslider.contentDocument || oldvideoslider.contentWindow.document;
                                frameDoc.documentElement.innerHTML = "";
                                  oldphotoslider.style.display ="block";
                                  showphotos.style.display ="block";
                                 showphotos.classList.add("photn_active"); 
                                 
                                 showphotos.style.color ="#000000";
                                 showphotos.style.cursor = "pointer";
                                 showphotos.style.pointerEvents = "auto";
                                 oldvideoslider.style.display ="none";
                              
                               showvideos.style.display ="block";
                                 showvideos.style.color ="#808080";
                                 showvideos.style.cursor = "display";
                                 showvideos.style.pointerEvents = "none";
                               showvideos.classList.remove("photn_active");
                               
                               oldfeaturedimage.style.display ="none";
                               oldfeaturedimage.style.backgroundImage = "";
                         showphotos.setAttribute("onclick","showPhotoVideo(this)");  
                         showvideos.setAttribute("onclick","showPhotoVideo(this)");  
                    }else{
                         oldfeaturedimage.style.backgroundImage = "url("+ document.getElementById(newfeaturedimage).innerHTML +")";
                         /*alert("neither");*/
                         oldfeaturedimage.style.display ="block";
                         oldphotoslider.style.display ="none";
                         showphotos.style.color ="#808080";
                           showphotos.style.cursor = "display";
                                 showphotos.style.pointerEvents = "none";
                         showphotos.style.display ="block";
                         showphotos.classList.remove("photn_active");
                         
                         oldvideoslider.style.display ="none";
                         showvideos.style.display ="block";
                         showvideos.style.color ="#808080";
                                 showvideos.style.cursor = "display";
                                 showvideos.style.pointerEvents = "none";
                         showvideos.classList.remove("photn_active");
                        showphotos.setAttribute("onclick","#");           
                         
                                } 
                    
                    
                    
                    
                    /*if(document.getElementById(newphotoslider) != null && document.getElementById(newvideoslider) == null){
                         var newid = document.getElementById(newphotoslider).innerHTML;
                          var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var url = str.concat(newid);
                            
                                  oldphotoslider.src = url; 
                                   oldphotoslider.style.display ="block";
                                  showphotos.style.display ="block";
                                 showphotos.classList.add("photn_active");

                        
                    }else if(document.getElementById(newphotoslider) == null && document.getElementById(newvideoslider) == null){
                    oldphotoslider.innerHTML = "";
                        oldphotoslider.style.display ="none";
                        showphotos.style.display ="block";
                        showphotos.classList.remove("border-right");
                        showphotos.classList.add("photn_active");
                    
                    }else if(document.getElementById(newphotoslider) != null && document.getElementById(newvideoslider) == null)
                    
                    else{
                        oldphotoslider.innerHTML = "";
                        oldphotoslider.style.display ="none";
                        showphotos.style.display ="none";
                        showphotos.classList.remove("photn_active");
                       
                    }
                   
                    if(document.getElementById(newvideoslider) != null && document.getElementById(newphotoslider) != null){
                        var newid = document.getElementById(newvideoslider).innerHTML;
                          var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var url = str.concat(newid);
                           
                                  oldvideoslider.innerHTML = url; 
                                   oldvideoslider.style.display ="none";
                                   showphotos.style.display ="block";
                                   showvideos.style.display ="block";
                                   showphotos.classList.add("photn_active");
                                   showphotos.classList.add("border-right");
                                   showvideos.classList.remove("photn_active");

                               
                    }else if(document.getElementById(newvideoslider) != null && document.getElementById(newphotoslider) == null){
                         var newid = document.getElementById(newvideoslider).innerHTML;
                          var str = "http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q=";
                            var url = str.concat(newid);
                            
                                  oldvideoslider.innerHTML = url; 
                                   oldvideoslider.style.display ="block";
                                  
                                   showvideos.style.display ="block";
                                   showvideos.classList.add("photn_active");
                                   showphotos.classList.remove("photn_active");

                            
                    }else{
                        oldvideoslider.innerHTML = "";
                      oldvideoslider.style.display ="none";
                       showvideos.style.display ="none";
                       showvideos.classList.remove("photn_active");

                    }
                 
                  
                
                for(var i = 0; i < oldfeaturedimage.length; i++)
                {
                    
                    if(document.getElementById(newvideoslider) != null || document.getElementById(newphotoslider) != null){
                         oldfeaturedimage[i].style.display ="none";
                    
                         
                    }else{
                         oldfeaturedimage[i].style.backgroundImage = "url("+ document.getElementById(newfeaturedimage).innerHTML +")";
                         oldfeaturedimage[i].style.display ="block";
                         showphotos.style.display ="block";
                         showphotos.classList.add("photn_active");
                         showphotos.classList.remove("border-right");
                                   showvideos.style.display ="none";
                         
                    }
                }       
                */
           
       }

   function showPhotoVideo(obj){
       var oldphotoslider = document.getElementById("photosliderframe");
       var oldvideoslider = document.getElementById("videosliderframe");
        if(obj.id == "showPhotos"){
       obj.classList.add("photn_active");
         document.getElementById("showVideos").classList.remove("photn_active");
         oldvideoslider.style.display="none";
         oldphotoslider.style.display="block";
        }else{
         obj.classList.add("photn_active");
         document.getElementById("showPhotos").classList.remove("photn_active");
         oldphotoslider.style.display="none";
         oldvideoslider.style.display="block";
        }
   }
</script>

<style>
.site-content {
    padding: 0;
    background: #fffef3;#fffef300
}#fffef300
</style>

<?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="col">
<div class=" sliderpart">
    
                   
        <?php 
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
       $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
       
        ?>
        
        <iframe id="photosliderframe"  src="<?php echo 'http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q='.$photo_slider_id; ?>" style="border: 0; width: 100%;margin-bottom: 0;height: 810px;
        <?php if($photo_slider_id == null){echo 'display:none;';} ?>">
        </iframe>
        <iframe id="videosliderframe"src="<?php echo 'http://theaiteecompany.com/thespoke/wordpress/getmembercontent?q='.$video_slider_id; ?>" style="border: 0;margin-bottom: 0; width: 100%;height: 810px;
        <?php if($photo_slider_id != null && $video_slider_id != null){echo 'display:none;';}else if($video_slider_id == null){echo 'display:none;';} ?>">
        </iframe>
        <div id="ak_header_image" class="ak_header_image" style="background-image:url('<?php echo $imgurl; ?>');<?php if(!empty($photo_slider_id) || !empty($video_slider_id)){echo 'display:none;';} ?>" ></div>
</div>
</div> 
            
<script> 
if($('.content-bg-color').css('margin-top') == '-110px')){
 /* alert("Not a valid Number");*/
}else{}
</script>
<?php endwhile; ?>
            <?php endif; ?>
            
<script>       
</script>
            
<div class="content-bg-color" style="background: #fffef300; margin-top: -110px;" id="content-body">
<div class=" padding-lr-65 carousel-indicator-area bg-color-fffef3" style="margin-top:0px; height: 61px !important;     background-color: #fffef3;" >
        <?php if ($loop->have_posts()) : ?>
                <?php 
                while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php
        $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
        $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);

?>
<div class="col-md-4" style="padding-left:0px;padding-right:0px;">
    
   <div class="col-md-12 col-xs-12 justify-content-center align-self-center" style="padding-left:0;padding-right:0px;    line-height: 60px;">
<div class="btn-group switch" role="group" aria-label="Basic example">
<a class="btn border-right pl-0 <?php if($photo_slider_id != null && $video_slider_id == null){echo 'photn_active'; } ?>" id="showPhotos" <?php if($photo_slider_id != null){echo 'onclick="showPhotoVideo(this);"';} ?> style="padding-left:0; <?php if($photo_slider_id != null && $video_slider_id != null){echo ' color:#000000;pointer-events: auto;cursor: pointer;';}else if($photo_slider_id == null && $video_slider_id != null){echo 'color:#808080;display:block;pointer-events: none;cursor: default;';}else if($photo_slider_id != null && $video_slider_id == null){echo 'color:#000000;display:block;pointer-events: auto;cursor: pointer;';}else{ echo 'color:#808080;display:block;pointer-events: none;cursor: default;';} ?>">Photo</a>
      
<a  class="btn <?php if($photo_slider_id == null && $video_slider_id != null){echo 'photn_active'; } ?>" id="showVideos" onclick="showPhotoVideo(this);" style="<?php if($photo_slider_id != null && $video_slider_id != null){echo ' color:#000000;pointer-events: auto;cursor: pointer;';}else if($photo_slider_id == null && $video_slider_id != null){echo 'color:#000000;pointer-events: auto;cursor: pointer;';}else if($photo_slider_id != null && $video_slider_id == null){echo 'color:#808080;display:block;pointer-events: none;cursor: default;';}else{ echo 'color:#808080;display:block;pointer-events: none;cursor: default;';} ?>">Video</a>
        </div>
</div>
            

</div>
<?php endwhile; ?>
            <?php endif; ?>

        <div class="col-md-4"></div>
        
             <div class="col-md-1"></div>
         <div class="col-md-3 col-xs-12 hidemobile" style="text-align:right;z-index:1; padding-right:0; padding-left: 0;">
             
         
        </div>
    </div>
        <div class=" padding-lr-80 bg-color-f6f5e9">
            <div class="col p-0">
                <div class="separator-div"></div>
            </div>
        </div>
        <div class="col-md-12 padding-lr-65 bg-color-fffef3" style="    z-index: 10;">
                            <div class="col-md-4 col-xs-12 col padding-0 home-header justify-content-center align-self-center interview-title borderphotovid" style="height: 64px;">
                                <?php the_title(); ?>
                            </div>
                             <div class="col-md-4 col-xs-12 col text-center home-header-center justify-content-center align-self-center type-text borderphotovid interview-figure" style="padding: 0px;height: 64px;"><?php $data123=get_post_meta($post->ID, 'occupation', true);  if($data123){echo get_post_meta($post->ID, 'occupation', true); }else{echo "FIGURE";}?> </div>
                            <div class="col-md-4 col-xs-0 col padding-0 text-right home-right-text justify-content-center align-self-center season-episode-txt borderphotovid" style="height: 64px;padding: 4px 0px;">
                              </div>
                            </div>
        
        <div class="col-md-12 aboutusmembername padding-lr-65 bg-color-fffef3" style="padding-top: 5px;padding-bottom: 5px;">
                        <div class="col-md-4"></div>
                        <div class="col-md-8 text-right home-right-text justify-content-center align-self-center season-episode-txt" >
                            
                            
<div class="col ml-auto justify-content-center align-self-center text-right next-pre-div" style="line-height:18px;padding: 7px 0 17px;">
    
  
<?php
 $u=0;
 foreach($_SESSION['member'] as $value){ ?>

 <a class="about-tab" ><span id="<?php echo 'topmem'.$_SESSION['member_ID'][$u]; ?>" onclick="changecontent(this)" class="topmembuttonclass <?php if($u == 0) echo 'active'; ?>"  ><? echo $value; ?></span></a>
 
 <?php 
 $u++;
 } ?>
      
</div>
                                </div>
                        </div>
                        
         <div class="accordion hidelg" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link homepageinterviewaccbutt collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">About</h2>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
  <p class="aboutcontent"><?php echo get_post_field('post_content', $post->ID); ?></p>
      </div>
    </div>
  </div>
  
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link homepageaboutaccbutt collapsed" type="Three" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="width: 100%; text-align: left;">
          <h2 class="interview-heading-h2">Spokescript</h2>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       
      </div>
    </div>
  </div>



</div>    
                        
                        
                        
                        
        <div class=" bg-color-f6f5e9" style="height:0px;">&nbsp;</div>
        <div class=" row-eq-height bg-color-eceadf padding-lr-65 hidemobile" style="display: flex;min-height: 685px;">
            <div class="col-md-9 pl-0 body-content-single" style="flex: 1;padding-left:0px;padding-right:0px;padding-bottom: 100px;">
                
                 <div class="interviewContentDiv">
                    <h2 class="interview-heading-h2">About</h2>
                   <div class="aboutcontent w3-animate-opacity"> <?php the_content(); ?> </div>
                                                       
                </div>
                
               
            </div>
            <div class="col-md-3 pr-0" style="padding-top:0px; padding-bottom: 100px;padding-left:0px;padding-right:0px;" >
                <div class="sticky static-right-button">
                    
                    <div class="float-right button-wrap" style="margin-top: 94px;">
                        
                        <?php 
                        $t=0;
                        
                        foreach($_SESSION[member] as $value){ ?>
                        <span id="<?php echo 'sidemem'.$_SESSION['member_ID'][$t]; ?>" onclick="changecontent(this)"  class="sidemembuttonclass <?php if($t == 0) echo 'active'; ?>" ><? echo $value; ?></span>
                        <? 
                        if($t==0){
                        $spokescript= get_post_meta($post->ID, 'spokescript', true);
                        }
                        $t++; } ?>
                        
                                   <a style="color:#000000 !important;<?php if($spokescript == null){echo 'display:none;';} ?>" id="spokesciptabout" class="spokeabout111" >SpokeScript</a>
                                 
                    </div>
                   
                </div>
            </div>
        </div>
         
    <?php $spokescript= get_post_meta($post->ID, 'spokescript', true);?>


 <div class="container-fluid content-bg-color padding-lr-65 spokeScriptsection" style="    background: rgb(247, 245, 233);<?php if($spokescript == null){echo 'display:none;';} ?>"  >
                         <div class=" bg-color-fff hidemobile" id="spokeScriptsection" style="    background-color: #fff;">
                            <div class="col-md-9 spokescript-content spokeScriptsubsection1 pl-0">
                                <h2 class="">SpokeScript</h2>
                                <p id="spokescript-content"><?php echo get_post_meta($post->ID, 'spokescript', true); ?></p>
                               
                            </div>
                        </div>
                         </div>
 
      
<?php endwhile; 

?>        

   </div>
    
    
    <script>
    $("span.homespokescriptA").on("click", function() {
    $('html, body').animate({
        scrollTop: $(".spokeScriptsubsection3").offset().top
    }, 0);
        
   
});



    </script>
    <div class="sticky-stopper"></div>
<?php get_footer(); ?>
<?php
$args22 = array('post_type' => 'member', 'posts_per_page' => 9);
  $loop1 = new WP_Query($args22);
  $s= 0;
 while($loop1->have_posts() && $s < 9) : $loop1->the_post();
 
 $sliderphoto=get_post_meta($post->ID, 'photo_slider_id', true);
 
 
 $data123=get_post_meta($post->ID, 'occupation', true);  
 echo "<div id='title".get_the_ID()."' style='display:none;'>";
  echo get_the_title();
  echo "</div>";
   echo "<div id='figure".get_the_ID()."' style='display:none;'>";
if($data123){echo get_post_meta($post->ID, 'occupation', true); }else{echo "FIGURE";}
echo "</div>";
  echo "<div id='aboutcontent".get_the_ID()."' style='display:none;'>";
  echo the_content();
  echo "</div>";
  
  
  
  $spokescript =  get_post_meta(get_the_ID(), 'spokescript', true);
  if($spokescript){
  echo "<div id='spokescriptcontent".get_the_ID()."' style='display:none;'>";
  echo get_post_meta(get_the_ID(), 'spokescript', true);
   echo "</div>";
  }
   $photo_slider_id =  get_post_meta($post->ID, 'photo_slider_id', true);
   $video_slider_id =  get_post_meta($post->ID, 'video_slider_id', true);
       
       if(!empty($photo_slider_id) && empty($video_slider_id)) {
          
   echo "<div id='photosliderid".get_the_ID()."' style='display:none;'>";
   echo $photo_slider_id; 
    echo "</div>";
        }
        else if(!empty($video_slider_id) && empty($photo_slider_id)) {
                       
  echo "<div id='videosliderid".get_the_ID()."' style='display:none;'>";
  echo $video_slider_id; 
    echo "</div>";
        }

        else if(!empty($photo_slider_id) && !empty($video_slider_id)) {
                      
 echo "<div id='photosliderid".get_the_ID()."' style='display:none;'>";
   echo $photo_slider_id; 
    echo "</div>";   
              
    echo "<div id='videosliderid".get_the_ID()."' style='display:none;'>";
   echo $video_slider_id; 
    echo "</div>";
        }
        
        else 
        {
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
             echo "<div id='featuredimage".get_the_ID()."' style='display:none;'>";
          echo $imgurl;
           echo "</div>";
        }
$s++;  endwhile; 
?>



<script>
    $(document).ready(function () {
        n2ss.ready(<?= $sliderId ?>, function (slider, sliderElement) {
            N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
                setTimeout(function () {
                    var html = '';
                    for (i = 0; i < slider.realSlides.length; i++) {
                        console.log(slider);
                        var ss = ''
                        var cl = (i == 0) ? 'active' : '';

                       // html = html + "<a href='#' onclick='ss(" + i + ");' class='switch slide-show-bullet " + cl + "' id='slide-tag-a-" + i + "'>&nbsp;</a>";
                        html = html + '<a onclick="ss('+ i + ')"><li id="slide-tag-a-' + i +'" class="' + cl + '"></li></a>'
                    }
                    $(".switchs").html(html);
                }, 500);
            });

            sliderElement.on('mainAnimationStart',
                function (e, animation, previousSlideIndex, currentSlideIndex) {
                });
            sliderElement.on('mainAnimationComplete',
                function (e, animation, previousSlideIndex, currentSlideIndex) {
                    $("#slide-tag-a-" + previousSlideIndex).removeClass('active');
                    $("#slide-tag-a-" + currentSlideIndex).addClass('active');
                });
        });
    });

    function nextSlide(next) {
        N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
            if (next) {
                slider.next();
            } else {
                slider.previous();
            }
        });
    }

    function ss(i) {
        N2R('#n2-ss-<?= $sliderId ?>', function ($, slider) {
            slider.slide(i);
        });
    }
    
    
</script>
