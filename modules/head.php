

<meta charset="UTF-8">
<meta name="author" content="Jose Covarrubias">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LOAD THE LATEST JQUERY-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<!-- LINK TO THE CSS -->
<link href="/css/screen.css" rel="stylesheet">
<link href="/css/mobilemenu.css" rel="stylesheet">
<link href="/css/footerStyle.css" rel="stylesheet">
<link href="/css/phoneStyle.css" rel="stylesheet">



<!-- SCRIPT TO MAKE THE MOBILE NAV EXPAND DOWN -->
<script>
	$(document).ready(function(){
		$(".nav-button").click(function () {
		$(".nav-button,.primary-nav").toggleClass("open");
		});    
	});
</script>