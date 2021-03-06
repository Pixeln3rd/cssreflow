<?php
require_once("functions_mysql.php");
if ( isset($_GET['video_id']))
{
	$video_id=mysql_real_escape_string($_GET['video_id']);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CSS Reflow | Reflow Visualizations</title>
<meta name="keywords" content="css, css reflow, reflow, browser reflow, DOM, DOM rendering, css reflow visualization, reflow visualization, web browser, video, css video gallery">
<meta name="description" content="CSS Reflow visualization video gallery. Made using a modified build of Firefox 11">
<link href='assets/css/orange.css' rel='stylesheet' type='text/css'>
<link href="assets/css/video.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="/favicon.png">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>

<div class="container">
  <div class="section" id="section1">
  
    <div class="content">
      <div class="left">
     <img src="assets/images/logo.png" width="228" height="215" alt="Css Reflow" id="logo"><!-- end .left --></div>
    <div class="right"><!-- end .right --></div>
    <div class="priceBox">
       <div class="vidWrap">
       

</div>
    </div>  <br class="clearfloat">
    
    <h2 class="vidlinkhdr">Reflow Video Gallery</h2>
    <ul class="vidLinks">
     <?php mysql_Reflow_BuildIndex();?>
     
    </ul>
    
    
    
    
    
    <a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-multimedia-performance-semantics.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, and Semantics">
          
    <br class="clearfloat"><!-- end .content --></div>
            
<!-- end #section1 --></div>
        <div class="credit">
<a href="http://bluewebpc.com" target="_blank">robert lullo</a> | <a href="http://michaelkaminski.me" target="_blank">michael kaminski</a>
</div>
<br class="clearfloat"><!-- end .container --></div> 

  <script type="text/javascript" src="https://s3.amazonaws.com/pixel_cdn/scripts/scripts.js"></script> 
  <script type="text/javascript">
                $(document).ready(function() {
					$(".various").fancybox({
						maxWidth	: 800,
						maxHeight	: 600,
						fitToView	: false,
						width		: '70%',
						height		: '70%',
						autoSize	: false,
						closeClick	: false,
						openEffect	: 'none',
						closeEffect	: 'none'
					});
				});
        </script>
  <script type="text/javascript"> 
	$(document).ready(function(){
		var lpib_navigation = '<div id="lpib_navigation_wrapper"><div id="lpib_map"><a href="#" id="lpib_map_link">Navigation</a></div><div id="lpib_navigation"><ul><li><a href="index.php#section1" id="lpib_navigation_top">Home</a></li><li><a href="index.php#section2" id="lpib_navigation_howitworks">How it Works</a></li><li><a href="index.php#section3" id="lpib_navigation_pricing">Gallery</a></li><li><a href="index.php#section4" id="lpib_navigation_about">Contact</a></li></ul></div></div>';
		var lpib_map_left = 0;
		var lpib_nav_left = -140;
	
		$('body').append( lpib_navigation );
		
		$('#lpib_map_link').click(function(e){
			e.preventDefault();
		});
		$('#lpib_map_link').mouseenter(function(e){
			$('#lpib_navigation').animate({
				left: 0
			}, 150);
		});
		$('#lpib_navigation').mouseleave(function(e){
			$('#lpib_navigation').animate({
				left: lpib_nav_left
			}, 150);
		});				
		
	});
</script> 

         <script type="text/javascript"> 
            $(function() {
                $('ul.nav a, .L1button a, .L2button a, .findout a, #lpib_navigation a, .headline a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24956274-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
