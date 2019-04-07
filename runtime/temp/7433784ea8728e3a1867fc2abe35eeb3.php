<?php /*a:1:{s:47:"E:\PHP\TP5\application\index\view\tt\index.html";i:1554672662;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
</head>
<body>
    <ul>
       <!-- <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><?php echo htmlentities($vo['id']); ?>&#45;&#45;<?php echo htmlentities($vo['name']); ?></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>-->

        <?php foreach($data as $val): ?>
        <li><?php echo htmlentities($val['id']); ?>---<?php echo htmlentities($val['name']); ?></li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <h3>条件判断</h3>
    <div>
        <?php if($age < 10): ?> 儿童
        <?php elseif($age<30): ?> 青年
        <?php else: ?> 中年
        <?php endif; ?>
    </div>
</body>
</html>