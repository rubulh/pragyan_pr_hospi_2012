<?php
header("Cache-Control:no-cache,must-revalidate");
header("Expires:Sat,20 Jul 2007,01:11:11 GMT");
require_once("allconfglobals.php");
?>
<html>
<head>
<style type="text/css">
div{border-color: red;
   border-style: solid;
	}
#header{
	width: 99%;
	height: 10%;
	}
#complete{
	width: 99%;
	height: 80%;
	}
#footer{
	width: 99%;
	height: 7%;
	}
#edit{
	width: 99%;
	height: 20%;
	}
#main{
	width: 99%;
	height: 79%;
	}
#layout{
	width: 65%;
	height: 99%;
	float: left;
	}
#hostelname{
	width: 99%;
	height: 10%;
	float: left;

	}
#hostelayout{
	width: 99%;
	height: 89%;
	float: left;
	}
#details{
	width: 33%;
	height: 99%;
	float: left;
	}
#all{
	width: 99%;
	height: 60%;
	float: left;
	}
#submit{
	width: 99%;
	height: 39%%;
	float: left;
	}
#hostelnames{
	width:190px;
	letter-spacing: 7px;
	height: 30px;
	}
</style>
<script type="text/javascript" src="http://localhost/jquery.tools.min.js">
</script>
</head>
<body>
<div id="header">

</div>
<div id="complete">
<div id="edit">
</div>
<div id="main">
<div id="layout">
<div id="hostelname">
<select value='hostel name' name="hostel" id="hostelnames">
<option value="hostel1">
hostel1
</option>
<option value="hostel2">
hostel2
</option>
<option value="hostel3">
hostel3
</option>
<option value="hostel4">
hostel4
</option>
</select>
</div>
<div id="hostelayout">
</div>
</div>
<div id="details">
<div id="all">

</div>

<div id="submit">
</div>
</div>
</div>
</div>
<div id="footer">
<input type="hidden" id="roominhostel1" name="roominhostel1" value="<?php echo $roominhostel1?>">
<input type="hidden" id="roominhostel2" name="roominhostel2" value="<?php echo $roominhostel2?>">
<input type="hidden" id="roominhostel3" name="roominhostel3" value="<?php echo $roominhostel3?>">
<input type="hidden" id="roominhostel4" name="roominhostel3" value="<?php echo $roominhostel4?>">
</div>
<script type="text/javascript" >
var the_json_thing="";
function setlayout_parameters()
{
var currenthosteltotalrooms=0;
$(".hostelayoutroom").css({"width":"45px","height":"45px",'float':'left'});
var currenthostel=$("#hostelnames").val();
if(currenthostel=='hostel1'){currenthosteltotalrooms=$("#roominhostel1").val();}	
if(currenthostel=='hostel2'){currenthosteltotalrooms=$("#roominhostel2").val();}
if(currenthostel=='hostel3'){currenthosteltotalrooms=$("#roominhostel3").val();}
if(currenthostel=='hostel4'){currenthosteltotalrooms=$("#roominhostel4").val();}
//send ajax request
datastring="HOSTELNAME="+currenthostel;
$.ajax({
	type:"POST",
	url:"datafetcher.php",
	data:datastring,
	dataType:'json',
	success:function(abcde){
		var returned_json=eval(abcde);
		the_json_thing=returned_json;
		for(var i=1;i<=currenthosteltotalrooms;i++)
		{ var thisroomnumber=returned_json[i].roomno;
			var peopleperroom=returned_json[i].maxcapacity;
			var occupancy=returned_json[i].occupied;
			var herevacancy=peopleperroom-occupancy;
			if(occupancy==peopleperroom)
			{
			var thisroomid=i;
			$("#hostelayout").append("<div class='hostelayoutroom' style='background-color:pink;width:45px;height:45px;float:left;' id="+thisroomid+">"+i+"</div>");
			$("#"+thisroomid).hover(function(){$(this).html("O["+occupancy+"]-V["+herevacancy+"]").css("background-color","yellow");});
			$("#"+thisroomid).mouseout(function(){$(this).html($(this).attr("id")).css("background-color","green");})
			}
			else
			{
			var thisroomid=i;
			$("#hostelayout").append("<div class='hostelayoutroom' style='background-color:green;width:45px;height:45px;float:left;' id="+thisroomid+">"+i+"</div>");
			$("#"+thisroomid).hover(function(){$(this).html("O["+occupancy+"]-V["+herevacancy+"]").css("background-color","yellow");})
			$("#"+thisroomid).mouseout(function(){$(this).html($(this).attr("id")).css("background-color","green");})
			}
		}
		}
	})
}

$(document).ready(function(){setlayout_parameters();$("#hostelnames").click(function(){setlayout_parameters();});$("#hostelayoutroom").fo})
</script>
</body>
</html>