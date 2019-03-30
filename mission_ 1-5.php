<html>
  <head>
  <meta charset="utf-8">
  <title>1-5</title>
  </head>
<body>
<form method="POST"action="">
<input type="text"name="data" value="コメント" >
<input type="submit" value="送信">
</form>
<?php
if(empty($_POST['data'])){
echo"入力されていません。";
}elseif($_POST['data']=="完成"){
echo "おめでとう";
}else {
echo "ご入力ありがとうございます。<br>";
echo date("Y/m/d H:i:s").$_POST['data']."を受け付けました。";
}
?>
<?php
$filename='mission_1-5.txt';
$fp=fopen($filename,"w");
fwrite($fp,$_POST['data']);
fclose($fp);
?>
</body>
</html>
