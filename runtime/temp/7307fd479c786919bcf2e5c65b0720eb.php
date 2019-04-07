<?php /*a:1:{s:50:"E:\PHP\TP5\application\index\view\index\index.html";i:1554669328;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlentities($webName); ?></title>
</head>
<body>
    <h3>PHP 我的最爱</h3>
    <h3>我是一个变量： <?php echo htmlentities($a); ?></h3>
    <hr>
    <ul>
        <li>id：<?php echo htmlentities($arr['id']); ?></li>
        <li>姓名：<?php echo htmlentities($arr['name']); ?></li>
    </ul>
</body>
</html>