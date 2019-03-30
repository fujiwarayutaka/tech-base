<html>
  <head>
  <meta charset="utf-8">
  <title>1-7</title>
  </head>
<body>
<form method="POST"action="">
<input type="text"name="data" value="" >
<input type="submit" value="送信">
</form>
<?php
$filename='mission_1-7.txt';
$fp=fopen($filename,"a");
fwrite($fp,$_POST['data']."\n");
fclose($fp);
?>
<?php
$datas=file('mission_1-7.txt');
foreach($datas as $data){
echo $data."<br>";
}
?>
</body>
</html>
