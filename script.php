	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<script type="text/javascript">
/*****back to top button***/
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 1000;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.mbw-back-to-top').fadeIn(duration);
        } else { //www.mybloggersworld.com
            jQuery('.mbw-back-to-top').fadeOut(duration);
        }
    }); 
  
    jQuery('.mbw-back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script>

<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
    // Menentukan elemen yang dijadikan sticky yaitu .nav
    var stickyNavTop = $('.nav').offset().top; 
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();  
        // Kondisi jika discroll maka menu akan selalu diatas, dan sebaliknya        
        if (scrollTop > stickyNavTop) { 
            $('.nav').css({ 'position': 'fixed', 'top':0, 'right':0, 'left':0, 'z-index':9999 });
        } else {
            $('.nav').css({ 'position': 'relative', 'right':0, 'left':0 });
        }
    };
    // Jalankan fungsi
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
//]]>
</script>


<script type="text/javascript">

/*** 
    Membuat Slideshow mudah dengan sedikit Bumbu JavaScript & CSS 
 By : Jon Raasch (jonraasch.com) &  Modified by : Kang Rian (blog.kangrian.com)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000 /* << Atur Kecepatan lebih menurun lebih cepat !*/, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>
