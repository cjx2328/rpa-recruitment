<?php
/**
 * Created by PhpStorm.
 * User: kurt chen
 * Date: 2020/5/24
 * Time: 22:24
 * Email:cjx2328@126.com
 */

namespace MyGreeter;

function Client() {}

class Client{

    /**
     * $timestamp  时间戳设置 默认现在时间戳
     * */
    public function getGreeting(){
        //now time
        $time = time();
        //morning  start time
        $good_morning_start_time = strtotime(date('Y-m-d',$time));
        //afternoon  start time
        $good_afternoon_start_time = strtotime(date('Y-m-d 12:00:00',$time));
        //evening  start time
        $good_evening_start_time = strtotime(date('Y-m-d 18:00:00',$time));
        if($time>=$good_morning_start_time && $time<$good_afternoon_start_time) return "Good morning";
        if($time>=$good_afternoon_start_time && $time<$good_evening_start_time) return "Good afternoon";
        return "Good evening";
    }

}