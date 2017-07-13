<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/7/5
 * Time: 下午6:11
 */

/// 1、数组初始化
$products = array("One", "Two", "Three");
$numbers = range(0, 10);
$numbers2 = range(0, 10, 3);
$chars = range(a, z);



echo "==========================================  2、访问数组内容<br>";
/// 2、访问数组内容

echo $products[0] . "<br>";
echo $numbers[2] . "<br>";
echo $numbers2[3] . "<br>";

$products[0] = "Numbers";
echo $products[0] . "<br>";

$products2[0] = "HAHA";
$products2[1] = "HEHE";
$products2[2] = "HEIHEI";

echo $products2[1] . "<br>";



echo "========================================== 3、使用循环访问数组<br>";
/// 3、使用循环访问数组

for ($i=0; $i<3; $i++) {
    echo "$i: " . $products2[$i] . "<br>";
}

foreach ($numbers2 as $numb) {
    echo $numb . "<br>";
}



echo "========================================== 4、使用不同索引的数组<br>";
/// 4、使用不同索引的数组

/// 4.1 初始化关联数组
$sprice = array("99"=>99, "199"=>199, "299"=>299);

/// 4.2 访问关联数组
echo $sprice[99]. "<br>";
echo $sprice[199]. "<br>";
echo $sprice[299]. "<br>";
echo "<br>";
echo $sprice["99"]. "<br>";
echo $sprice["199"]. "<br>";
echo $sprice["299"]. "<br>";

$sprice2 = array("88"=>88);
$sprice2["188"] = 188;
$sprice2[288] = "288";

echo "<br>";
echo $sprice2["88"]. "<br>";
echo $sprice2["188"]. "<br>";
echo $sprice2["288"]. "<br>";

echo "========================================== 4.3 遍历关联数组<br>";
/// 4.3 遍历关联数组

/// foreach
foreach ($sprice as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
echo "<br>";
/// each() 函数
while ($element = each($sprice2)) {
    echo $element['key'];
    echo ' - ';
    echo $element['value'];
    echo "<br>";
}

echo "<br>";

reset($sprice);

/// list() 函数
while (list($key, $value) = each($sprice)) {
    echo "$key -- $value <br>";
}



echo "========================================== 5、数组操作<br>";
/// 5、数组操作

// 1. 链接 "+"
$array1 = array("one", "two", "three");
$array2 = array("four", "five", "six", "seven", "eee");
$array3 = $array1 + $array2;

foreach ($array3 as $key => $value) {
    echo "$key -> $value <br>";
}



echo "========================================== 6、多维数组<br>";
/// 6、多维数组

$pro = array(array("one", "two", "three"),
            array("111", "222", "333"),
            array("YYY", "EEE", "SSS"));


foreach ($pro as $ary) {

    foreach ($ary as $value) {
        echo "$value     ";
    }
    echo "<br>";
}




?>






















