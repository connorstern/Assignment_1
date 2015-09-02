<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photography</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style>
body#home #navhome, body#about #navabout, body#photography #navphotography, body#websites #navwebsites, body#contact #navcontact, body#resume #navresume {
	color:#941512;
}

* {margin: 0; padding: 0;}

#lightbox {
	float:left;
	width:83%;
	border-bottom: 1px solid #ccc;
	background-color:#222222;
	margin-left:1%;
	margin-top:1%;
	opacity:0.9;
}
#lightbox h1 {
	text-transform: uppercase;
	text-align: center;
	padding: 10px 0;
	margin: 20px 0;
	color: white;
	font-size: 24px;
	background: rgba(255, 255, 255, 0.1);
	border-left: 2px solid rgba(255, 255, 255, 0.65);
	border-right: 2px solid rgba(255, 255, 255, 0.65);
}
#lightbox ul {
	overflow: hidden;
}
/*Image styles*/
#lightbox ul li {
	float: left;
	padding: 10px;
	list-style-type: none;
	position: relative;
	cursor: pointer;
}
/*No right margin for images in the 2nd column*/
#lightbox ul li:nth-child(even) {
	margin-right: 0;
}
#lightbox ul li img {
	display: block;
}

/*Image titles*/
#lightbox .image_title {
	width: 320px; height: 220px;
	background: rgba(0, 0, 0, 0.5);
	position: absolute;
	top: 0; left: 0;
	display: table;
	/*Hover effect - default state*/
	opacity: 0;
	transition: all 0.5s;
}
#lightbox .title {
	color: #fff;
	background: rgba(0, 0, 0, 0.5);
	text-transform: uppercase;
	font-size: 14px;
	text-align: center;
	/*Vertical center align*/
	display: table-cell;
	vertical-align: middle;
	/*Hover effect - default state*/
	transform: scale(0.2);
	transition: all 0.25s;
}
/*Zoom icon over each title using iconfont and pseudo elements*/
#lightbox .title::before {
	font-family: websymbols;
	font-size: 24px;
	color: #fff;
	opacity: 0.5;
	display: block;
	line-height: 36px;
}
/*Hover states*/
#lightbox li:hover {
	box-shadow: inset 0 0 10px 15px rgba(255,255,255, 0.3);
}
#lightbox li:hover .image_title {
	opacity: 1;
}
#lightbox li:hover .title {
	transform: scale(1);
}

/*Lets change the iconfont to websymbols since entypo has some issues with rendering on windows*/
@font-face {
	font-family: websymbols;
	src: url("http://thecodeplayer.com/uploads/fonts/websymbols.eot");
	src: url('http://thecodeplayer.com/uploads/fonts/websymbols.eot?#iefix') format('embedded-opentype'),
     url('http://thecodeplayer.com/uploads/fonts/websymbols.woff') format('woff'),
     url('http://thecodeplayer.com/uploads/fonts/websymbols.ttf') format('truetype'),
	 url('http://thecodeplayer.com/uploads/fonts/websymbols.svg#WebSymbolsRegular') format('svg');
}



/*Lightbox element style*/
.lb_backdrop {
	background: rgba(0, 0, 0, 0.9);
	position: fixed;
	top: 0; left: 0; right: 0; bottom: 0;
}
/*The canvas contains the larger image*/
 .lb_canvas {
	background: white;
	width: 50px; height: 50px;
	position: fixed;
	top: 0; left: 0; /*Will be centered later by Jquery*/
	box-shadow: 0 0 20px 5px black;
	padding: 10px;
}

