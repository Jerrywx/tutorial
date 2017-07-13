<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/6/30
 * Time: 下午3:04
 */

function make_text_input($name, $label, $size = 20) {

    /// 打印锻炼和label 标签
    print '<p><label>' .$label . ': ';

    /// 打印文本框
    print '<input type="text" name="' .$name . '" siez=:' . $size . '""';

    /// 文本框 预设值
    if (isset($_POST[$name])) {
        print 'value="'. htmlspecialchars($_POST[$name]) . '"';
    }

    /// 完成文本框
    print ' /></label></p>';
}

print '<form action="" methond="post">';

make_text_input("first_name", "First Name");
make_text_input('last_name', 'Last Name', 30);
make_text_input("email", 'Email Address');

print '<input type="submit" name="submit" value="Register!" /></form>';

//// 默认参数

function greeting($who = "world") {
    print "<h3>Hello, $who!</h3>";
}

greeting();
greeting(哈哈);

?>


