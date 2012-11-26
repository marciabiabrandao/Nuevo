<?php
//$palindrome="dabale arroz a la zorra el abade";
//$palindrome="a la catalana banal atacala";
$palindrome="a la catalana atacala";
$pali=array();
$pali=explode(' ', $palindrome);
$text1=implode('', $pali);
$text2=strrev($text1);

if (strcmp($text1, $text2)==0)
	 echo "es palindrome";
else
	echo "no es palindrome";
?>
