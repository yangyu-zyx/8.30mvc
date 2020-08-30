<?php
namespace libs;
class upload{
    //定义属性 在外部可修改的值
    public $fullpath;
    public $filesize;
    public $fileType = array("image/png","image/jpeg","image/gif");
    public $filename = "file";
    public $defaultDir = "upload";
    function __construct() {
        $this->filesize = 1024*1024*5;
    }
    private function accept() {
        $this->data = $_FILES["$this->filename"];
    }
    private function check() {
        if (is_uploaded_file($this->data["tmp_name"])){
            if ($this->data["size"] < $this->filesize) {
                if (in_array($this->data["type"],$this->fileType)) {
                    return true;
                } else{
                    echo "不符合类型";
                    return false;
                }
            } else{
                echo "文件太大";
                return false;
            }
        }else {
            echo "文件不合法";
            return false;
        }
    }
    function createDir() {
        if (!is_dir($this->defaultDir)) {
            mkdir($this->defaultDir,0777,true);
        }
        $currentDir = $this->defaultDir.DIRECTORY_SEPARATOR.date("Y-m-d");
        if (!is_dir($currentDir)) {
            mkdir($currentDir);
        }
        //最终名字
        $filename = time().mt_rand(1000,20000).$this->data["name"];
        $this->fullpath = $currentDir.DIRECTORY_SEPARATOR.$filename;
//        echo  "上传成功";
    }
    function move() {
        move_uploaded_file($this->data["tmp_name"], $this->fullpath);
    }
    function up() {
        //接受上传数据
        $this->accept();
        //检查
        if ($this->check()) {
            //创建文件夹 用于放入上传文件
            $this->createDir();
            //移动到指定目录
            $this->move();
        }
    }
}
