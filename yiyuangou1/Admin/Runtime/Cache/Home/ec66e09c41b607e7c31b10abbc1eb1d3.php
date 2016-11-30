<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>一元购</title>
    <link rel="stylesheet" type="text/css" href="/yiyuangou/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/yiyuangou/Public/css/main.css"/>
    <script type="text/javascript" src="/yiyuangou/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<?php include './public/index/index.html'; ?>
<div class="container clearfix">
    <!--/sidebar-->
   <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">管理员修改</span></div>
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
<form action="../../update_do" method="post">
    <table height="100px" height="1100px">
         <input type="hidden" name="id" value="<?php echo $arr['id']?>">
<tr>
                <td>姓名</td>
                <td><input type="text" name='admin_user' value="<?php echo $arr['admin_user']?>"required></td>
            </tr>
                                       <tr>
                                                   <td>密码</td>
                                                   <td><input type="password" name="admin_pwd" value="<?php echo $arr['admin_pwd']?>"></td>
                                       </tr>
            <tr>
                <td><input type="reset" value="取消"></td>
                <td><input type="submit" value="修改"></td>
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