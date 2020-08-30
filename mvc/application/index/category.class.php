<?php
use \libs\smarty;
use \libs\db;
use \libs\header;
if (!defined('MVC')) {
    die('非法入侵');
}
class category {
    function int() {
        $cid = $_GET["cid"];
        $smarty = new smarty();

        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from category where cid = $cid");
        $currentInfo = $result->fetch_assoc();
        $result2 = $db->query("select * from category where pid = $cid");
        $sonInfo = array();
        while ($row = $result2->fetch_assoc()) {
            $sonInfo[] = $row;
        }
        $coninfo = array();
        if ($currentInfo["tpl_name"]=="service.html"){
            foreach ($sonInfo as $k=>$v) {
                $cid = $v["cid"];
                $result3 = $db->query("select * from content where cid = $cid");
                while ($row1 = $result3->fetch_assoc()) {
                    $coninfo[$k][] = $row1;
                }
            }
        }
        $header = new header();
        $smarty->assign("menuData", $header->meduData);
        $smarty->assign("header", $header->header);
        $smarty->assign("footer", $header->footer);
        $smarty->assign("sonInfo", $sonInfo);
        $smarty->assign("currentInfo", $currentInfo);
        $smarty->assign("coninfo", $coninfo);
        $smarty->display("index/".$currentInfo["tpl_name"]);
    }

}