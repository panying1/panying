<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>一元购</title>
    <link rel="stylesheet" type="text/css" href="/shiyi/yiyuangou/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shiyi/yiyuangou/Public/css/main.css"/>
    <script type="text/javascript" src="/shiyi/yiyuangou/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">

                <li><a href="">一元购</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">杨立新</a></li>
                <li><a href="">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>用户</a>
                    <ul class="sub-menu">
                        <li><a href=""><i class="icon-font">&#xe012;</i>个人资料</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>商品列表</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('goods/show')?>"><i class="icon-font">&#xe017;</i>添加商品</a></li>
                        <li><a href="<?php echo U('goods/select')?>"><i class="icon-font">&#xe017;</i>商品列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>图片</a>
                    <ul class="sub-menu">
                        <li><a href="i"><i class="icon-font">&#xe012;</i>图片上传</a></li>
                        <li><a href=""><i class="icon-font">&#xe012;</i>图片展示</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div id="tabbody-div" style="float: right">
        <center>
             <form enctype="multipart/form-data" action="/shiyi/yiyuangou/admin.php/Home/Goods/update" method="post" name="theForm">
                <!--<input type="hidden" name="MAX_FILE_SIZE" value="2097152">-->

                <!-- 通用信息 -->

                <table width="90%" id="general-table" align="center" style="display: table;">
                    <input type="hidden" name="g_id" value="<?php echo $arr['g_id']?>"/>
                    <tbody>
                    <tr>
                        <td class="label">商品名称：</td>
                        <td><input type="text" name="g_name"  value="<?php echo $arr['g_name']?>" size="30"><span class="require-field">*</span></td>
                    </tr>

                    <tr>
                        <td class="label">商品分类：</td>
                        <td>
                            <select name="cate_id" value="<?php echo $arr['cate_id']?>">
                                <option value="0">顶级分类</option>
                                <option value="1">电视</option>
                                <option value="2">手机</option>
                                <option value="3">电脑</option>


                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">商品品牌：</td>
                        <td>
                            <select name="brand_id" value="<?php echo $arr['brand_id']?>" onchange="hideBrandDiv()">
                                <option value="0">请选择...</option>
                                <?php foreach($arr as $val){ ?>
                                <option value="<?php echo $val['brand_id']?>"><?php echo $val['brand_name'] ?> </option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="label">本店售价：</td>
                        <td><input type="text" name="goods_money" value="<?php echo $arr['goods_money']?>" size="20" onblur="priceSetted()">

                    </tr>
                    <!--<tr>-->
                    <!--<td class="label">会员价格：</td>-->
                    <!--<td><input type="text" name="user_price" value="" size="20" onblur="priceSetted()"></td>-->
                    <!--</tr>-->

                    <tr>
                        <td class="label">人数：</td>
                        <td><input type="text" name="partake_people"  value="<?php echo $arr['partake_people']?>" size="20">

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

                    </tbody></table>
                <div class="button-div">
                    <!--<input type="hidden" name="goods_id" value="32">-->
                    <input type="submit" value="修改" class="button" onclick="validate('32')">
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