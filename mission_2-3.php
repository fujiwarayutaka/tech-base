<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
  <title>2-3</title>
  </head>
<body>

<form method="POST"action="">
<input type="text"name="name" placeholder="名前" ><br>
<input type="text"name="comment" placeholder="コメント" >
<input type="submit" value="送信">
<br>
<input type="text"name="delete" placeholder="削除対象番号">
<input type="submit" value="削除">
</form>

<?php
$name=$_POST['name'];
$comment=$_POST['comment'];
$delete=$_POST['delete'];

if($name and $comment){
$filename='mission_2-3.txt';
$fp=fopen($filename,"a");
$num=count(file($filename));
$num++;
fwrite($fp,$num."<>".$name."<>".$comment."<>".date("Y:m:d H:i:s")."\n");
fclose($fp);
}else{
;
}

if(!empty($delete)){
$filename='mission_2-3.txt';
	$datas=file($filename);
	$fp=fopen($filename,"w");
	foreach((array)$datas as $data){
	$new_data=explode("<>",$data);
		if($new_data[0]!=$delete){
		fwrite($fp,$data);
		}else{
		;
		}
	}
fclose($fp);
}
	$datas=file($filename);
	foreach((array)$datas as $data){
	$new_data=explode("<>",$data);
	echo $new_data[0].$new_data[1].$new_data[2].$new_data[3]."<br>";
	}
?>
</body>
</html>
