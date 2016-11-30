<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>一元购</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/main.css"/>
    <script type="text/javascript" src="/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<?php include './public/index/index.html'; ?>
<div class="crumb-wrap">
    <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">地址列表</span></div>
</div>

<!--/sidebar-->
    <table  border="3" height="100" width="1000" class="tab">
        <tbody >
        <tr>
            <th><input type="checkbox">编号</th>
            <th>发货点名称</th>
            <th>发货人姓名</th>
            <th>地区</th>
            <th>性别</th>
            <th>地址</th>
            <th>邮编</th>
            <th>手机</th>
            <th>电话</th>
            <th>操作</th>
        </tr>
        <?php foreach($list as $key=>$val){?>
        <tr>
            <td><input type="checkbox" name="checkboxes[]" value="32"><?php echo $val['id']?></td>
            <td class="first-cell"><?php echo $val['ship_name']?></td>
            <td align="right"><?php echo $val['ship_user_name']?></td>
            <td align="right"><?php echo $val['d_id']?></td>
            <td align="center">
                <?php if($val['sex']==0){?>
                 男
                <?php }else{?>
                 女
                <?php }?>
            </td>
            <td align="right"><?php echo $val['address']?></td>
            <td align="right"><?php echo $val['postcode']?></td>
            <td align="right"><?php echo $val['mobile']?></td>
            <td align="right"><?php echo $val['telphone']?></td>
            <td><a href="/admin.php/Home/Goods/uplist?id=<?php echo ($val["id"]); ?>" >修改</a></td>
        </tr>
        <?php }?>
        <!-- start 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->

        </tbody>
    </table>
    <!-- end goods list -->

    <!-- 分页 -->
    <table id="page-table" cellspacing="0">
        <tbody>
        <?php echo ($page); ?>
        </tbody>
    </table>
    <!--/main-->

</div>
</body>
</html>