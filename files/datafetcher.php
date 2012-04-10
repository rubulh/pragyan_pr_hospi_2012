<?php
header("Cache-Control:no-cache,must-revalidate");
header("Expires:Sat,20 Jul 2007,01:11:11 GMT");
$finallyreturned=array();
  //hardcoding for now
  //remove this later
mysql_connect('localhost','rubulh','thisisapassword');
mysql_select_db('ants');

//this is to be retained
$returnarray=array();
$hostelname=$_POST['HOSTELNAME'];
//$hostelname='hostel1';
$the_query="select * from hostelnames where hostelname='$hostelname' ORDER BY room_no";
$fetch_all=mysql_query("$the_query");
while(false!=($theresults=mysql_fetch_array($fetch_all)))
  {
  	//print_r($theresults);
  	//echo "\n\n\n";
  	  $thecomplete_fetched_string=$theresults['thestring'];
  	  //var_dump($thecomplete_fetched_string);
  	  //echo "{}{}{}{}{}}{}";
    $thestaying=explode('<<>>',$thecomplete_fetched_string);
    for($g=0;;$g++)
    {
    	if($thestaying[$g]=="")
    	{
    	unset($thestaying[$g]);
    	break;
    	}
    }
    //var_dump($thestaying);
    
  	  	$returnarray=array('roomno'=>$theresults['room_no'],'maxcapacity'=>$theresults['maxcapacity'],'occupied'=>$theresults['occupied'],'vacancy'=>$theresults['vacancy'],'people'=>$thestaying);
  	  	$finallyreturned[$theresults['room_no']]=$returnarray;
   	
   }
  
 //print_r($returnarray);
$encodehere=json_encode($finallyreturned);
echo $encodehere;
//var_dump($encodehere)
?>