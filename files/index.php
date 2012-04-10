<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Landscapes 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111001

-->
<?php
require_once("allglobals.php");

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Landscape  by Free CSS Templates</title>
<!--<link href="<?=$CSSESDIR.'/style1.css'?>" rel="stylesheet" type="text/css" media="screen" />-->
<style type="text/css">

/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License
*/

body {
	margin: 0;
	padding: 0;
	background: #151515 url("<?php echo $IMAGEDIR.'/img01.jpg';?>") repeat-x left top;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}

h1, h2, h3 {
	margin: 0;
	padding: 0;
	font-weight: normal;
}

h1 {
	font-size: 2em;
}

h2 {
	margin: 0px;
	padding: 0px 0px 20px 0px;
	letter-spacing: -2px;
	font-size: 2.8em;
	color: #FFFFFF;
}

h3 {
	font-size: 1.6em;
}

p, ul, ol {
	margin-top: 0;
	line-height: 200%;
}

p, ol {
}

ul, ol {
}

a {
	color: #333333;
}

a:hover {
}

#wrapper {
	background: url("<?php echo $IMAGEDIR.'/img02.jpg';?>") no-repeat center 115px;
}

.container {
	width: 1000px;
	margin: 0px auto;
}

/* Header */

#header {
	width: 800px;
	height: 100px;
	margin: 0 auto;
	padding: 0px;
}

/* Logo */

#logo {
	margin: 0;
	padding: 0;
}

#logo h1, #logo p {
}

#logo h1 {
	padding: 45px 0px 0px 0px;
	letter-spacing: -2px;
	text-align: center;
	text-transform: uppercase;
	font-size: 5em;
}

#logo h1 a {
	color: #FFFFFF;
}

#logo p {
	margin: 0;
	padding: 0px 0 0 0px;
	letter-spacing: -1px;
	font: normal 18px Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #8E8E8E;
}

#logo p a {
	color: #8E8E8E;
}

#logo a {
	border: none;
	background: none;
	text-decoration: none;
	color: #000000;
}

/* Splash */

#splash {
	width: 800px;
	height: 250px;
	margin: 0px auto;
}

/* Search */

#search {
	float: right;
	width: 280px;
	height: 60px;
	padding: 20px 0px 0px 0px;
}

#search form {
	height: 41px;
	margin: 0;
	padding: 10px 0 0 20px;
}

#search fieldset {
	margin: 0;
	padding: 0;
	border: none;
}

#search-text {
	width: 170px;
	padding: 6px 5px 2px 5px;
	border: 1px solid #E7EBED;
	background: #FFFFFF;
	text-transform: lowercase;
	font: normal 11px Arial, Helvetica, sans-serif;
	color: #5D781D;
}

#search-submit {
	width: 50px;
	height: 22px;
	border: none;
	background: #B9B9B9;
	color: #000000;
}

/* Menu */

#menu {
	width: 800px;
	height: 50px;
	margin: 0 auto;
	padding: 0px;
	background: #000000 url("<?php echo $IMAGEDIR.'/img09.jpg';?>") no-repeat left top;
}

#menu ul {
	margin: 0;
	padding: 0px 0px 0px 0px;
	list-style: none;
	line-height: normal;
	text-align: center;
}

#menu li {
	display: inline-block;
	padding: 15px 30px 0px 30px;
}

#menu a {
	display: block;
	height: 20px;
	margin: 0px;
	padding: 0px;
	letter-spacing: -1px;
	text-decoration: none;
	text-align: center;
	text-transform: uppercase;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
        border: none;
}

#menu a:hover, #menu .current_page_item a {
	text-decoration: none;
}

#menu .current_page_item a {
}

/* Background */

#bg1 {
	background: url("<?php echo $IMAGEDIR.'/img06.jpg';?>") repeat-y left top;
}

#bg2 {
	background: url("<?php echo $IMAGEDIR.'/img05.jpg';?>") no-repeat left top;
}

#bg3 {
	overflow: hidden;
	padding: 50px;
	background: url("<?php echo $IMAGEDIR.'/img07.jpg';?>") no-repeat left bottom;
}

/* Page */

#page {
	overflow: hidden;
	width: 780px;
	margin: 0px auto;
	padding: 40px 10px 20px 10px;
	background: #000000;
}

#content {
	float: right;
	width: 530px;
}

#sidebar {
	float: left;
	width: 270px;
}

