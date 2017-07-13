<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
</head>
<body>

<h1>Delete an Entry!</h1>

<?php

$abc = mysqli_connect('127.0.0.1', 'root', '123456');

if (!$abc) {
    print '<p style="color: red"> 链接服务器失败 </p>';
}
mysqli_select_db($abc, 'myblog');


//// 在表单中显示条目
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    /// 定义查询
    $query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
    /// 运行查询
    if ($r = mysqli_query($abc, $query)) {
        $row = mysqli_fetch_array($r);
        /// 创建表单
        print '<form action="13-delete_entry.php" method="post">
                <p>Are you sure you want to delete this entry?</p>
                <p><h3>' . $row[$title] . '</h3>' . $row['entry'] . '<br>
                <input type="hidden"  name="id" value="' . $_GET['id'] . '"/>
                <input type="submit" name="submit" value="Delete this Entry!"/> '
                .'</p>' .'</form>';

    } else {
        print '<p style="color: red">Could not retrieve the blog !</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
    /// 处理表单
    $query = "DELETE FROM entries WHERE entry_id={$_POST['id']}";
    $r = mysqli_query($abc, $query);

    if (mysqli_affected_rows($abc) == 1) {
        print '<h3>The blog entry has been deleted.</h3>';
    } else {
        print '<h3>The blog deleted ERROE.</h3>';
    }


} else {
    print '<p style="color: red">没有获取ID !</p>';
    print "======= {$_GET['id']}";
}

?>

</body>
</html>