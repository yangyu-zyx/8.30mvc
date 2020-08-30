<?php
use \libs\smarty;
use \libs\db;
use \libs\header;
if (!defined('MVC')) {
    die('非法入侵');
}
class show {
    function int() {
        $conid = $_GET["conid"];
        $smarty = new smarty();

        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from content where conid = $conid");
        $condata = $result->fetch_assoc();

        $header = new header();
        $smarty->assign("menuData", $header->meduData);
        $smarty->assign("header", $header->header);
        $smarty->assign("footer", $header->footer);
        $smarty->assign("condata", $condata);
        $smarty->display("index/show.html");
    }

}