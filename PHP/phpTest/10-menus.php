<?php
/**
 * Created by PhpStorm.
 * User: wxiao
 * Date: 2017/6/30
 * Time: 上午11:24
 */

/// 创建函数
function make_date_menus() {

    /// 月份选择
    $month = array(1 => 'January', 'February', 'March ', 'April', 'May' ,'June','July', 'August', 'September', 'October', 'November','December' );
    print "<select name='month'>";
    foreach ($month as $key => $value) {
        print "\n<option value='\"$key\"'>$value</option>";
    }
    print "</select>";


    /// 日期选择
    print '<select name="day">';
    for ($day = 1; $day <= 31; $day++) {
        print "\n<option value='\"$day\"'>$day</option>";
    }
    print '</select>';

    /// 选择 年
    print '<select name="year">';
    $star_year = date('Y');
    for ($y = $star_year; $y < $star_year + 10; $y++) {
        print "<option name=\"$y\">$y</option>";
    }
    print '</select>';
}

make_date_menus()

?>