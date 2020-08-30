<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:03:18
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b95864c2db2_13619041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e711c3cc0661d8249b8612cd53111e1357dbe410' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/category.html',
      1 => 1598788996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b95864c2db2_13619041 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>category</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
    <style>
        .container {
            margin-top: 30px;
        }
        .add {
            margin-bottom: 20px;
        }
        .panel {
            display: none;
            width: 40%;
            background-color: #fff;
            box-shadow: 0 0 4px #000;
            position: absolute;
            left: 0;
            right: 0;
            top: 15%;
            margin: auto;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <table class="table table-bordered">
            <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </table>
        <?php } else { ?>
        <table class="table table-bordered">
            <tr>
                <td>层级</td>
                <td>分类名称</td>
                <td>操作</td>
            </tr>
            <tr>
                <td colspan="3" align="center">无数据</td>
            </tr>
        </table>
        <?php }?>
    </div>
    <!--添加-->
    <div class="panel addpanel container" style="width: 60%;">
        <div class="close">✖</div>
        <form action="/htdocs/mvc/index.php/admin/category/add/" method="post">
            <div class="form-group">
                <label for="add" class="col-sm-2 control-label">添加栏目:</label>
                <input id="add" type="text" class="form-control" name="cname" placeholder="添加项目">
            </div>
            <input type="hidden" name="cid">
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
            <input type="submit" value="提交">
        </form>
    </div>
    <!--修改-->
    <div class="panel editpanel" style="width: 60%;">
        <div class="close">✖</div>
        <form action="" method="post">
            <div class="form-group">
                <label for="cons" class="col-sm-2 control-label">栏目名称:</label>
                <input id="cname" type="text" name="cname" placeholder="添加项目" class="form-control">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="opts" class="col-sm-2 control-label">栏目种类:</label>
                    <select class="form-control" id="opts" name="pid">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="isshow" class="col-sm-2 control-label">是否可见:</label>
                <select id="isshow" class="form-control" name="isshow">
                    <option value="1">在导航可见</option>
                    <option value="0">在导航不可见</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tpl_name" class="col-sm-2 control-label">栏目模版:</label>
                <input id="tpl_name" class="form-control" type="text" name="tpl_name" placeholder="输入对应模版">
            </div>
            <div class="form-group">
                <label for="detail" class="col-sm-2 control-label">栏目描述:</label>
                <textarea id="detail" name="info" class="form-control" rows="3"></textarea>
            </div>
            <input type="hidden" value="" name="imgurl">
            <div class="editupload"></div>
            <input type="button" value="修改">
        </form>
    </div>
    <?php echo '<script'; ?>
>
        var uploadObj = new upload();
        uploadObj.selectBtnCon = "选择图片";
        uploadObj.multiple = true;
        uploadObj.createView({
            parent: document.querySelector(".editupload")
        })
        uploadObj.selectBtn.parentNode.style.lineHeight="50px";
        uploadObj.upBtn.style.lineHeight="50px";
        uploadObj.up("/htdocs/mvc/index.php/admin/category/uploadfile",function(event) {
            $("input[type=hidden]").val(event[0]);
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
