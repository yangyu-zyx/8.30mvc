<?php
use \libs\smarty;
use \libs\db;
use \libs\header;
if (!defined('MVC')) {
    die('非法入侵');
}
class lists {
    function int() {
        $cid = $_GET["cid"];
        $smarty = new smarty();

        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from category where cid = $cid");
        $currentInfo = $result->fetch_assoc();
        $result2 = $db->query("select ctitle, conid from content where cid = $cid");
        $condata = array();
        while ($row = $result2->fetch_assoc()){
            $condata[] = $row;
        }

        $header = new header();
        $smarty->assign("menuData", $header->meduData);
        $smarty->assign("header", $header->header);
        $smarty->assign("footer", $header->footer);
        $smarty->assign("currentInfo", $currentInfo);
        $smarty->assign("condata", $condata);
        $smarty->display("index/list.html");
    }

}