#poptrox {
	width: 780px;
	margin: 0px auto;
	background: #000000;
}

#gallery {
	overflow: hidden;
	margin: 0px 0px 0px 0px;
	padding: 0px;
	list-style: none;
}

#gallery li {
	float: left;
	margin: 0px;
	padding: 5px 10px;
}

#gallery img {
	opacity: 0.4;
	filter: alpha(opacity=40);
}

#gallery a:hover img {
	opacity: 1;
	filter: alpha(opacity=100);
}

/*****************************************************
  Poptrox
*****************************************************/

.poptrox_popup {
	position: relative;
	padding: 1em 1em 3em 1em;
	background: #ffffff;
	color: #333333;
}

.poptrox_popup .loader {
	display: block;
	margin: 55px 0 0 0;
	text-indent: -9999em;
	background: url("<?php echo $IMAGEDIR.'/loader.gif';?>") top center no-repeat;
}

.poptrox_popup .caption {
	position: absolute;
	bottom: 1em;
	left: 1em;
}

.poptrox_popup .closer {
	position: absolute;
	bottom: 1em;
	right: 1em;
}

#footer {
	overflow: hidden;
	width: 800px;
	height: 50px;
	margin: 0px auto 40px auto;
	background: #022D59;
}

#footer p {
	margin: 0px;
	padding: 15px 0px 0px 0px;
	text-align: center;
	text-transform: uppercase;
	font-size: 10px;
	color: #409FFF;
}

#footer a {
	color: #409FFF;
	text-decoration: none;
}

#box1 {
	margin: 0px 10px 20px 10px;
	padding: 20px;
	background: #0A0A0A;
	color: #8F8F8F;
}

</style>
<script type="text/javascript" src="<?php echo $JQUERYDIR.'/jquery-1.6.2.min.js';?>"></script>
<script type="text/javascript" src="<?php echo $JQUERYDIR.'/jquery.poptrox-0.1.js';?>"></script>
</head>
<body>
<div id="header" class="container">
	<div id="logo">
    <h1><a href="#">PRAGYAN PR-HOSPI <?php echo date('Y');?> </a></h1>
	</div>
</div>
<div id="menu">
	<ul>
		<li class="current_page_item"><a href="#">Homepage</a></li>
		<li><a href="#">CHECK-IN</a></li>
		<li><a href="#">ROOM-STATUS</a></li>
		<li><a href="#">CHECK-OUT</a></li>
		<li><a href="#">LOGIN</a></li>
	</ul>
</div>
<!-- end #header -->
<div id="splash"><img src="<?php echo$IMAGEDIR.'/img02.jpg';?>" width="800" height="250" alt="" /></div>
<div id="page">
	<div id="box1">
		<p> This is <strong>Landscapes</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The slideshow uses photos from <a href="http://www.pdphoto.org/">PDPhoto.org</a> and is powered by Poptrox (a jQuery plugin by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a>). This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions</a>license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
	</div>
	<div id="poptrox">
		<!-- start -->
		<ul id="gallery">
			<li><a href="<?php echo $IMAGEDIR.'/img03_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img03.jpg';?>" width="240" height="92" alt="" title="Fusce ultrices fringilla metus" /></a></li>
			<li><a href="<?php echo $IMAGEDIR.'/img04_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img04.jpg';?>" width="240" height="92" alt="" title="Praesent scelerisque scelerisque erat" /></a></li>
			<li><a href="<?php echo $IMAGEDIR.'/img05_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img05.jpg';?>" width="240" height="92" alt="" title="Integer sit amet pede vel arcu aliquet pretium" /></a></li>
			<li><a href="<?php echo $IMAGEDIR.'/img06_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img06.jpg';?>" width="240" height="92" alt="" title="Phasellus nec erat sit amet nibh pellentesque congue" /></a></li>
			<li><a href="<?php echo $IMAGEDIR.'/img07_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img07.jpg';?>" width="240" height="92" alt="" title="Pellentesque quis elit non lectus gravida blandit" /></a></li>
			<li><a href="<?php echo $IMAGEDIR.'/img08_big.jpg';?>"><img src="<?php echo $IMAGEDIR.'/img08.jpg';?>" width="240" height="92" alt="" title="Cras vitae metus aliquam risus pellentesque pharetra" /></a></li>
		</ul>
		<br class="clear" />
		<script type="text/javascript">
		$('#gallery').poptrox();
		</script>
		<!-- end -->
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>