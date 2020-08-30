<?php
if (!defined("MVC")) {
    echo '非法入侵';
}
use \libs\smarty;
use \libs\db;
class content {
    function add() {
        $smarty = new smarty();
        $smarty->display("admin/addcon.html");
    }
    //添加内容
    function addcon() {
        $cid = $_POST["cid"];
        $ctitle = $_POST["ctitle"];
        $conts = $_POST["conts"];
        $database = new db();
        $db = $database->db;
        $db->query("insert into content (cid, ctitle, conts) values ('$cid','$ctitle','$conts')");
        if ($db->affected_rows>0) {
            echo "<script>alert('插入成功');location.href='/htdocs/mvc/index.php/admin/content/add'</script>";
        }else {
            echo "<script>alert('插入失败');location.href='/htdocs/mvc/index.php/admin/content/add'</script>";
        }
    }
    //查看列表
    function showList() {
        $arr = array();
        $smarty = new smarty();
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from content left join category on  category.cid = content.cid ");
        while ($row  = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        $smarty->assign("data", $arr);
        $smarty->display("admin/showlist.html");
    }
    //查看单条内容
    function show() {
        $smarty = new smarty();
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from content where conid =".$conid);
        $row = $result->fetch_assoc();
        $smarty->assign("data", $row);
        $smarty->display("admin/showone.html");
    }
    //点击编辑按钮
    function edit() {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from content where conid =".$conid);
        $row = $result->fetch_assoc();
        $smarty = new smarty();
        $smarty->assign("data", $row);
        $smarty->display("admin/editone.html");
    }
    //点击修改按钮
    function editone() {
        $conid = $_POST["conid"];
        $cid = $_POST["cid"];
        $conts = $_POST["conts"];
        $ctitle = $_POST["ctitle"];
        $database = new db();
        $db = $database->db;
        $db->query("update content set ctitle = '$ctitle', conts = '$conts', cid=$cid where conid=".$conid);
        if ($db->affected_rows > 0) {
            echo "<script>alert('修改成功');location.href='/htdocs/mvc/index.php/admin/content/edit?conid={$conid}'</script>";
        } else {
            echo "<script>alert('修改失败');location.href='/htdocs/mvc/index.php/admin/content/edit?conid={$conid}'</script>";
        }
    }
    //删除内容
    function del() {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $db->query("delete from content where conid = ".$conid);
        if ($db->affected_rows>0) {
            echo "<script>alert('删除成功');location.href='/htdocs/mvc/index.php/admin/content/showList'</script>";
        } else {
            echo "<script>alert('删除失败');location.href='/htdocs/mvc/index.php/admin/content/showList'</script>";
        }
    }
}