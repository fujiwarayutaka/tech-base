<html>
  <head>
  <meta charset="utf-8">
  <title>1-4</title>
  </head>
<body>
<form method="POST"action="">
<input type="text"name="data" value="コメント" >
<input type="submit" value="送信">
</form>
<?php
if(empty($_POST['data'])){
echo"";
}
else {
$data=$_POST['data'];
echo "ご入力ありがとうございます。<br>";
echo date("Y/m/d H:i:s").$data."を受け付けました。";
}
?>
</body>
</html>
