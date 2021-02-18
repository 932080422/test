<?php
// 积分表
// id 积分总数（score） 时间戳(设置返还当天的时间戳) fid(外键)
// id 积分 第几天返还

//设置积分
function set_score()
{
    $data = $_POST;
    if(isset($data['do_submit'])) {
        $money = $data['money'];
        $d_money = $data['d_money'];
        if(empty($money)||empty($d_money)) {
            _message("操作失败");
        } else {

        }
    }
    include("index.html");
}
//定时脚本
function donate_score()
{

}