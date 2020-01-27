<?php
/**
 * Created by RSC BYTE LTD.
 * Author: Revelatin A.F
 * Date: 27/01/2020 - index.php
 */
header("content-type: application/json");
exit(json_encode(['Chat scripting system - reedax algo.']));

///API DOCS\\\\
/// Set Group
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: SET-GROUP
/// -SSK: f6f06dc1f006247044353531264d1867
/// -uid: (user id)
///
/// Get Group
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: GET-GROUP
/// -SSK: f6f06dc1f006247044353531264d1867
///
/// GET Messages
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: GET-MESSAGES
/// -SSK: f6f06dc1f006247044353531264d1867
/// -gnum: 1 (group num)
///
/// Send Message
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: SEND-MESSAGE
/// -SSK: f6f06dc1f006247044353531264d1867
/// -gnum: 1 (group num)
/// -msg: message data
/// -uid: user id
///
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: SET-GROUP
/// -SSK: f6f06dc1f006247044353531264d1867
/// -uid: (user id)
///
/// POST DATA REQUIRED\\\\\\\\\
/// -cmd: TRUNCATE-TABLE
/// -SSK: f6f06dc1f006247044353531264d1867