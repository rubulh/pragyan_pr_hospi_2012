<?php
  /*
getrooms.php retrives the details from the accomodation database and then echoed the details as json
   */
require_once("allglobals.php");
if($_SERVER['HTTP_REFERER']!="$FILESDIR"."/roomstatus.php")
  {
    header("Location:$ERRORREDIRECTION");
    exit(1);
  }
else
  {
    $finalreturnarray=array();
    $count=0;
    $roomnumber_query=mysql_query("SELECT DISTINCT ROOM FROM $ACCOMODATIONMYSQLTABLE");
    while(false!=($thisroomnumber=mysql_fetch_array($roomnumber_query)))
      {
	$thisroomnumberis=$thisroomnumber['ROOM'];
	$getdetails_room=mysql_query("SELECT * FROM $ACCOMODATIONMYSQLTABLE WHERE ROOM=$roomnumberis AND STAYING=1");
	$thisarr=array();
	$arrayentryforthisroom=array();
	$entriesforthisroom=0;
	while(false!=($oneentry=mysql_fetch_array($getdetails_room)))
	  {
	    $thisarr=array("HOSTELNAMES"=>$oneentry['HOSTELNAMES'],"ROOM"=>$oneentry['ROOM'],"NAME"=>$oneentry["NAME"],"EMAIL"=>$oneentry['EMAIL'],"CELL"=>$oneentry["CELL"],'CHECKOUT'=>$oneentry['CHECKOUT']);
	    $arrayentryforthisroom[$entriesforthisroom]=$thisarray;
	    $entriesforthisroom+=1;
	  }
	$finalreturnarray[$thisroomnumberis]=$arrayentryforthisroom;
      }
    $encodedjson=json_encode($finalreturnarray);
    echo $encodedjson;
    exit(1);
  }


?>
