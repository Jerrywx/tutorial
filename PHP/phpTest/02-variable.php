<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>02-变量</title>
</head>
<body>

<pre>
    <h3>打印变量</h3>
    <?php
        //print_r($_SERVER)
    ?>

    <h3>变量类型</h3>
    <?php

        /// 1. 数值
        $number2 = 20;
        echo  $number2."<br>";

        /// 2. 字符串
        $string = "Hello ";
        $string2 = "World";
        echo $string;
        echo $string2;
    ?>



    <hr />
    <?php

    $number = 1;
    $floating_numb = 1.2;
    $string = "Hello, world!";

    print $number;
    print $string;

    echo "<br>";

    print "Number is $number <br>";
    print "String is $string <br>";
    print "__SERVER is $_SERVER"

    ?>

    <hr/>
    <?php

    $street = "100 Main Stress";
    $city = "State College";
    $state = "PA";
    $zip = 16801;

    /// 打印
    print "<p>The address is:<br>$street <br>$city <br>$state $zip</p>"

    ?>

    <hr/>

    <?php

        $first_name = "Larry";
        $last_name = "UILman";

        echo "<br/>";
        print '$first_name $last_name';
        echo "<br/>";
        print "$first_name $last_name";
        echo "<br/>";
        print "Hello, \nWorld!"

    ?>


</pre>

</body>
</html>









