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

echo "<p>1. echo Demo</p>";
echo "echo 输出" . "<br>";
echo "echo 输出1 ", "echo 输出2 ", "echo 输出3 ", "<br>";
echo("echo 输出<br>");
// 错误
//echo ("echo 输出1", "echo 输出2");

echo "<br>";
/// printf Demo
printf("2. printf Demo<br>");



print_r("4. print_r Demo<br>");
$ary = array("one", "two", "three", "four");

print_r($ary);
echo "<br>";
echo $ary;
echo "<br>";
print $ary;
echo "<br>";

var_dump($ary);

$num = 123;
var_dump($num);




/// 3、访问单个字符
echo "<h3>3、访问单个字符</h3>";

$string = "Hello PHP!";

for ($i=0; $i<strlen($string); $i++) {
    echo "char {$string{$i}} <br>";
}

echo "<br>";
echo $string[0];

echo "<br>";
echo "<br>";

/////
$string = "This is a Test";
$pos = strpos($string, "is");
echo "$pos <br>";

$pos = strpos($string, "a");
echo "$pos <br>";

$pos = strpos($string, 8);
echo "$pos <br>";

if ($pos === false) {
    echo "没有找到<br>";
} else {
    echo "找到了!!<br>";
}



/*
 *  1. 应用字符串常量
 *  2. 输出字符串
 *  3. 访问单个字符
 *  4. 整理字符串
 *      1. 删除空字符
 *      2. 改变大小写
 *  5. 编码转义
 *      1. HTML
 *      2. URL
 *      3. SQL
 *      4. C语言字符串
 *  6. 比较字符串
 *      1. 精确比较 (==、===)
 *      2. 近似比较 (soundex()、metaphone()、similar_text()、levenshtein())
 *  7. 处理和查找字符串
 *  8. 正则表达式
 *
 */

?>

