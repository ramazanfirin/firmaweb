<title>www.upsviewer.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="Otobus Fihrsit.com"/>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />

<!--  <link rel="stylesheet" href="css/global.css">  -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
		 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52451845-5', 'auto');
  ga('send', 'pageview');

</script>
	
	<script>
	var preloadArr = new Array();
	 var i;
	 var currImg = 1;

	 
	$(document).ready(function() {
		//thebackground();	
		//$('div.background').fadeIn(1000); // works for all the browsers other than IE
		//$('div.background img').fadeIn(1000); // IE tweak

		var imgArr = new Array( // relative paths of images
		 'images/upsroom.jpg',
		 'images/upsroom2.jpg',
		 //'images/upsroom3.jpg',
		 //'images/upsroom4.jpg',
		 //'images/upsroom5.jpg',
		 'images/upsroom6.jpg'
				 );
		 
		 
		 
		 /* preload images */
		 for(i=0; i < imgArr.length; i++){
		 preloadArr[i] = new Image();
		 preloadArr[i].src = imgArr[i];
		 }
		 
		
		 var intID = setInterval(changeImg, 10000);
		 
		 


		});
		/* image rotator */
		 function changeImg(){
		 $('.main-box').animate({
			 opacity: 0.8
			 
		 }, 1000, function(){
		 	 $('.main-box').css("background-image","url('"+ preloadArr[currImg++%preloadArr.length].src+"')");
		 });
		 $('.main-box').animate({opacity: 1}, 1000);
		 
		 //alert(preloadArr[currImg++%preloadArr.length].src);// }).animate({opacity: 1}, 1000);
		 
		 
		 
		 }
		 	
	
	
	
	
	
	
	</script>
	