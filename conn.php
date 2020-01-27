<?php
/**
 * Created by RSC BYTE LTD.
 * Author: Revelatin A.F
 * Date: 27/01/2020 - conn.php
 */
require_once "meekrodb.2.3.class.php";
//start db instantiation
DB::$user = "root";
DB::$password = "";
DB::$host = "localhost";
DB::$dbName = "rs_a2zchat";
//end of db config
const TABLE_GROUP = "rs_group";
const TABLE_MSG = "rs_msg";