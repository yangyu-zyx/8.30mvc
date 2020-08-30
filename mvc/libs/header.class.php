<?php
namespace libs;
if (!defined('MVC')) {
    die('非法入侵');
}
class header{
    function __construct() {
        $arr = array();
        $database = new db();
        $db = $database->db;
        $i = 0;
        $result = $db->query("select * from category where pid = 0 and isshow = 1");
        while ($row = $result->fetch_assoc()) {
            $arr[$i] = $row;
            $result2 = $db->query("select * from category where isshow = 1 and pid=".$row['cid']);
            while ($row2 = $result2->fetch_assoc()) {
                $arr[$i]["child"][] = $row2;
            }
            $i++;
        }
        $this->meduData = $arr;
        $this->header = TPL_PATH."index/header.html";
        $this->footer = TPL_PATH."index/footer.html";
    }
}