<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/7/13
 * Time: 下午4:23
 */


// 创建画布
$width = 200;   // 规定画布的宽高
$height = 100;
$image = imagecreatetruecolor($width, $height);  // 创建一幅真彩色图像
// 添加一些即将用到的颜色
$white = imagecolorallocate($image, 0xf2, 0xec, 0xe0);
$orange = imagecolorallocate($image, 0xff, 0xa5, 0x4c);
// 对画布背景填充颜色
imagefill($image, 0, 0, $white);
// 画一串字符串在画布上
imagestring($image, 5, 30, 40, "Hello World", $orange);
// 通知浏览器输出的是图像（png类型）
header('Content-Type: image/png');
// 输出到浏览器
imagepng($image);
// 释放图像资源
imagedestroy($image);

?>