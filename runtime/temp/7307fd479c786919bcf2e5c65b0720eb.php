<?php /*a:1:{s:50:"E:\PHP\TP5\application\index\view\index\index.html";i:1554671508;}*/ ?>
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

    <div>
        加密：<?php echo htmlentities(md5($code)); ?>
    </div>
    <div>加密：<?php echo md5($code); ?></div>
    <div>加密：<?php echo webmd5($code); ?></div>

    <script>
        
        let json = {'name': '{$code}'}
        
    </script>
</body>
</html>