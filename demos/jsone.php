<?php

$a=array("a","b"=>array(1,2,3),"c");
$d=json_encode($a);
?>

<script>
var ahh=<?php echo $d;?>
</script>