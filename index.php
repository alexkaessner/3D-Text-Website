<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3D Text</title>
<style type="text/css">
html{
	width:100%;
	height:100%;	
	background-color: #ebebeb;
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(235, 235, 235)), to(rgb(203, 203, 203)));
	background-image: -webkit-linear-gradient(top, rgb(235, 235, 235), rgb(203, 203, 203));
	background-image: -moz-linear-gradient(top, rgb(235, 235, 235), rgb(203, 203, 203));
	background-image: -o-linear-gradient(top, rgb(235, 235, 235), rgb(203, 203, 203));
	background-image: -ms-linear-gradient(top, rgb(235, 235, 235), rgb(203, 203, 203));
	background-image: linear-gradient(top, rgb(235, 235, 235), rgb(203, 203, 203));
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#ebebeb', EndColorStr='#cbcbcb');
}

body{
	position:absolute;
	left:0px;
	bottom:0px;
	width:100%;
	height:100%;
	
	margin-top:0px;
	margin-left:0px;
	margin-right:0px;
	margin-bottom:0px;
}

#textarea{
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background-color:transparent;
	outline:none;
	border:none;
	
	vertical-align: middle;
	
	padding-top:0px;
	padding-left:0px;
	padding-right:0px;
	padding-bottom:0px;
}

#textfield{
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	background-color:transparent;
	outline:none;
	border:none;
	
	padding-top:0px;
	padding-left:0px;
	padding-right:0px;
	padding-bottom:0px;
}

.text{
	font-family:Helvetica, Arial, sans-serif;
	font-size:150px;
	font-style:normal;
	font-weight:900;
	text-align:center;
	padding-top:auto;
	padding-bottom:auto;
	
	color:hsl(0,0%,98%);
	text-shadow:hsl(0,0%,88%) 0px 1px 0px, hsl(0,0%,86%) 0px 2px 0px, hsl(0,0%,84%) 0px 3px 0px, hsl(0,0%,82%) 0px 4px 0px, hsl(0,0%,80%) 0px 5px 0px, hsl(0,0%,78%) 0px 6px 0px, hsl(0,0%,76%) 0px 7px 0px, hsl(0,0%,74%) 0px 8px 0px, hsl(0,0%,72%) 0px 9px 0px, hsla(0,0%,0%,0.15) 0px 9px 1px, hsla(0,0%,0%,0.15) 1px 9px 1px, hsla(0,0%,0%,0.14) 1px 10px 2px, hsla(0,0%,0%,0.13) 2px 11px 2px, hsla(0,0%,0%,0.12) 3px 12px 2px, hsla(0,0%,0%,0.11) 4px 13px 2px, hsla(0,0%,0%,0.1) 5px 14px 2px, hsla(0,0%,0%,0.2) 7px 16px 3px, hsla(0,0%,0%,0.2) 10px 18px 10px;
}

#bottombar{
	position:absolute;
	bottom:-40px;
	left:0px;
	width:100%;
	height:40px;
	
	background-color: #212121;
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(33, 33, 33)), to(rgb(81, 81, 81)));
	background-image: -webkit-linear-gradient(top, rgb(33, 33, 33), rgb(81, 81, 81));
	background-image: -moz-linear-gradient(top, rgb(33, 33, 33), rgb(81, 81, 81));
	background-image: -o-linear-gradient(top, rgb(33, 33, 33), rgb(81, 81, 81));
	background-image: -ms-linear-gradient(top, rgb(33, 33, 33), rgb(81, 81, 81));
	background-image: linear-gradient(top, rgb(33, 33, 33), rgb(81, 81, 81));
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#212121', EndColorStr='#515151');
}

#boxshadow{
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:4px;
	
	/*background-color: #000000;*/
	background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.50)), to(rgba(0, 0, 0, 0.00)));
	background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.00));
	background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.00));
	background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.00));
	background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.00));
	background-image: linear-gradient(top, rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.00));
	filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#000000', EndColorStr='#000000');
}

#version{
	font-family:Helvetica, Arial, sans-serif;
	font-size:16px;
	font-style:normal;
	font-weight:900;
	text-align:right;
	position:absolute;
	top:12px;
	right:12px;
	
	color:hsl(0,0%,60%);
	text-shadow:hsl(0,0%,0%) 0px 1px 2px;
}

#tweetbutton{
	position:absolute;
	top:10px;
	left:10px;
}

#likebutton{
	position:absolute;
	top:10px;
	left:76px;
}
</style>
</head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<textarea id="textarea" class="text" style="display:block;"><?php
			echo ($_GET["text"]);
    	?></textarea>
    <input id="textfield" maxlength="auto" class="text" type="text" value="☁" style="display:none;" />
    <div id="bottombar">
    	<div id="boxshadow"></div>
        <div id="version">v 0.1</div>
        <div id="tweetbutton">
        	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://css3.alexkaessner.de/3dtext/index.php?text=CSS3%20is%20Fun!" data-related="alexkaessner" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
        <div id="likebutton">
        	<div class="fb-like" data-href="http://css3.alexkaessner.de/3dtext/index.php?text=CSS3%20is%20Fun!" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="like" data-colorscheme="dark" data-font="lucida grande"></div>
        </div>
    </div>
</body>
</html>
