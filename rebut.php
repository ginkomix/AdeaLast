<?php
$flag= $_POST['flag'];
if($flag==1) {
    $fh = fopen("wrire.txt", "w+");
    fclose($fh);
    $fh = fopen("wrire1.txt", "w+");
    fclose($fh);   

}
if($flag==2) {
    $fh = fopen("wrire1.txt", "w");
    fclose($fh);   
}
echo $flag;


