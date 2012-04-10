<?php
//alglobals.php


//dont edit this part unles u know what you are doing
$DIRECTORY=dirname(dirname($_SERVER['SCRIPT_FILENAME']));
$THEACTUALDOCUMENTROOT=$_SERVER['DOCUMENT_ROOT'];
$THEHTTPHOST="http://".$_SERVER['HTTP_HOST'];
/*
//correct this part later the preg match is not working;;
var_dump("/^".\$THEACTUALDOCUMENTROOT."$/",$THEHTTPHOST,$DIRECTORY);
$MAINPATH=preg_replace("/^\$THEACTUALDOCUMENTROOT$/",$THEHTTPHOST,$DIRECTORY);

*/
//i hard code $MAINPATH for now remove this later
$MAINPATH="http://localhost/pragyan";
$IMAGEDIR=$MAINPATH."/images";
$JQUERYDIR=$MAINPATH."/jquery";
$FILESDIR=$MAINPATH."/files";
$CSSESDIR=$MAINPATH."/csses";
$CONFIGURATION=$FILESDIR."/configuration";

?>
