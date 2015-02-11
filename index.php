<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3D Text</title>

<meta name="author" content="Alexander Käßner" />
<meta name="keywords" content="Alexander, Alexander Käßner, Käßner, alexkaessner, 3d, css, css3, 3d css, 3d text" />
<meta name="description" content="Share some kind words with friends wirtten with nice 3D text." />
<meta http-equiv="content-language" content="EN" />
<meta name="robots" content="index" />
<meta name="revisit-after" content="1 days" />
<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" href="favicons/ipad-retina.png" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link href="main.css" rel="stylesheet" type="text/css"/>
<link href="buttons.css" rel="stylesheet" type="text/css"/>

<script src="javascripts/prototype.js" type="text/javascript"></script>
<script src="javascripts/scriptaculous.js" type="text/javascript"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37407044-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<style type="text/css">
#tweetbutton{
	position:absolute;
	bottom:10px;
	left:10px;
}

#likebutton{
	position:absolute;
	bottom:10px;
	left:76px;
}

#sharearea{
	position: absolute;
	left: 10px;
	bottom: 50px;
	width: 250px;
	height: 100px;
}

#sharepopover{
	position: absolute;
	left: 0px;
	bottom: 0px;
	width: 250px;
	height: 100px;
}

#infoarea{
	position: absolute;
	right: 10px;
	bottom: 50px;
	width: 200px;
	height: 65px;
}

#infopopover{
	position: absolute;
	left: 0px;
	bottom: 0px;
	width: 200px;
	height: 65px;
}

.popover{
	background: transparent;
	background-color: #333333;
	background-image: -webkit-gradient(linear, left top, left bottom, from(hsl(0, 0%, 30%)), to(hsl(0, 0%, 20%)));
	background-image: -webkit-linear-gradient(top, hsl(0, 0%, 30%), hsl(0, 0%, 20%));
	background-image: -moz-linear-gradient(top, hsl(0, 0%, 30%), hsl(0, 0%, 20%));
	background-image: -o-linear-gradient(top, hsl(0, 0%, 30%), hsl(0, 0%, 20%));
	background-image: -ms-linear-gradient(top, hsl(0, 0%, 30%), hsl(0, 0%, 20%));
	background-image: linear-gradient(top, hsl(0, 0%, 30%), hsl(0, 0%, 20%));
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#4d4d4d', EndColorStr='#333333');
	
	border: 1px solid hsla(0.0, 0.0%, 0.0%, 1.00);
	-moz-border-radius: 5px; /* FF1-3.6 */
	-webkit-border-radius: 5px; /* Saf3-4, iOS 1-3.2, Android <1.6 */
	border-radius: 5px 5px 5px 5px; /* Opera 10.5, IE9, Saf5, Chrome, FF4, iOS 4, Android 2.1+ */
	
	box-shadow:0px 1px 2px hsla(0.0, 0.0%, 0.0%, 0.5),inset 0px 1px 0px hsla(0.0, 0.0%, 100.0%, 0.20);
}

#shareheader{
	color: hsla(0.0, 0.0%, 100%, 1.00);
	font-family: "Helvetica","Verdana","Arial","sans-serif";
	font-size: 13px;
	text-align: left;
	font-weight: normal;
	text-shadow: 0px 1px 0px hsla(0.0, 0.0%, 0.0%, 1.00);
	padding: 10px;
}

.textfield{
	width: 226px;
	height: 20px;
	margin: 0px 10px;
	
	
	background-color: #1a1a1a;
	background-image: -webkit-gradient(linear, left top, left bottom, from(hsl(0, 0%, 10%)), to(hsl(0, 0%, 20%)));
	background-image: -webkit-linear-gradient(top, hsl(0, 0%, 10%), hsl(0, 0%, 20%));
	background-image: -moz-linear-gradient(top, hsl(0, 0%, 10%), hsl(0, 0%, 20%));
	background-image: -o-linear-gradient(top, hsl(0, 0%, 10%), hsl(0, 0%, 20%));
	background-image: -ms-linear-gradient(top, hsl(0, 0%, 10%), hsl(0, 0%, 20%));
	background-image: linear-gradient(top, hsl(0, 0%, 10%), hsl(0, 0%, 20%));
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#1a1a1a', EndColorStr='#333333');

	border:1px solid black;
	-moz-border-radius: 2px; /* FF1-3.6 */
	-webkit-border-radius: 2px; /* Saf3-4, iOS 1-3.2, Android <1.6 */
	border-radius: 2px 2px 2px 2px; /* Opera 10.5, IE9, Saf5, Chrome, FF4, iOS 4, Android 2.1+ */
	
	font-family:  "Helvetica","Verdana","Arial","sans-serif";
	text-shadow: 0px 1px 0px black;
	color:#808080;
	
	box-shadow:0px 1px 1px hsla(0.0, 0.0%, 100.0%, 0.1),inset 0px 1px 2px hsla(0.0, 0.0%, 0.0%, 0.50);
}

