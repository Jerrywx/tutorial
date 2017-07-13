<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
</head>
<body>

<h1>Edit an Entry!</h1>

<?php

$abc = mysqli_connect('127.0.0.1', 'root', '123456');

if (!$abc) {
    print '<p style="color: red"> 链接服务器失败 </p>';
}
mysqli_select_db($abc, 'myblog');

$id = $_GET['id'];

/// 在表单中查询显示条目
if (isset($_GET['id']) && is_numeric($_GET['id'])) {


    $query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";

    if ($r = mysqli_query($abc, $query)) {

        $row = mysqli_fetch_array($r);

        print '<form action="13-update_entry.php" method="post">
            <p>Entry Title: <input type="text" name="title" size="40" maxlength="100" value="' .
            htmlentities($row['title']).'" /> </p>
            <p>Entry Text: <textarea name="entry" cols="40" rows="5" >'. htmlentities($row['entry']) . '</textarea>  </p>
            <input type="hidden" name="id" value="'.$_GET['id'].'"/>
            <input type="submit" name="submit" value="Update this Entry!"/>
            </form>';

    } else {
        print '<p style="color: red"> Could not retrieve the blog!</p>';
    }


} elseif (isset($_POST['id']) && is_numeric($_POST['id']) ) {
    $problem = FALSE;

    if (!empty($_POST['title']) && !empty($_POST['entry'])) {
        $title = mysqli_real_escape_string($abc ,trim(strip_tags($_POST['title'])));
        $entry = mysqli_real_escape_string($abc ,trim(strip_tags($_POST['entry'])));
    } else {
        print '<p style="color: red"> Please submit both title and an entry.</p>';
        $problem = TRUE;
    }

    if (!$problem) {

        /// 定义查询语句
        $query = "UPDATE entries SET title='$title', entry='$entry' WHERE entry_id={$_POST['id']}";
        $r = mysqli_query($abc, $query);

        if (mysqli_affected_rows($abc) == 1) {
            print '<h3>The blog entry has been updated.</h3>';
        } else {
            print '<p style="color: red"> Could not dupdate the Entry!</p>';
        }
    }

} else {
    print '<p style="color: red"> 没有获取ID!</p>';
    print $_POST['id'];
    print isset($_POST['id']);
    print is_numeric($_POST['id']);

}

mysqli_close($abc);

?>

</body>
</html>
