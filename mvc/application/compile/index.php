<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
99999
    <?php foreach( $data as $v){ ?>
    <ul>
        <li>姓名：<?php echo $v['name']?></li>
        <li>年龄：<?php echo $v['age']?></li>
        <li>性别：<?php echo $v['sex']?></li>
    </ul>
    <?php } ?>
    <a href="index.php/teacher/teacher/add">添加日志</a>
</body>
</html>