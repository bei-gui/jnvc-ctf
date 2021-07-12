<?php
error_reporting(0);
include('flag.php');
if (!isset($_GET['flag'])){
	show_source(__FILE__);
	exit();
}
if (strcmp($_GET['flag'], $flag) == 0) {    //hint : strcmp比较两个字符串是否相同，当strcmp比较出错的时候就会为null。null即为0故输出flag。
echo "success, flag:" . $flag;
}
?>