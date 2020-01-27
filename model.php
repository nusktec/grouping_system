<?php
/**
 * Created by RSC BYTE LTD.
 * Author: Revelation A.F
 * Date: 27/01/2020 - model.php
 */
require "conn.php";
//start main model
function getGroups()
{
    return DB::query("SELECT * FROM `" . TABLE_GROUP . "`");
}

//start models
function getMessages()
{
    $gnum = $_REQUEST['gnum'];
    if (empty($gnum)) {
        return [];
    }
    //go to db
    return DB::query("SELECT * FROM `" . TABLE_MSG . "` WHERE `mgnum`=" . (int)$gnum);
}

//group identifier
function setGroup()
{
    $uid = $_REQUEST['uid'];
    if (empty($uid)) {
        return null;
    }
    //find and fit
    $res = DB::queryFirstRow("SELECT * FROM `" . TABLE_GROUP . "` WHERE `guid`=" . (int)$uid);
    if (count($res) > 0) {
        return array("gnum" => $res['gnum'], "gname" => $res['gname'], "guid" => $res['guid']);
    }
    //check in available group
    //$res = array_reverse($res);
    $grp = DB::query("SELECT * FROM `" . TABLE_GROUP . "`");
    $grp_num = (@array_reverse($grp)[0]['gnum']);
    $last_group = $grp_num ? $grp_num : 0;
    //check if gnum is more than 50
    $res2 = DB::query("SELECT `gnum` FROM `" . TABLE_GROUP . "` WHERE `gnum`=" . $last_group);
    if (count($res2) > 4) {
        //increment num
        $last_group++;
        //insert new number
        DB::insert(TABLE_GROUP, array("guid" => $uid, "gnum" => $last_group, "gname" => "GROUP #" . $last_group));
        return array("gnum" => $last_group, "gname" => "GROUP #" . $last_group, "guid" => $uid);
    } else {
        if ($last_group == 0) {
            $last_group = 1;
        }
        DB::insert(TABLE_GROUP, array("guid" => $uid, "gnum" => $last_group, "gname" => "GROUP #" . $last_group));
        return array("gnum" => $last_group, "gname" => "GROUP #" . $last_group, "guid" => $uid);
    }

}

//send message
function sendMessage()
{
    $uid = $_REQUEST['uid'];
    $msg = $_REQUEST['msg'];
    $gnum = $_REQUEST['gnum'];
    //start data async to db
    DB::insert(TABLE_MSG, array("muid" => $uid, "mmsg" => $msg, "mgnum" => $gnum));
    return true;
}

//truncating functions
function truncateDb()
{
    DB::query("TRUNCATE " . TABLE_MSG);
    DB::query("TRUNCATE " . TABLE_GROUP);
    return true;
}