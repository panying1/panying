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
<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">友情链接</span></div>
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
                <center>
                    <form action="/admin.php/Home/Order/lianjie_add" method="post">
                        <table height="300px">
                            <tr>
                                <td>链接名称</td>
                                <td><input type="text" name='title' required></td>
                            </tr>
                            <tr>
                                <td>链接地址</td>
                                <td><input type="text" name='url' required></td>
                            </tr>
                            <tr>
                                <td><input type="reset" value="取消"></td>
                                <td><input type="submit" value="提交"></td>
                            </tr>
                        </table>
                    </form>
                </center>
                </body>
                </html>

            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>