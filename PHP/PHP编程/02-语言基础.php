<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/8/14
 * Time: 下午2:30
 */

// 1、变量

/// 1. 声明变量
$name = "This is Name";
echo $name;
echo "<br>";

$isNull;
if ($isNull === NULL) {
    echo "isNull";
} else {
    echo "noNull";
}
echo "<br>";

/// 2. 变量的变量
$foo = "bar";
$$foo = "baz";

echo $bar . "<br>";


/// 3. 变量的引用
$one = "one";
$two =& $one;

echo $one . "<br>";
echo $two . "<br>";

$one = "two";
echo "=========== <br>";
echo $one . "<br>";
echo $two . "<br>";

$two = "Three";
echo "=========== <br>";
echo $one . "<br>";
echo $two . "<br>";


/// 4. 变量的作用域
/// a. 局部作用域
/// b. 全局作用域
/// c. 静态作用域
/// d. 函数参数


echo "<h3>垃圾收集</h3>";
$worker = array("Fred", 35, "Wilma");
$other = $worker;
echo $worker;
echo "<br>";
echo $other;
echo "<br>";

echo isset($other);
echo "<br>";

unset($worker);
unset($other);
//echo isset($other);

if (isset($other)) {
    echo "OK <br>";
} else {
    echo "NO <br>";
}

echo "<br>";


echo "<h3>表达式和操作符</h3>";
$numb1 = "22";
$numb2 = 22;

if ($numb1 == $numb2) {
    echo "== 等于!" . "<br>";
} else {
    echo "== 不等于" . "<br>";
}

if ($numb1 === $numb2) {
    echo "=== 等于!" . "<br>";
} else {
    echo "=== 不等于" . "<br>";
}



/// 流程控制语句
echo "<h3>流程控制语句</h3>";

/// if
/// switch
/// while
/// for
/// foreach

$ary = array("one", "two", "three");
foreach ($ary as $item) {
    echo "$item" . "<br>";
}



/// trycatch
/// declare
/// exit & return


/// 在Web页面中嵌套PHP
echo "<h3>在Web页面中嵌套PHP</h3>"
// 四中风格




?>

