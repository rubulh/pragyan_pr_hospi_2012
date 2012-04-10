<?php
require_once("setup/SET_iflogged.php");
$variflogged=SET_iflogged();
if(!$variflogged)
	{
	$referrer=$_SERVER['HTTP_REFERER'];
	$backagain=$FILESDIR."/login.php?go=$referrer";
   	header("Location:$backagain");
	exit(1);
	}
else
	{
	;;
	}

?>