/*A separate class for loading GIF, for easy Jquery handling*/
.lb_canvas.loading {
	background: white url("http://thecodeplayer.com/uploads/media/loading.gif") center center no-repeat;
}
/*Lightbox Controls*/
.lb_controls {
	width: 400px; 
	background: rgba(0, 0, 0, 0.75);
	position: fixed;
	bottom: 10px;
	color: white;
	/*To horizontally center it*/
	left: 0; right: 0; margin: 0 auto; 
}
.lb_controls span {
	line-height: 30px;
	height: 30px;
}
.lb_controls span.inactive {
	opacity: 0.25;
}
.lb_previous, .lb_next {
	position: absolute;
	top: 0;
	padding: 5px 12px;
	font-family: websymbols;
	font-size: 14px;
	background: black;
	cursor: pointer;
}
.lb_previous {
	left: 0;
	border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.lb_next {
	right: 0;
	border-left: 1px solid rgba(255, 255, 255, 0.1);
}
.lb_title {
	text-align: center;
	display: block;
	font-size: 14px;
	text-transform: uppercase;
	padding: 5px 0;
	font-weight: bold;
}

#navigation {
		width:100%;
	height:100px;
	background-color:#222222;
	
	
}
#footer {
	width:100%;
	background-color:#222222;
	height:100px;
	
}
	
#logo {
	text-align:center;
		width:100%;
	background-color:#222222;
}
.navigation {
	margin-left:23%;
}
	

li {
	margin-top:5%;
	display:inline;
	padding-right:6%;
	font-size:1em;
	font-family:Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
}
a {
	color:#DDDDDD;
}
a:hover {
	color:#941512;
}

a:visited {
	#DDDDDD;
	
}
a{
	text-decoration:none;
}
h1 {
	font-size:1.3em;
	color:#941512;
	text-align:center;
}

h2 {
	font-size:1.3em;
	color:#DDDDDD;
	text-align:center;
}
h3{
	font-size:3em;
	color:#DDDDDD;
	text-align:center;
}
h4 {
	font-family:Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;;
	font-size:2em;
	color:#000000;
	text-align:center;
}
#content {
	width:100%;
	height:1000px;
	background-color:#941512;
}
.padding {
	padding-left:1%;
}
#sidenav {
	margin-top:7%;
	float:right;
	width:15%;
	height:500px;
	background-color:#FFFFFF;
	margin-right:.5%;
	opacity:0.8;
}
.title2 {
	margin-left:32%;
	height:50px;
	width:30%;
	border-bottom: 3px solid #000000;
}
#sidenavtitle {
	border-bottom: 3px solid #941512;
	width:80%;
	height:33px;
	margin-left:9.5%;
}
	






</style>
</head>

