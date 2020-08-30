<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:22:03
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b8bdbba20f3_44844230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd131059b311f5fea872e6acd17abbf1177b94f1f' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addpage.html',
      1 => 1598786521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b8bdbba20f3_44844230 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>addpage</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addpage.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
</head>
<body>

    <div class="container">
        <form action="/htdocs/mvc/index.php/admin/category/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="one" class="col-sm-2 control-label">添加一级栏目:</label>
                <input id="one" class="form-control" type="text" placeholder="添加一级栏目" name="cname"/>
            </div>
            <div class="form-group">
                <label for="show" class="col-sm-2 control-label">是否可见:</label>
                <select class="form-control" name="isshow" id="show">
                    <option value="1">在导航可见</option>
                    <option value="0">在导航不可见</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mo" class="col-sm-2 control-label">对应模版:</label>
                <input id="mo" class="form-control" type="text" name="tpl_name" placeholder="输入对应模版">
            </div>
            <div class="form-group">
                <label for="cons" class="col-sm-2 control-label">栏目描述:</label>
                <textarea id="cons" name="info" class="form-control" rows="3"></textarea>
            </div>
            <input type="hidden" value="" name="imgurl">
    <!--        <iframe src="/htdocs/mvc/index.php/admin/category/upload" frameborder="0">-->
    <!--        </iframe>-->
<!--            <input type="file" name="file">-->
            <div class="upload">

            </div>
            <input class="btn-default" type="submit" value="添加">
        </form>
    </div>
    <?php echo '<script'; ?>
>
        var uploadObj = new upload();
        uploadObj.selectBtnCon = "选择图片";
        uploadObj.multiple = true;
        uploadObj.createView({
            parent: document.querySelector(".upload")
        })
        uploadObj.up("/htdocs/mvc/index.php/admin/category/uploadfile",function(event) {
            $("input[type=hidden]").val(event[0]);
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
