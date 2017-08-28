<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/8/16
 * Time: 下午4:02
 */

/// 1、引用字符串常量
echo "<h3>1、引用字符串常量</h3>";

// 1. 变量插值
echo "<p>1.变量插值</p>";
$name = "Hello";
echo "哈哈 $name" . "<br>";
echo "嘿嘿 $nameAA" . "<br>";
echo "嘿嘿 {$name}AA" . "<br>";



/// 2、输出字符串
echo "<h3>2、输出字符串</h3>";

// echo
// print
// printf
// print_r


/// 3、访问单个字符
echo "<h3>3、访问单个字符</h3>";

$string = "Hello PHP!";

for ($i=0; $i<strlen($string); $i++) {
    echo "char {$string{$i}} <br>";
}



?>

