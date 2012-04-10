<?php
  /*
file to get the hostel names unique
   */
require_once("allglobals.php");
if($_SERVER['HTTP_REFERER']!="$FILESDIR"."/roomstatus.php")
  {
    header("Location:$ERRORREDIRECTION");
    exit(1);
  }
else
  {
    $theechoarray=array("haha","gogo","ggdgd","ttt");
    $echoarraycount=0;
    /*
    $allhostel_query=mysql_query("SELECT DISTINCT HOSTELNAMES FROM $ACCOMODATIONMYSQLTABLE");;
    if(false!=($oneentry=mysql_fetch_array($allhostel_query)))
      {
	$theechoarray[$echoarraycount]=$oneentry;
	$echoarraycount+=1;
      }
    */
    $encodedjson=json_encode($theechoarray);
    echo $encodedjson;
    exit(1);
  }
?>