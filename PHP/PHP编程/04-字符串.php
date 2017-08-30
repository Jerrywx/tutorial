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

echo 'test $name' . "<br>";
echo '单引号转义: test\'s' . "<br>";
echo "双引号转义: test\'s" . "<br>";
echo "双引号: test's\\". "<br>";

echo "What is \c this?" . "<br>";

/// here 文档
$here = <<< EndOfQuote
asd

sad<br>
asd
asd<br>

asd <br>
EndOfQuote;

echo $here;

printf("age: %d <br>", 100);
printf("name: %s <br>", "wxiao");



/// 2、输出字符串
echo "<h3>2、输出字符串</h3>";

/*
 * 1. echo      一次可以输出许多值
 * 2. print()   一次只能输出一个
 * 3. printf()  函数能够根据模板格式化输出的字符串
 * 4. print_r() 函数有利于调试--它用更容易读懂的方式打印数组
 */

echo "<p>echo Demo</p>";
echo "echo 输出" . "<br>";
echo "echo 输出1 ", "echo 输出2 ", "echo 输出3 ", "<br>";
echo("echo 输出<br>");
// 错误
//echo ("echo 输出1", "echo 输出2");


/// 3、访问单个字符
echo "<h3>3、访问单个字符</h3>";

$string = "Hello PHP!";

for ($i=0; $i<strlen($string); $i++) {
    echo "char {$string{$i}} <br>";
}



?>

