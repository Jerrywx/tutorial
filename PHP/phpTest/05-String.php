<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/6/28
 * Time: 下午2:12
 */

/// 获取变量内容
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
//$posting = $_POST['posting'];
$posting = nl2br($_POST['posting']);

$html_post = htmlentities($_POST['posting']);
$strip_post = strip_tags($_POST['posting']);

/// 拼接姓名
$name = $first_name . " " . $last_name;

print "<div>Thank you, $name, for your posting:
        
        <p>Original:$posting</p>
        <p>Entity:$html_post</p>
        <p>Stripped:$strip_post</p>
        </div>";


$name = "Surname, First";
$s = strtok($name, ", ");

echo $s;

echo "<br>";

echo substr($name, 0, 10);


$string = "Hello world!";
echo "<br>";
echo strlen($string);
echo "<br>";
echo str_word_count($string);


?>
