<?php
if (!isset ($_COOKIE['userid']))
{
    srand ((double) microtime( ) * 1000000);
    $uniq_id = uniqid(rand( ));
    setcookie ("userid", $uniq_id, time( )+3600);
    file_put_contents("History.txt", $uniq_id . "  " . $_SERVER['PHP_SELF'] . "  " . date("Y-m-d H:i:S") . "\n", FILE_APPEND);
}
else
{
    file_put_contents("History.txt", $_COOKIE['userid'] . "  " . $_SERVER['PHP_SELF'] . "  " . date("Y-m-d H:i:S") . "\n", FILE_APPEND);
}
?>