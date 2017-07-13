<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客</title>
</head>
<body>

    <h1>Add a Blog Entry!</h1>

    <?php

        /// 处理表单
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            /// 链接服务器
            $dbc = mysqli_connect('127.0.0.1', 'root', '123456');
            if (!$dbc) {
                print "打开数据库失败!<br>";
            }
            mysqli_select_db($dbc, 'myblog');

            /// 验证表单
            $problem = FALSE;
            if (!empty($_POST['title']) && !empty($_POST[entry]) ) {
                $title = trim(strip_tags($_POST['title']));
                $entry = trim(strip_tags($_POST['entry']));
            } else {
                print '<p style="color: red;">请提交内容和标题</p>';
                $problem = TRUE;
            }

            /// 用户输入正确
            if (!$problem) {

                /// 插入内容
                $query = "INSERT INTO entries (entry_id, title, entry, date_entered) 
                          VALUES (0, '$title','$entry', NOW())";

                /// 执行语句
                if (mysqli_query($dbc, $query)) {
                    print '<p>The blog entry has been added!</p>';
                } else {
                    print '<p style="color: red;">插入数据失败</p>';
                }

            }

            /// 关闭数据库
            mysqli_close($dbc);
        } else {
            print "ERROR";
        }

    ?>

    <!-- 表单 -->
    <form action="13-add_entry.php" method="POST">
        <p>
            Entry Title:
            <input type="text" name="title" size="40" maxlength="100">
        </p>

        <p>
            Exrrt Text:
            <textarea name="entry" cols="40" rows="5">

            </textarea>
        </p>

        <input type="submit" name="submit" value="Post This Entry">

    </form>


</body>
</html>
