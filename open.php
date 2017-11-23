<?php
$url = $_POST['url1'];
exec("C:\\OpenServer\\domains\\idea\\FileRiader.exe $url");
$fh = fopen("Buf.txt", "rb");
$data = fread($fh, filesize("Buf.txt"));
fclose($fh);
echo $data;
