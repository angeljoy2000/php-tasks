<?php
$string="BEAUTIFUL TOGETHER FOUNDATION";

$newstring=str_replace(" ","",$string);
echo strtolower($newstring); 
echo "<br>";
 
$fc=substr($string,8,1);
echo $fc;
$fc=substr($string,17,1);
echo $fc;
$lc=substr($string,-1);
echo $lc;
?>