.textfield:focus{
	outline:none;
}

#infoheader{
	color: hsla(0.0, 0.0%, 100%, 1.00);
	font-family: "Helvetica","Verdana","Arial","sans-serif";
	font-size: 13px;
	text-align: center;
	text-shadow: 0px 1px 0px hsla(0.0, 0.0%, 0.0%, 1.00);
	padding: 10px;
}

a{
	color: hsla(0.0, 0.0%, 100%, 1.00);
	font-family: "Helvetica","Verdana","Arial","sans-serif";
	font-size: 13px;
	text-align: center;
	text-shadow: 0px 1px 0px hsla(0.0, 0.0%, 0.0%, 1.00);
	padding: 10px;
}

</style>

<script type="text/javascript">

function displayPopover (popover)
{
	if (popover == 'sharepopover'){
		if (document.getElementById(popover).style.display == 'none'){
		Effect.Grow(popover, {direction: 'bottom-left', duration: 0.3}); return false;
		} else {
			Effect.Shrink(popover, {direction: 'bottom-left', duration: 0.3}); return false;
		}
	}
	
	if (popover == 'infopopover'){
		if (document.getElementById(popover).style.display == 'none'){
		Effect.Grow(popover, {direction: 'bottom-right', duration: 0.3}); return false;
		} else {
			Effect.Shrink(popover, {direction: 'bottom-right', duration: 0.3}); return false;
		}
	}
}

function updateShareLink ()
{
	if (document.getElementById('textarea').value == ""){
		var linkurl="http://3d.alexkaessner.de/?text=I%20like%20this!";
	}else{
		var linkurl="http://3d.alexkaessner.de/?text="+encodeURIComponent(document.getElementById('textarea').value);
	}
	document.getElementById('linkTextfield').value = linkurl;
}
</script>
</head>

<body>
	<textarea id="textarea" class="text" style="display:block;" onkeyup="updateShareLink();"><?php echo ($_GET["text"]); ?></textarea>
    <input id="textfield" maxlength="auto" class="text" type="text" value="☁" style="display:none;" />
    
    
    <!-- ++++++++++++++++++++ BOTTOM BAR ++++++++++++++++++++ -->
    <div id="bottombar">
    	<div id="boxshadow"></div>
    	
    	<div id="sharebutton" class="blackButton" onclick="displayPopover('sharepopover'); updateShareLink ();">Share</div>
    	<div id="sharearea">
	    	<div id="sharepopover" class="popover" style="display: none;">
	    		<div id="shareheader">Share this Link:</div>
	    		<input id="linkTextfield" class="textfield" name="link" type="text" value="http://3d.alexkaessner.de/?text=Welcome!" onclick="this.select();"/>
	        	<div id="tweetbutton"><?php include('twitter.php') ?></div>
	        	<div id="likebutton"><?php include('facebook.php') ?></div>
	    	</div>
    	</div>
        
        <div id="copyright" onclick="displayPopover('infopopover');">©2013 Alexander Käßner</div>
        
        <div class="infoButton" onclick="displayPopover('infopopover');">i</div>
        <div id="infoarea">
	    	<div id="infopopover" class="popover" style="display: none;">
	    		<div id="infoheader"><b>Made by Alexander Käßner</b><br/><br/><a href="http://www.alexkaessner.de/"><u>visit my website!</u></a></div>
	    	</div>
    	</div>
        <div id="version">v 1.0</div>
    </div>
</body>
</html>
