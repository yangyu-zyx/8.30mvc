<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:33:19
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b563f3d3382_33668919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efa88b34d9377a2df1732017a207f25d4340cafe' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/upload.html',
      1 => 1598772796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b563f3d3382_33668919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
    <form action="/htdocs/mvc/index.php/admin/category/uploadfile" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">选择文件</label>
            <input type="file" id="file" name="file">
        </div>
        <input type="submit" value="上传图片">
    </form>
</body>
</html><?php }
}
