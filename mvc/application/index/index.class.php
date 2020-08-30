<?php
use \libs\smarty;
use \libs\db;
use \libs\header;
if (!defined('MVC')) {
    die('非法入侵');
}
class index {
    function int() {
        $smarty = new smarty();
//        $arr = array();
//        $database = new db();
//        $db = $database->db;
//        $i = 0;
//        $result = $db->query("select * from category where pid = 0");
//        while ($row = $result->fetch_assoc()) {
//            $arr[$i] = $row;
//            $result2 = $db->query("select * from category where pid=".$row['cid']);
//            while ($row2 = $result2->fetch_assoc()) {
//                $arr[$i]["child"][] = $row2;
//            }
//            $i++;
//        }
        $header = new header();
        $smarty->assign("menuData", $header->meduData);
        $smarty->assign("header", $header->header);
        $smarty->assign("footer", $header->footer);
        $smarty->display("index/index.html");
    }
}