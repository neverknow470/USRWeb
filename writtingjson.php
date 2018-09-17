<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>東海大學USR—青銀共創‧樂齡樂活資訊平台</title>
</head>

<body>
<?php
try {
$filename=$_POST['filename'];
$jsonfile=fopen("jsondata/".$filename.".json","rb");
while (!feof($jsonfile)) {$value .= fread($jsonfile, 1);}
$value = str_replace("[","",$value);
$value = str_replace("]","",$value);
if($value=="")$jsontxt="[".$_POST['jsontxt']."]";
else $jsontxt="[".$value.",".$_POST['jsontxt']."]";
file_put_contents("jsondata/".$filename.".json",$jsontxt);
fclose($jsonfile);
} catch (Exception $e) {
 echo 'Caught exception: ',  $e->getMessage(), "\n";
}
echo $_POST['jsontxt'];
?>
</body>