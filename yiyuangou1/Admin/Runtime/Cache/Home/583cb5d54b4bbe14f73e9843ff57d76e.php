<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人博客(后台管理)</title>
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

                <li><a href="?r=index/index">个人博客</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#"></a></li>
                <li><a href="index.php?r=index/out">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            管理中心
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                 <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>用户</a>
                    <ul class="sub-menu"> 
                        <li><a href=""><i class="icon-font">&#xe012;</i>个人资料</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>微博发布</a>
                    <ul class="sub-menu">
                        <li><a href=""><i class="icon-font">&#xe017;</i>发布新文章</a></li>
                        <li><a href=""><i class="icon-font">&#xe017;</i>查看文章列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>图片</a>
                    <ul class="sub-menu"> 
                        <li><a href=""><i class="icon-font">&#xe012;</i>图片上传</a></li>
                        <li><a href=""><i class="icon-font">&#xe012;</i>图片展示</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>>   <!--/sidebar-->
   <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">企业设置</span></div>
        </div>
        
        <div class="result-wrap">
            
                <div class="result-title">
                    <div class="result-list">
                        
                    </div>
                </div>
                <div class="result-content">
                 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php?r=index/add_do" method="post">
    <table>
        <tr>
        <th>文章标题：</th>
            <td>
                <input type="radio" name="w_sex" id="" value="原创" required>原创
                <input type="radio" name="w_sex" id="" value="转载" required>转载
                <input type="radio" name="w_sex" id="" value="译文" required>译文
                <input type="text" name="w_title" required>
            </td>
        </tr>
        <tr>
            <th>文章内容：</th>
            <td>
                <textarea name="w_con" id="" cols="45" rows="10" required></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="发布"></td>
            <td><input type="reset" value="重置"></td>
        </tr>
    </table>
    </form>
</body>
</html>
                    
                </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>