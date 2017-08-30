<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/8/16
 * Time: 下午2:46
 */

/// 1、调用函数
echo "<h3>1、调用函数</h3>";
$length = strlen("PHP");
echo "字符串长度: $length";


/// 2、定义函数
echo "<h3>2、定义函数</h3>";

// 定义函数
function func1($name) {
    echo "Hello $name !<br>";
}

func1("World");
func1("PHP");

/// 字符串拼接函数
function strcat($str1, $str2) {
    return $str1 . " " . $str2 . "<br>";
}
echo strcat("one", "two");


/// 3、变量作用域
echo "<h3>3、变量作用域</h3>";
/// 内部函数
function outer($a) {

    function inner($b) {
        echo "inner $b!!! <br>";
    }

    echo "outer $a!!!<br>";
}

outer("外部");
inner("外部");

/// 函数中使用静态变量

function staticFunc() {

    static  $count = 2;
    $count += 2;
    echo "$count" . "<br>";
}

staticFunc();
staticFunc();
staticFunc();

/// 4、函数参数
echo "<h3>4、函数参数</h3>";

echo "<p>1. 按值传递参数</p>";


echo "<p>2. 按引用传递参数</p>";
$tmpNumb = 10;

function changeNumb(&$numb) {
    $numb = 1111;
}

changeNumb($tmpNumb);
echo "$tmpNumb" . "<br>";


echo "<p>3. 默认参数</p>";

function hello($name = "world") {
    echo Hello . " " . $name . "!<br>";
}

hello();
hello("PHP");


echo "<p>4. 可变参数</p>";

function countList() {

    $array = func_get_args();   /// 获取参数数组
    $count = func_num_args();   /// 获取参数数目
//    $value =
    if ($count == 0) {
        echo "参数列表为空<br>";
        return;
    }

    foreach ($array as $param) {
        echo "$param <br>";
    }
}

countList();
countList("one", "two", "three", "four");


echo "<p>5. 遗漏参数</p>";
function takesTwo($a, $b) {
    if (isset($a)) {
        echo "a is set\n";
    }

    if (isset($b)) {
        echo " b is set\n";
    }
}

takesTwo(1, 2);
takesTwo(1);


echo "<p>6. 类型提示</p>";

class Entertainment{}

class  Clown extends  Entertainment{}

class Job {}

function handle(Entertainment $a, callable $callback = NULL) {

}


/// 5、返回值
echo "<h3>5、返回值</h3>";

//
function returnArray() {
    return array("one", "two", "three");
}

$values = returnArray();

foreach ($values as $v) {
    echo "$v <br>";
}


/// 6、可变函数
echo "<h3>6、可变函数</h3>";

function one() {
    echo "This is One <br>";
}

function two() {
    echo "This is Two <br>";
}

function Three() {
    echo "This is Three<br>";
}

/// 使用可变变量可以基于变量的值调用函数。
$$func = two();
$$func1 = three;

$funcc = one;

if (function_exists($funcc)) {
    $funcc();
    echo "<p>函数存在</p>";
} else {
    echo "<p>函数不不不存在</p>";
}

/// echo() 和 isset() 语言结构不能当做变量函数使用
$myEcho = "echo";
//$myEcho "asdasd";  错误


/// 7、匿名函数
echo "<h3>7、匿名函数</h3>";

/// 1.
$sarray = array("qwe", "cz", "saa", "fds", "erwer", "cxzc");
usort($sarray, function ($a, $b){
    return strlen($a) - strlen($b);
});

print_r($sarray);

$numbers = array(2,3,4,5,6,7);
$mul = 0;

echo "<br>";
/// 2.
usort($numbers, function ($a, $b) use ($mul) {

    if ($mul <= 0) {
        return $b - $a;
    }

    return $a - $b;
});


print_r($numbers);


?>




