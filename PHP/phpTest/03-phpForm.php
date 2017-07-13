<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 表单</title>
</head>
    <body>

    <?php

        $title = $_POST['title'];
        $name = $_POST['name'];
        $response = $_POST['response'];
        $comments = $_POST['comments'];

        print "<p> Tank you, $title $name, for your comments </p>
           <p>You stated that you found this example to b $response and added:</p>
           <p>$comments</p>"

    ?>


    </body>
</html>