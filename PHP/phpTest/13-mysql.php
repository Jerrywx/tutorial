<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/6/30
 * Time: 下午5:41
 */

//// 链接MySQL
if ($abc = mysqli_connect('127.0.0.1', 'root', "123456")) {
    print '<p>Successfully connected to MySQL!</p>';

    /// 创建数据库
    if (mysqli_query($abc, "CREATE DATABASE myblog")) {
        print 'Create Success<br>';
    } else {
        print 'Create ERROE<br>';
        mysqli_error($abc);
    }

    /// 选择数据库
    if (mysqli_select_db($abc, 'myblog')) {
        print "Select Success<br>";
    } else {
        print "Select error<br>";
    }

    $query = "CREATE TABLE entries (
                entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title varchar(100) NOT NULL, 
                entry TEXT NOT NULL, 
                date_entered DATETIME NOT NULL)";

    /// 创建表
    if (mysqli_query($abc, $query)) {

        print "创建成功";
    } else {
        print "创建失败";
        mysqli_error($abc);
    }

    mysqli_close($abc);
} else {
    print '<p style="color: red;" >ERROR connected to MySQL!</p>';
}

?>