<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/7/24
 * Time: 下午4:01
 */

//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//echo json_encode($arr);

class Person {
    public $name = "";
    public $age = "";
    public $birthdate = "";
}
$p = new Person();
$p->name = "张三";
$p->age = "25";
$p->birthdate = "1992/04/15";


$p1 = new Person();
$p1->name = "李四";
$p1->age = "28";
$p1->birthdate = "1980/01/25";

$p2 = new Person();
$p2->name = "王五";
$p2->age = "22";
$p2->birthdate = "1995/07/21";

$array = array(json_encode($p), json_encode($p1), json_encode($p2));

//echo json_encode($array);
//echo json_encode($p)



$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
var_dump(json_decode($json, true));


//class Emp {
//    public $name = "";
//    public $hobbies  = "";
//    public $birthdate = "";
//}
//$e = new Emp();
//$e->name = "sachin";
//$e->hobbies  = "sports";
//$e->birthdate = "8/5/1974 12:20:03 p";
////$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
//
//echo json_encode($e);

?>



