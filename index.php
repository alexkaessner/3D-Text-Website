<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3D Text</title>

<meta name="author" content="Alexander Käßner" />
<meta name="keywords" content="3d, css, css3, 3d css, 3d text, css experiment" />
<meta name="description" content="Share some kind words with friends wirtten with nice 3D text." />
<meta http-equiv="content-language" content="EN" />
<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" href="favicons/apple-touch-icon.png" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link href="main.css" rel="stylesheet" type="text/css"/>
<link href="buttons.css" rel="stylesheet" type="text/css"/>

<script src="javascripts/prototype.js" type="text/javascript"></script>
<script src="javascripts/scriptaculous.js" type="text/javascript"></script>

<script type="text/javascript">

function showIntro ()
{
	if (document.getElementById('textarea').value == ''){
		Effect.Appear('intro', { duration: 0.3 }); return false;
	}
}

function hideIntro ()
{
	Effect.Fade('intro', { duration: 0.3 }); return false;
}

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

<body onload="showIntro();">
	<!-- ++++++++++++++++++ MAIN TEXT AREA ++++++++++++++++++ -->
	<div id="intro" class="popover" style="opacity: 0;" onklick="hideIntro();">
		<div id="introText"><b>Welcome!</b></br></br>This website allows you to type text with a fancy 3D look. <i>Just klick on this huge grey area and start typing.</i></br></br>If you want to share your text scroll down and press "Share".</br></br>Have Fun!</div>
	</div>

  <!-- ++++++++++++++++++ MAIN TEXT AREA ++++++++++++++++++ -->
	<textarea id="textarea" class="text" style="display:block;" onkeyup="updateShareLink();" onfocus="hideIntro();"><?php echo ($_GET["text"]); ?></textarea>

  <!-- ++++++++++++++++++++ BOTTOM BAR ++++++++++++++++++++ -->
  <div id="bottombar">
  	<div id="boxshadow"></div>

    <!-- Share -->
  	<div id="sharebutton" class="blackButton" onclick="displayPopover('sharepopover'); updateShareLink ();">Share</div>
    <div id="sharearea">
	   	<div id="sharepopover" class="popover" style="display: none;">
	   		<div id="shareheader">Share this Link:</div>
    		<input id="linkTextfield" class="textfield" name="link" type="text" value="http://3d.alexkaessner.de/?text=Welcome!" onclick="this.select();"/>
	   	</div>
  	</div>

    <div id="copyright" onclick="displayPopover('infopopover');">© 2013 Alexander Käßner</div>

    <!-- Info -->
    <div class="infoButton" onclick="displayPopover('infopopover');">i</div>
    <div id="infoarea">
    	<div id="infopopover" class="popover" style="display: none;">
    		<div id="infoheader"><b>Made by <a href="http://www.alexkaessner.de/">Alexander Käßner</a></b><br/><br/><a href="https://github.com/alexkaessner/3D-Text-Website"><u>Fork this on Github!</u></a></div>
    	</div>
  	</div>
    <div id="version">v 1.1</div>
  </div>
</body>
</html>
