

<meta charset="UTF-8">
<meta name="author" content="Jose Covarrubias">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LOAD THE LATEST JQUERY-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<!-- LINK TO THE CSS -->
<link href="/css/screen.css" rel="stylesheet">
<link href="/css/mobilemenu.css" rel="stylesheet">

<!-- THIS STYLES THE FOOTER -->
<link href="/css/footerStyle.css" rel="stylesheet">

<!-- THIS STYLE THE SCREEN SIZE FOR THE PHONE AND DESKTOP -->
<link href="/css/phone.css" rel="stylesheet">
<link href="/css/tablet.css" rel="stylesheet">

<!-- CODE TO MAKE IE WORK WITH NEW MEDIA QUERIES-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- SCRIPT TO MAKE THE MOBILE NAV EXPAND DOWN -->
<script>
	$(document).ready(function(){
		$(".nav-button").click(function () {
		$(".nav-button,.primary-nav").toggleClass("open");
		});    
	});
</script>