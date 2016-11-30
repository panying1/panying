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
                    <a href="#"><i class="icon-font">&#xe003;</i>地址管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('goods/adress')?>"><i class="icon-font">&#xe012;</i>添加地址</a></li>
                        <li><a href="<?php echo U('goods/adress_list')?>"><i class="icon-font">&#xe012;</i>地址展示</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->

    <form name="ModelForm" action="/shiyi/yiyuangou/admin.php/Home/Goods/xiu" method="post">

        <div class="content_box">
            <div class="content form_content">
                <table id="tab-1" class="form_table" name="table">
                    <input type="hidden" name="id" value="<?php echo $arr['id']?>"/>

                    <col width="150px" />
                    <col />
                    <tr>
                        <th>发货点名称：</th>
                        <td><input class="normal" name="ship_name" type="text"  value="<?php echo $arr['ship_name']?>" alt="发货点名称"/><label>*发货地点名称</label></td>
                    </tr>
                    <tr>
                        <th>发货人姓名：</th>
                        <td><input class="normal" name="ship_user_name" type="text"  value="<?php echo $arr['ship_user_name']?>" alt="发货人姓名"/><label>*发货人名称</label></td>
                    </tr>
                    <tr>
                        <th>性别：</th>
                        <td><label class='attr'><input type="radio" name="sex" value="1" checked/>先生</label><label class='attr'><input type="radio" name="sex" value="0" {if:$ship['sex']==0}checked='checked'{/if}/>女士</label><label>*</label></td>
                    </tr>
                    <tr>
                        <th>*公司所在区域</th>
                        <th>
                            <select id="province" runat="server" name="province" value="<?php echo $arr['province']?>">
                            </select>
                            <select id="city" runat="server" name="city" value="<?php echo $arr['city']?>">
                            </select>
                            <select id="county" runat="server" name="county" value="<?php echo $arr['county']?>">
                            </select>
                        </th>

                    </tr>
                    <tr>
                        <th>地址：</th>
                        <td><input class="normal" name="address" type="text" value="<?php echo $arr['address']?>" alt="具体地址错误"/><label>*具体地址</label></td>
                    </tr>
                    <tr>
                        <th>邮编：</th>
                        <td><input class="normal" name="postcode" type="text"  value="<?php echo $arr['postcode']?>" empty alt="邮编错误"/><label>邮政编码</label></td>
                    </tr>
                    <tr>
                        <th>手机：</th>
                        <td><input class="normal" name="mobile" type="text" value="<?php echo $arr['mobile']?>"/><label>*手机号码</label></td>
                    </tr>
                    <tr>
                        <th>电话：</th>
                        <td><input class="normal" name="telphone" type="text" value="<?php echo $arr['telphone']?>"  empty alt="电话号码错误"/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class="submit" type="submit" value="提交"></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <!--/main-->

</div>
</body>
</html>
<script type="text/javascript" src="/shiyi/yiyuangou/Public/js/area.js"></script>
<script type="text/javascript">
    setup()

</script>