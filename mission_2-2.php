<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
  <title>2-2</title>
  </head>
<body>
<form method="POST"action="">
名前：<input type="text"name="data1" value="" ><br>
コメント：<input type="text"name="data2" value="" ><br>
<input type="submit" value="送信">
</form>
<?php
$filename='mission_2-2.txt';
$fp=fopen($filename,"a");
$num=count( file( $filename ) ); 
$num++; 
$number=$num."<>".$_POST['data1']."<>".$_POST['data2']."<>".date("Y:m:d H:i:s");
fwrite($fp,$number."\n");
fclose($fp);
?>
<?php
$datas=file('mission_2-2.txt');
foreach($datas as $data){
$new_data=explode("<>",$data);
echo $new_data[0];
echo $new_data[1];
echo $new_data[2];
echo $new_data[3];
}
?>
</body>
</html>
