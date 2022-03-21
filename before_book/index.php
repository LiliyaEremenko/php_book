<?php
	header('Content-type: text/html; charset=utf-8');
	$str1 = $_GET['name'];
	$str2 = $_GET['surname'];
	$result = $str1 .' '. $str2;
	print_r($result);
?>