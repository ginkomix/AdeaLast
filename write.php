<?php
 $leter0= $_POST['leterPOST0'];
$leter1= $_POST['leterPOST1'];
$leter2= $_POST['leterPOST2'];
$leter3= $_POST['leterPOST3'];
 $url= $_POST['url'];


exec("C:\\OpenServer\\domains\\idea\\Writer.exe $url $leter0 $leter1 $leter2 $leter3 ");
echo 1;
?>