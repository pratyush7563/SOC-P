<?php
$f1=fopen ("text.txt","r+");
$data1=fread($f1,filesize("text.txt"));
fclose($f1);
if (stripos($data1,$_POST['name']==0)){
$data2=$_POST['name']." ".$_POST['password']."\n";
$data3=$data1.$data2;
$f2=fopen("text.txt","w");
fwrite($f2,$data3);
fclose($f2);
}
else {
  echo "Error: Username already used";
}


?>