<body id="photography">
<div id="logo">
<img src="images/logo.png" alt="logo">
</div>
<div id="navigation">
<br>
<ul class="navigation">
<li><a id="navhome" href="index.php">Home</a></li>
<li><a id="navabout" href="about.php">About</a></li>
<li><a id="navphotography" href="photography.php">Photography</a></li>
<li><a id="navwebsites" href="websites.php">Websites</a></li>
<li><a id="navcontact" href="contact.php">Contact</a></li>
<li><a id="navresume" href="resume.php">Resume</a></li>
<li class="twitterbird"><a href="https://twitter.com/con_bul" target="_blank"><img src="images/social media/twitter bird.png" alt="twitterbird"></li>
<li class="facebook"><a href="https://www.facebook.com/connor.stern.54" target="_blank"><img src="images/social media/facebook logo.png" alt="facebook"></li>
<li class="instagram"><a href="https://instagram.com/connorstern/" target="_blank"><img src="images/social media/intsagram.png" alt="instagram"></li>
</ul>
</div>
</a>
</a>
</a>
<div id="content">
<div id="pictures">
<div id="lightbox">
<h3>Most Recent Pictures</h3>

	<ul>
    	<li>
			<img src="images/reservior/walking up.png" data-large="images/reservior/walking up large.png"/>
			<div class="image_title">
				<h5 class="title">Walking Up</h5>
			</div>
		</li>
		<li>
			<img src="images/reservior/looking down.png" data-large="images/reservior/looking down large.png"/>
			<div class="image_title">
				<h5 class="title">Looking Down</h5>
			</div>
		</li>
		<li>
			<img src="images/reservior/skipping rocks.png" data-large="images/reservior/skipping rocks large.png"/>
			<div class="image_title">
				<h5 class="title">Skipping Rocks</h5>
			</div>
		</li>
        <li>
			<img src="images/reservior/crew not ready.png" data-large="images/reservior/crew not ready large.png"/>
			<div class="image_title">
				<h5 class="title">Crew Unready</h5>
			</div>
		</li>
		<li>
			<img src="images/reservior/trees.png" data-large="images/reservior/trees large.png"/>
			<div class="image_title">
				<h5 class="title">Trees</h5>
			</div>
		</li>
		<li>
			<img src="images/reservior/creek.png" data-large="images/reservior/creek large.png"/>
			<div class="image_title">
				<h5 class="title">Creek</h5>
			</div>
		</li>
		<li>
			<img src="images/reservior/no swimming.png" data-large="images/reservior/no swimming large.png"/>
			<div class="image_title">
				<h5 class="title">No Swimming</h5>
			</div>
		</li>
        <li class="padding">
			<img src="images/reservior/tony by river2.png" data-large="images/reservior/tony by river2 large.png"/>
			<div class="image_title">
				<h5 class="title">Tony by River</h5>
			</div>
		</li>
         <li class="padding">
			<img src="images/reservior/dylon.png" data-large="images/reservior/dylon large.png"/>
			<div class="image_title">
				<h5 class="title">Dylon</h5>
			</div>
		</li>
        <li class="padding">
			<img src="images/reservior/tony by river.png" data-large="images/reservior/tony by river large.png"/>
			<div class="image_title">
				<h5 class="title">Tony by River</h5>
			</div>
		</li>
          <li class="padding">
			<img src="images/reservior/bailey and ashley.png" data-large="images/reservior/bailey and ashley large.png"/>
			<div class="image_title">
				<h5 class="title">Bailey and Ashley</h5>
			</div>
		</li>
           <li class="padding">
			<img src="images/reservior/kalysta ballet.png" data-large="images/reservior/kalysta ballet large.png"/>
			<div class="image_title">
				<h5 class="title">Kalysta Ballet</h5>
			</div>
		</li>
	</ul>
</div>
<div id="sidenav">
<div id="sidenavtitle">
<h4>Locations</h4>
</div>
<a href="Photography Pages/reservoir.php"><h1>Reservoir</h1></a>
<a href="Photography Pages/aquarium.php"><h1>Aquaruim</h1></a>
</div>



