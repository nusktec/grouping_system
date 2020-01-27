<?php
error_reporting(0);
//set header in accordance
header("content-type: application/json");
/**
 * Created by RSC BYTE LTD.
 * Author: Revelation A.F
 * Date: 27/01/2020 - api.php
 */
include "model.php";
//start api callings
$ssk = "f6f06dc1f006247044353531264d1867";
//start main api
$cmd = @$_REQUEST['cmd'];
$cssk = @$_REQUEST['ssk'];
if ($ssk != $cssk) {
    exit(writer(false, "Not a valid ssk...", []));
}
//start model caller
switch ($cmd) {
    case "GET-MESSAGES":
        $data = getMessages();
        exit(writer(true, "Messages Okay", $data));
        break;
    case "SEND-MESSAGE":
        $data = sendMessage();
        exit(writer(true, "Sent Okay", $data));
        break;
    case "SET-GROUP":
        $grp = setGroup();
        exit(writer(true, "Group set", $grp));
        break;
    case "GET-GROUP":
        $data = getGroups();
        exit(writer(true, "Group Okay", $data));
        break;
    case "TRUNCATE-TABLE":
        truncateDb();
        exit(writer(true, "Truncated !", []));
        break;
    default:
        exit(writer(false, "Waiting on command change...", []));
        break;
}
//mocks up
function writer($status, $msg, $data)
{
    return json_encode(array("status" => $status, "msg" => $msg, "data" => $data));
}