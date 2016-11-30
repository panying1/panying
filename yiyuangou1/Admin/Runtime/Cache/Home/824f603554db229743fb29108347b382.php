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
    <!--/sidebar-->
    <div id="tabbody-div" style="float: left">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">添加商品</span></div>
        </div>

        <center>
 <form enctype="multipart/form-data" action="/admin.php/Home/Goods/add" method="post" name="theForm">
            <!--<input type="hidden" name="MAX_FILE_SIZE" value="2097152">-->

            <!-- 通用信息 -->
            <table width="90%" id="general-table" align="center" style="display: table;">
                <tbody>
                <tr>
                    <td class="label">商品名称：</td>
                    <td><input type="text" name="g_name" value="" size="30"><span class="require-field">*</span></td>
                </tr>

                <tr>
                    <td class="label">商品分类：</td>
                    <td>
                        <select name="cate_id">
                            <option value="0">顶级分类</option>
                             <?php foreach($list as $val){ ?>
                            <option value="<?php echo $val['goods_id']?>"><?php echo $val['goods_title'] ?> </option>
                            <?php }?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label">商品品牌：</td>
                    <td>
                        <select name="brand_id" onchange="hideBrandDiv()">
                            <option value="0">请选择...</option>
                            <?php foreach($arr as $val){ ?>
                            <option value="<?php echo $val['brand_id']?>"><?php echo $val['brand_title'] ?> </option>
                            <?php }?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="label">本店售价：</td>
                    <td><input type="text" name="goods_money" value="" size="20" onblur="priceSetted()">

                </tr>
                <!--<tr>-->
                <!--<td class="label">会员价格：</td>-->
                <!--<td><input type="text" name="user_price" value="" size="20" onblur="priceSetted()"></td>-->
                <!--</tr>-->

                <tr>
                    <td class="label">人数：</td>
                    <td><input type="text" name="partake_people" value="" size="20">

                    </td>
                </tr>

                <tr>
                    <td class="label"><label for="is_promote"><input type="checkbox" id="is_promote" name="is_promote" value="1" checked="checked" onclick="handlePromote(this.checked);"> 促销价：</label></td>
                    <td id="promote_3"><input type="text" id="promote_1" name="promote_price" value="" size="20"></td>
                </tr>
                <!--<tr id="promote_4">-->
                <!--<td class="label" id="promote_5">促销日期：</td>-->
                <!--<td id="promote_6">-->
                <!--<input name="promote_start_date" type="text" id="promote_start_date" size="12" value="" readonly="readonly"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');" value="选择" class="button"> - <input name="promote_end_date" type="text" id="promote_end_date" size="12" value="" readonly="readonly"><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');" value="选择" class="button">-->
                <!--</td>-->
                <!--</tr>-->
                <tr>
                    <td class="label">上传商品图片：</td>
                    <td>
                        <input type="file" name="filename" size="35">
                    </td>
                </tr>
                <tr id="auto_thumb_1">
                    <td class="label"> 上传商品缩略图：</td>
                    <td id="auto_thumb_3">
                        <input type="file" name="goods_photo" size="35" disabled="">
                        <a href="goods.php?act=show_image&amp;img_url=images/200905/thumb_img/32_thumb_G_1242110760196.jpg" target="_blank"><img src="images/yes.gif" border="0"></a>
                        <br><input type="text" size="40" value="" style="color:#aaa;" onfocus="if (this.value == '商品缩略图外部URL'){this.value='http://';this.style.color='#000';}" name="goods_thumb_url" disabled="">
                        <br><label for="auto_thumb"><input type="checkbox" id="auto_thumb" name="auto_thumb" checked="true" value="1" onclick="handleAutoThumb(this.checked)">自动生成商品缩略图</label>            </td>
                </tr>
                </tbody></table>
               <div class="button-div">
                <!--<input type="hidden" name="goods_id" value="32">-->
                <input type="submit" value=" 确定 " class="button" onclick="validate('32')">
                <input type="reset" value=" 重置 " class="button">
            </div>
            <!--<input type="hidden" name="act" value="update">-->
        </form>
        </center>
    </div>

    <!--/main-->

</div>
</body>
</html>