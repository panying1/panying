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
    <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">商品</span></div>
</div>
商品名称：<input type="text" id="search1" name="search1"/>
商品人数:<input type="text"  id="search2" name="search2"/>
<input type="button" id="btn" value="搜索"/>
<table  border="3" height="100" width="1000" class="tab">
            <tbody >
            <tr>
                <th><input type="checkbox">编号</th>
                <th>商品名称</th>
                <th>价格</th>
                <th>人数</th>
                <th>上架</th>
                <th>图片</th>
                <th>操作</th>
            </tr>
            <?php foreach($list as $key=>$val){?>
            <tr>
                <td><input type="checkbox" name="checkboxes[]" value="32"><?php echo $val['g_id']?></td>
                <td class="first-cell"><?php echo $val['g_name']?></td>
                <td align="right"><?php echo $val['goods_money']?></td>
                <td align="right"><?php echo $val['partake_people']?></td>
                <td align="center">
                    <?php if($val['goods_status']==0){?>
                    <img src="/Public/images/no.gif"  c_id="<?php echo $val['g_id']?>" >
                    <?php }else{?>
                    <img src="/Public/images/yes.gif"   c_id="<?php echo $val['g_id']?>" >
                    <?php }?>
                </td>
                <td><img src="/<?php echo ($val["filename"]); ?>" alt="" width="50" height="50"/></td>
                <td><a href="/admin.php/Home/Goods/up?id=<?php echo ($val["g_id"]); ?>" >修改</a></td>
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
</div>
</body>
</html>
    <!--/main-->
<script src="/Public/js/js.js"></script>
<script>
    $(function(){
        $("#btn").click(function(){
            var search1 = $("#search1").val();
            var search2 = $("#search2").val();
            //发送AJAX请求
            $.ajax({
                url:"/admin.php/Home/Goods/sou",
                data:{search1:search1,search2:search2},
                type:"POST",
                success:function(msg) {
                    //alert(msg)
                    msg= eval(msg);
                    var str="<tr>" +
                            "<td>商品编号</td>"+
                            "<td>商品名称</td>"+
                            "<td>价格</td>"+
                            "<td>人数</td>"+
                            "<td>图片</td>"+
                            "<td>上架</td>"+
                            "<td>操作</td>"+
                            "</tr> ";
                    for(var i=0;i<msg.length;i++){
                        str+="<tr>" +
                        "<td>"+msg[i].g_id+"</td>" +
                        "<td>"+msg[i].g_name+"</td>" +
                        "<td>"+msg[i].goods_money+"</td>" +
                        "<td>"+msg[i].partake_people+"</td>" +
                        "<td><img src="+msg[i].filename+" height='50' width='50'/>";
                        if(msg[i].goods_status==0){
                            str+='<td> <img src="/Public/images/no.gif"><td>'
                        }else{
                            str+='<td> <img src="/Public/images/no.gif"><td><td>'
                        }
                        str+="</tr>";
                    }
                   $('.tab').html(str);
                }
            })
        })
    })
</script>