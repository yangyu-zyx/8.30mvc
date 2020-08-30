<?php
if (!defined("MVC")) {
    echo '非法入侵';
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
class category{
    public $arr = array();
    //查询栏目
    function int() {
         $smarty = new smarty();
         $database = new db();
         $this->db = $database->db;
        $str = "";
        $this->three(0, $str);
        $smarty->assign("data", $str);
        $smarty->display("admin/category.html");
    }
    //传值/传址
    function three($pid, &$str, $i=0) {
        $result = $this->db->query("select * from category where pid=".$pid );
        while ($row = $result->fetch_assoc()) {
            if ($row["isshow"] == 1){
                $s = "可见";
            } else {
                $s = "不可见";
            }
            $str.= '<tr>
                        <td>'.($i+1).'级目录</td>
                        <td>'.str_repeat("↳", $i).$row["cname"].'</td>
                        <td>'.$s.'</td>
                        <td>
                            <a class="add" href="javascript:;" attr="'.$row["cid"].'">添加</a>
                            <a class="edit" href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'">修改</a>
                            <a class="remove " href="/htdocs/mvc/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].' ">删除</a>
                        </td>
                    </tr>';
            $this->three($row["cid"],$str, $i+1);
        }
    }
    //添加栏目
    function add() {
        if (isset($_POST["cid"])) {
            $gid = $_POST["cid"];
            echo $gid;
        } else {
            $gid = 0;
        }

        //上传照片
        $path = $_POST["imgurl"];

        $cname = $_POST["cname"];
        $isshow = $_POST["isshow"];
        $tpl_name = $_POST["tpl_name"];
        $info = $_POST["info"];
        $database = new db();
        $db = $database->db;
        $return = $db->query("insert into category (cname, isshow, tpl_name, pid, info,imgurl) values ('$cname','$isshow','$tpl_name', $gid, '$info','$path')");
        if ($db->affected_rows>0) {
            header("location:/htdocs/mvc/index.php/admin/category");
        }
    }
    //添加页面
    function addpage() {
        $smarty = new smarty();
        $smarty->display("admin/addpage.html");
    }
    //显示信息
    function show() {
        $cid = $_GET["cid"];
        $database = new db();
        $db = $database->db;
        $return = $db->query("select * from category where cid =".$cid);
        $row = $return->fetch_assoc();
        echo json_encode($row);
    }
    function getOption() {
        $this->threeOption(0, $this->arr);
        echo json_encode($this->arr);
    }
    function threeOption($pid, &$arr) {
        $database = new db();
        $this->db = $database->db;
        $result = $this->db->query("select * from category where pid=".$pid);
        $i = 0;
        while ($row=$result->fetch_assoc()){
            $arr[$i] = array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"]
            );
            $this->threeOption($row["cid"], $arr[$i]["child"]);
            $i++;
        }
    }
    //修改信息
    function update() {
        $cname = $_GET["cname"];
        $pid = $_GET["pid"];
        $cid = $_GET["cid"];
        $tpl_name = $_GET["tpl_name"];
        $info = $_GET["info"];
        $isshow = $_GET["isshow"];
        $imgurl = $_GET["imgurl"];
        $database = new db();
        $db = $database->db;
        $db->query("update category set cname='{$cname}',pid='{$pid}',tpl_name='$tpl_name',info='$info',isshow='$isshow',imgurl='$imgurl' where cid=".$cid);
        if ($db->affected_rows>0) {
            echo "ok";
        }
    }
    //删除栏目
    function del() {
        $cid = $_GET["cid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from category where pid=".$cid);
        if ($result->num_rows>0){
            echo "<script>alert('请先删除子目录');location.href='/htdocs/mvc/index.php/admin/category';</script>";
        }else {
            $db->query("delete from category where cid = " . $cid);
            if ($row = $db->affected_rows > 0) {
                header("location:/htdocs/mvc/index.php/admin/category");
            }
        }
    }
    //上传iframe
    function upload() {
        $smarty = new smarty();
        $smarty->display("admin/upload.html");
    }
    //点击上传按钮
    function uploadfile() {
        $upload = new upload();
        $upload->up();
        $path = "http://localhost:8888//htdocs/mvc/".$upload->fullpath;
        echo $path;
    }
}
