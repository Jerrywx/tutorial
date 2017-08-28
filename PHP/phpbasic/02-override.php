<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/7/6
 * Time: 下午3:51
 */

echo "This is the main file.<br/>";
require('reusable.php');
echo "The script will and now.<br>";


$str = "   Hello !    ";
echo trim($str);

echo "<br>";

$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Held!o");






?>

