<html>
  <head>
  <meta charset="utf-8">
  <title>1-6</title>
  </head>
<body>
<form method="POST"action="">
<input type="text"name="data" value="" >
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
$filename='mission_1-6.txt';
$fp=fopen($filename,"a");
fwrite($fp,$_POST['data']."\n");
fclose($fp);
?>
</body>
</html>
