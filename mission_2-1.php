<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
  <title>2-1</title>
  </head>
<body>
<form method="POST"action="">
名前：<input type="text"name="data1" value="" ><br>
コメント：<input type="text"name="data2" value="" ><br>
<input type="submit" value="送信">
</form>
<?php
$filename='mission_2-1.txt';
$fp=fopen($filename,"a");
$num=count( file( $filename ) ); 
$num++; 
fwrite($fp,$num."<>".$_POST['data1']."<>".$_POST['data2']."<>".date("Y/m/d H:i:s")."\n");
fclose($fp);
?>
</body>
</html>
