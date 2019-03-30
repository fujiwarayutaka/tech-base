<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
  <title>2-3</title>
  </head>
<body>
<?php
//代入する
$name=$_POST['name'];
$comment=$_POST['comment'];
$editnumber=$_POST['editnumber'];
$delete=$_POST['delete'];
$edit=$_POST['edit'];

//編集選択機能
if(!empty($edit)){
$fileedit='mission_2-4.txt';
$edits=file($fileedit);
	foreach((array)$edits as $edit_){
	$new_edit=explode("<>",$edit_);
		if($new_edit[0]==$edit){
		$edit_number=$new_edit[0];
		$edit_name=$new_edit[1];
		$edit_comment=$new_edit[2];
		}
	}
}
?>


<form method="POST"action="">
<input type="text"name="name"placeholder="名前" value="<?php echo ($edit_name)?>"><br>
<input type="text"name="comment"placeholder="コメント"value="<?php echo ($edit_comment)?>" ><br>
<input type="hidden"name="editnumber" value="<?php echo ($edit_number)?>">
<input type="submit" value="送信">
<br>
<input type="text"name="delete" placeholder="削除対象番号">
<input type="submit" value="削除">
<br>
<input type="text"name="edit" placeholder="編集対象番号">
<input type="submit" value="編集">
</form>

<?php
//新規投稿
if($name and $comment){
$filename='mission_2-4.txt';
$fp=fopen($filename,"a");
$num=count(file($filename));
$num++;
fwrite($fp,$num."<>".$name."<>".$comment."<>".date("Y:m:d H:i:s")."\n");
fclose($fp);
}else{
;
}
//削除処理
if(!empty($delete)){
$filename='mission_2-4.txt';
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

//編集実行機能
if(!empty($editnumber)){
$fileedit='mission_2-4.txt';
$edits=file($fileedit);
$fp2=fopen($fileedit,"w");
	foreach((array)$edits as $edit_){
	$new_edit=explode("<>",$edit_);
		if($new_edit[0]==$editnumber){
		fwrite($fp2,$editnumber."<>".$name."<>".$comment."<>".date("Y:m:d H:i:s")."\n");
		}else{
		fwrite($fp2,$edit_);
		}
	}
fclose($fp2);
}
//表示処理
$datas=file($filename);
foreach((array)$datas as $data){
$new_data=explode("<>",$data);
echo $new_data[0].$new_data[1].$new_data[2].$new_data[3]."<br>";
}

?>
</body>
</html>