<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	var item, img, title, large_img;
	var CW, CH, CL, CT, hpadding, vpadding, imgtag;
	//Flag for preventing multiple image displays
	var lb_loading = false;
	var doc = $(document);
	
	$("#lightbox li").click(function(){
		if(lb_loading) return false;
		lb_loading= true;
		
		item = $(this);
		img = item.find("img");
		title = item.find(".title").html();
		
		//Remove active class from previously clicked LI
		$("#lightbox li.active").removeClass("active");
		//Mark the clicked LI as active for later use
		item.addClass("active");
		
		//The large image
		large_img = new Image();
		//Use data-large or the src itself if large image url is not available
		large_img.src = img.attr("data-large") ? img.attr("data-large") : img.attr("src");
		
		//Adding additional HTML - only if it hasn't been added before
		if($(".lb_backdrop").length < 1)
		{
			var lb_backdrop = '<div class="lb_backdrop"></div>';
			var lb_canvas = '<div class="lb_canvas"></div>';
			var lb_previous = '<span class="lb_previous"><</span>';
			var lb_title = '<span class="lb_title"></span>';
			var lb_next = '<span class="lb_next">></span>';
			var lb_controls = '<div class="lb_controls">'+lb_previous+lb_title+lb_next+'</div>';
			var total_html = lb_backdrop+lb_canvas+lb_controls;
			
			$(total_html).appendTo("body");
		}
		//Fade in lightbox elements if they are hidden due to a previous exit
		if($(".lb_backdrop:visible").length == 0)
		{
			$(".lb_backdrop, .lb_canvas, .lb_controls").fadeIn("slow");
		}
		
		//Display preloader till the large image loads and make the previous image translucent so that the loader in the BG is visible
		if(!large_img.complete) 
			$(".lb_canvas").addClass("loading").children().css("opacity", "0.5")
		
		//Disabling left/right controls on first/last items
		if(item.prev().length == 0)
			$(".lb_previous").addClass("inactive");
		else
			$(".lb_previous").removeClass("inactive");
		if(item.next().length == 0)
			$(".lb_next").addClass("inactive");
		else
			$(".lb_next").removeClass("inactive");
		
		//Centering .lb_canvas
		CW = $(".lb_canvas").outerWidth();
		CH = $(".lb_canvas").outerHeight();
		//top and left coordinates
		CL = ($(window).width() - CW)/2;
		CT = ($(window).height() - CH)/2;
		$(".lb_canvas").css({top: CT, left: CL});
		
		//Inserting the large image into .lb_canvas once it's loaded
		$(large_img).load(function(){
			//Recentering .lb_canvas with new dimensions
			CW = large_img.width;
			CH = large_img.height;
			//.lb_canvas padding to be added to image width/height to get the total dimensions
			hpadding = parseInt($(".lb_canvas").css("paddingLeft")) + parseInt($(".lb_canvas").css("paddingRight"));
			vpadding = parseInt($(".lb_canvas").css("paddingTop")) + parseInt($(".lb_canvas").css("paddingBottom"));
			CL = ($(window).width() - CW - hpadding)/2;
			CT = ($(window).height() - CH - vpadding)/2;
			
			//Animating .lb_canvas to new dimentions and position
			$(".lb_canvas").html("").animate({width: CW, height: CH, top: CT, left: CL}, 500, function(){
				//Inserting the image but keeping it hidden
				imgtag = '<img src="'+large_img.src+'" style="opacity: 0;" />';
				$(".lb_canvas").html(imgtag);
				$(".lb_canvas img").fadeTo("slow", 1);
				//Displaying the image title
				$(".lb_title").html(title);
				
				lb_loading= false;
				$(".lb_canvas").removeClass("loading");
			})
		})
	})
	
	//Click based navigation
	doc.on("click", ".lb_previous", function(){ navigate(-1) });
	doc.on("click", ".lb_next", function(){ navigate(1) });
	doc.on("click", ".lb_backdrop", function(){ navigate(0) });
	
	//Keyboard based navigation
	doc.keyup(function(e){
		//Keyboard navigation should work only if lightbox is active which means backdrop is visible.
		if($(".lb_backdrop:visible").length == 1)
		{
			//Left
			if(e.keyCode == "37") navigate(-1);
			//Right
			else if(e.keyCode == "39") navigate(1);
			//Esc
			else if(e.keyCode == "27") navigate(0);
		}
	});
	
	//Navigation function
	function navigate(direction)
	{
		if(direction == -1) // left
			$("#lightbox li.active").prev().trigger("click");
		else if(direction == 1) //right
			$("#lightbox li.active").next().trigger("click");
		else if(direction == 0) //exit
		{
			$("#lightbox li.active").removeClass("active");
			$(".lb_canvas").removeClass("loading");
			//Fade out the lightbox elements
			$(".lb_backdrop, .lb_canvas, .lb_controls").fadeOut("slow", function(){
				//empty canvas and title
				$(".lb_canvas, .lb_title").html("");
			})
			lb_loading= false;
		}
	}
})







</script>


</div>
</div>
<div id="footer">
<br>
<h2>2015 Site designed by Webmaster Connor</h2>
</div>
</body>
</html>