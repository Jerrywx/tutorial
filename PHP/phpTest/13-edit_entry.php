<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
</head>
<body>

<h1>My Blog!</h1>

<?php

$abc = mysqli_connect('127.0.0.1', 'root', '123456');

if (!$abc) {
    print '<p style="color: red"> 链接服务器失败 </p>';
}
mysqli_select_db($abc, 'myblog');

/// 查询语句
$query = 'SELECT title, entry FROM entries';

if ($r = mysqli_query($abc, $query)) {

    while ($row = mysqli_fetch_array($r)) {

        $title = $row['title'];
        $entry = $row['entry'];
        print "<p><h3>{$row['title']}</h3> {$row['entry']}<br/>
               <a href='#'>Edit</a>
               <a href='#'>Delete</a>
               </p><hr/>";
    }
} else {
    print '<p style="color: red"> 查询失败 </p>';
}
mysqli_close($abc);

?>

</body>
</html>