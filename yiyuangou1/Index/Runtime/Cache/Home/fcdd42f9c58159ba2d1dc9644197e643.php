<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>用户中心 - 弘讯云购</title>
    <meta name="description" content="弘讯云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。" />
    <meta name="keywords" content="弘讯云购,1元云购,1元,一元,1元购,1元购物,一元购,一元购物" />
    <link href="/Public/index/css/oenpay.css" rel="stylesheet">
    <link href="/Public/index/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/dist/webuploader.css" />
	<link href="/Public/index/css/user.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/jcrop/jquery.Jcrop.min.css" />
    <!--[if lt IE 8]>
	<style type="text/css">
		.searchs {float:left;width:620px}
		.searchs>form {float:left;width:608px;height:35px;display:block}
		.searchs>.hot-search {float:left;display:block;width:608px}
	</style>
	<![endif]-->
  </head>
  <body>
  	<!--[if lt IE 9]>
  	<div class="chrome">您的浏览器版本太低啦~请升级您的浏览器。本站推荐<a href="http://liulanqi.baidu.com/" class="a1" target="_blank">百度浏览器</a> <a href="http://liulanqi.baidu.com/" class="a1" target="_blank">点击下载</a></div>
<![endif]-->
<div class="top-line">
    <div class="g-wrap">
        <div class="tl-left">欢迎来到一元云购!</div>
        <div class="tl-right">
            <a href=""><?php if(session("?username")){?>
                    <a href="<?php echo U('user/index')?>"><font color='red'><?php echo $_SESSION['username']; ?></font></a><a href="<?php echo U('login/loginout')?>">[退出]</a>
                    <?php }else{?>
                    <a href="<?php echo U('login/login')?>">请登录</a><a href="<?php echo U('reg/reg')?>">免费注册</a>
                    <?php }?></a>
            		
        </div>
    </div>
</div>
<div class="top-back">
	<!-- LOGO 开始 -->
  	<div class="container">
		<div class="logos">
			<div class="logo"><img src="/Public/index/imgs/logo.png" /></div>
			<div class="top-people"></div>
		</div>
  	</div>
	<!-- LOGO 结束 -->
	<!-- 导航开始 -->
	<div class="navbar category">
		<div class="container sNav">
			<div class="navbar-all-class class-hidden">
  				<a href="#">全部商品分类</a>
  				<div class="left-class left-cl-hidden">
	  				<a href="/weiyigou/index.php?s=/list/index"><span class="icon icon-star-empty"></span>全部商品</a>
	  				<a href="/weiyigou/index.php?s=/list/index/id/4"><span class="icon icon-tablet"></span>手机平板</a><a href="/weiyigou/index.php?s=/list/index/id/8"><span class="icon icon-desktop"></span>电脑办公</a><a href="/weiyigou/index.php?s=/list/index/id/9"><span class="icon icon-camera-1"></span>数码影音</a><a href="/weiyigou/index.php?s=/list/index/id/10"><span class="icon icon-women"></span>女性时尚</a><a href="/weiyigou/index.php?s=/list/index/id/11"><span class="icon icon-food"></span>美食天地</a><a href="/weiyigou/index.php?s=/list/index/id/12"><span class="icon icon-fashion"></span>潮流新品</a><a href="/weiyigou/index.php?s=/list/index/id/13"><span class="icon icon-th"></span>其他商品</a>				</div>
  			</div>
            <?php if(is_array($guide)): $i = 0; $__LIST__ = $guide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="navbar-class"><a href="/index.php/Home/<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
	</div>
</div>
	  	<!-- 导航结束 -->
		<div class="top-backs">
	  	<div class="container">
			<!-- 所在位置 - 开始 -->
			<div class="w-dir"><a href="/index.php/Home/index/index">首页</a> &gt; 个人中心</div>
			<!-- 所在位置 - 结束 -->

			<!-- 用户信息 - 开始 -->
			<div class="user-info">
				
				<div class="user-face">
					<div class="user-faceEdit">点击编辑头像</div>
					<img src="/<?php echo $list['img']?>">
				</div>
				<div class="user-data">
					<ul>
						<li id="setname" data-uid="101600">
							<h3><?php echo $list['username']?></h3><i class="user-data-inputs"><input type="text" value="<?php echo $list['username']?>"></i> <b class="useredit-name"><a href="javascript:void(0)" url="<?php echo U('user/set_username')?>" class="a3">编辑</a></b>
						</li>
						<li>
							帐号：<?php echo $list['username']?><b class="password"><a href="#" class="a3">修改密码</a></b>
						</li>
							账户余额：<span class="red"><?php echo $arr['price']?></span> 弘讯币</li>
						<li>
							<a href="<?php echo U('user/recharge')?>" class="btn btn-pink">立即充值</a>
						</li>
					</ul>
				</div>

			</div>
			<!-- 用户信息 - 结束 -->
	  	</div>
	</div>

  	<div class="container">
		<div class="product-nav-t">
			<ul class="tabs-tab">
				<li class="current">夺宝记录</li>
				<li>中奖记录</li>
				<li>我的晒单</li>
				<li>邀请记录</li>
				<li>联系地址</li>
				<li>充值记录</li>
			</ul>
			<div class="product-content">
				<!-- 夺宝记录开始 -->
				<div class="tabs-panel-item">	
					<div class="user-duobao-list">
						<div class="m-user-day">
							<a href="javascript:void(0)" class="label label-red" state="">全部</a>
							<a href="javascript:void(0)" state="1">即将揭晓商品</a>
							<a href="javascript:void(0)" state="0">进行中的商品</a>
							<a href="javascript:void(0)" state="2">已揭晓商品</a>
						</div>
						<div class="recordsScrollbar">
						<table class="w-table">
					        <thead>
					            <tr>
					                <th>商品图片</th>
					                <th>商品名称</th>
					                <th>商品期号</th>
					                <th>夺宝状态</th>
					                <th>参与人次</th>
					                <th>操作</th>
					            </tr>
					        </thead>
					        <tbody id='records' url="/weiyigou/index.php?s=/user/records">
					        	
					        </tbody>
					    </table>
						</div>
					</div>
				</div>
				<!-- 夺宝记录结束 -->

				<!-- 中奖记录开始 -->
				<div class="tabs-panel-item t-left lotteryScrollbar">
					<div class="goodsList lottery-list" url="/weiyigou/index.php?s=/user/lottery">
						{{if {{shop_express_no}}}}
							<div class="fahuo active">
								已发货
							</div>
						{{/if}}
						<div class="goodsimg"><a href="{{shop_url}}"><img class="notimg" src="{{shop_pic}}"></a></div>
						<h3><a href="{{shop_url}}">{{shop_name}}</a></h3>
						{{if {{shop_express_no}}}}
							<p>物流名称：{{shop_express_name}}</p>
							<p>货运单号：{{shop_express_no}}</p>
						{{/if}}
						<p>总需：{{shop_price}}人次</p>
						<p>期号：{{shop_no}}</p>
						<p>幸运号码：<b class="red">{{shop_kaijang_num}}</b></p>
						<p>总共参与：<b>{{shop_count}}</b>人次</p>
						<p>揭晓时间：{{shop_kaijang_time}}</p>
						<div class="shaderla">
							<a href="/user/shared/pid/{{shop_pid}}" class="shade-icons">
								<span><i class="icon icon-camera-1"></i></span>
								<b>晒单</b>
							</a>
						</div>
					</div>
				</div>
				<!-- 中奖记录结束 -->

				<!-- 晒单开始 -->
				<div class="tabs-panel-item shareScrollbar">
					<div class="detail-shareList">
						<ul class="share-list" url="/weiyigou/index.php?s=/user/displays/uid/101600">
							<li class="user-images"><img class="notimg" src="{{shop_img}}"></li>
							<li class="sharenav">
								<h5><a href="{{shop_user_url}}">{{shop_name}}</a></h5>
								<div class="share-time">{{shop_shared_time}}</div>
								<a href="{{shop_url}}" class="text">{{shop_content}}</a>
								<a href="{{shop_url}}">
								<div class="share-img each">
									<span class="share-center"></span><img class="notimg" src="{{shop_thumbpic}}">
								</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- 晒单结束 -->

				<!-- 推广记录开始 -->
				<div class="tabs-panel-item" style="display: none">
					<div class="user-duobao-list">
						<div class="m-user-title">
							<a href="#" class="activea">邀请好友</a>
							<a href="#" class="">佣金明细</a>
							<a href="#" class="">提现申请</a>
							<a href="#" class="">提现记录</a>
						</div>
						<div class="tg-content">
						<!-- 邀请好友开始 -->
						<div class="tabs-nav-item">
							<h3 class="b-title ">邀请好友</h3>
							<div class="big-title">复制链接邀请好友，现金奖励等你拿！</div>
							<div class="input-group">
								<p>1元就能买IPhone 6哦，快去看看吧！?id=101600</p>
								<a class="invite_act" onclick="copyText(document.all.invite_title)" href="javascript:;">复制链接</a>
							</div>
							<div class="labers-yellow">成功邀请 <span class="red invite_count">0</span> 位会员注册</div>
							<div class="inviteScrollbar">
								<table class="w-table">
							        <thead>
							            <tr>
							                <th>用户名</th>
							                <th>时间</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr id='invite' url="/weiyigou/index.php?s=/user/invite">
							        		<td class="col2"><img src="{{shop_user_pic}}" style="width: 40px;vertical-align: middle;margin-right:10px"><a href="{{shop_user_url}}" target="_blank">{{shop_user}}</a></td>
							        		<td class="col1">{{shop_time}}</td>
							        	</tr>
							        </tbody>
							    </table>
							</div>
						</div>
						<!-- 邀请好友结束 -->

						<!-- 佣金明细开始 -->
						<div class="tabs-nav-item" style="display: none">
							<h3 class="b-title">佣金明细</h3>
							<div class="labers-yellow mt15">
								<span class="mr15">累计收入：<span class="red">0</span>元</span>
								<span class="mr15">累计(提现/充值)：<span class="red">0.00</span>元</span>
								<span class="mr15">佣金余额：<span class="red">0.00</span>元</span>
								<a class="labes labes-blue mentionbtn">申请提现</a>
								<a class="labes labes-orgen rechargebtn">充值到我的账户</a>
								<br>
								佣金余额可实时充值到您的帐户，满100元时才可申请提现。
							</div>
							<div class="m-user-day">
								<a href="javascript:void(0)" class="label label-red" c_type="">全部</a>
								<a href="javascript:void(0)" c_type="1">今天</a>
								<a href="javascript:void(0)" c_type="2">本周</a>
								<a href="javascript:void(0)" c_type="3">本月</a>
							</div>
							<div class="commissionScrollbar">
								<table class="w-table">
							        <thead>
							            <tr>
							                <th>用户名</th>
							                <th>时间</th>
							                <th>描述</th>
							                <th>金额(元)</th>
							                <th>佣金(元)</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr id='commission' url="/weiyigou/index.php?s=/user/commission">
							        		<td class="col1"><img src="{{shop_img}}" style="width: 40px;vertical-align: middle;margin-right:10px"><a href="{{shop_user_url}}" target="_blank">{{shop_name}}</a></td>
							        		<td class="col1">{{shop_create_time}}</td>
							        		<td class="col2">{{shop_shop_name}}(第{{shop_shop_no}}期)</td>
							        		<td class="col1">{{shop_number}}元</td>
							        		<td class="col1 red">{{shop_money}}元</td>
							        	</tr>
							        </tbody>
							    </table>
							</div>
						</div>
						<!-- 佣金明细结束 -->
						
						<!-- 提现申请开始 -->
						<div class="tabs-nav-item" style="display: none">
							<h3 class="b-title">提现申请</h3>
							<div class="labers-yellow mt15">
								<span class="mr15">累计收入：<span class="red">0</span>元</span>
								<span class="mr15">累计(提现/充值)：<span class="red">0.00</span>元</span>
								<span class="mr15">佣金余额：<span class="red">0.00</span>元</span>
								<a class="labes labes-orgen rechargebtn">充值到我的账户</a>
								<br>
								佣金余额可实时充值到您的帐户，满100元时才可申请提现。
							</div>
							<table class="w-table address-tr">
								<form action="/weiyigou/index.php?s=/user/mention" class="form-mention" method="post">
						        <tbody>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>提现金额：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="money" id="withraw-money" value="" placeholder="申请提现金额">元
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>手机号码：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="phone" id="withraw-phone" value="" placeholder="如：138****678">
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>开户人：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="account" id="withraw-account" value="" placeholder="姓名 如：张三">
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>银行名称：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="bank" id="withraw-bank" value="" placeholder="银行 如：中国工商银行">
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>开户支行：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="branch" id="withraw-branch" value="" placeholder="需具体到省市">
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"><span class="red">*</span>银行帐号：</td>
						        		<td width="90%" class="adrs" align="left">
						        			<input type="text" name="bank_number" id="withraw-bank_number" value="" placeholder="如：1234 5618 1234 5678 123">
						        		</td>
						            </tr>
						        	<tr>
						        		<td width="10%" align="right"></td>
						        		<td width="90%" class="adrs" align="left">
						        			<button class="mention btn btn-red ajax-post" target-form="form-mention" type="submit">申请提现</button>
						        		</td>
						            </tr>
						        </tbody>
						        </form>
						    </table>
						</div>
						<!-- 提现申请结束 -->

						<!-- 提现记录开始 -->
						<div class="tabs-nav-item" style="display: none">
							<h3 class="b-title ">提现记录</h3>
							<div class="m-user-day">
								<a href="javascript:void(0)" class="label label-red" time_type="">全部</a>
								<a href="javascript:void(0)" time_type="1">今天</a>
								<a href="javascript:void(0)" time_type="0">本周</a>
								<a href="javascript:void(0)" time_type="2">本月</a>
							</div>
							<div class="mention_listScrollbar">
								<table class="w-table">
							        <thead>
							            <tr>
							                <th>申请时间</th>
							                <th>类型</th>
							                <th>提现金额(元)</th>
							                <th>审核状态</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr id='mention_list' url="/weiyigou/index.php?s=/user/mention_list">
							        		<td class="col1">{{shop_time}}</td>
							        		<td class="col1">{{shop_type}}</td>
							        		<td class="col1 orgen">{{shop_money}} 元</td>
							        		<td class="col1 red">{{shop_pay_state}}</td>
							        	</tr>
							        </tbody>
							    </table>
							</div>
						</div>
						</div>
						<!-- 提现记录结束 -->
					</div>
				</div>
				<!-- 推广记录结束 -->

				<!-- 收货地址开始 -->
				<div class="tabs-panel-item">
					<div class="user-duobao-list">
						<div class="m-user-title"><a href="#" class="active">收货地址</a></div>
						<div class="address-left"><button class="btn btn-green address_add">添加地址</button></div>
						<table class="w-table address-tr" style="display: none;">
							<form action="<?php echo U('user/address_add')?>" class="form-address" method="post">
					        <tbody id="city">
					        	<tr>
					        		<td width="10%" align="right"><span class="red">*</span>收  货 人：</td>
					        		<td width="90%" class="adrs" align="left">
					        			<input type="text" name="nickname" value="" placeholder="收货人姓名">
					        		</td>
					            </tr>
					        	<tr>
					        		<td width="10%" align="right"><span class="red">*</span>手机号码：</td>
					        		<td width="90%" class="adrs" align="left">
					        			<input type="text" name="tel" value="" placeholder="联系您的电话">
					        		</td>
					            </tr>
					        	<tr>
					        		<td width="10%" align="right"><span class="red">*</span>所在地区：</td>
					        		<td width="90%" class="adrs" align="left">
					        			<select name="province" class="prov">
					        			</select> - 
					        			<select name="city" class="city" disabled="disabled">
					        			</select> -
					        			<select name="dist" class="dist" disabled="disabled">
					        			</select>
					        		</td>
					            </tr>
					        	<tr>
					        		<td width="10%" align="right"><span class="red">*</span>街道地址：</td>
					        		<td width="90%" class="adrs" align="left">
					        			<input type="text" name="address" value=""  type="text" placeholder="请勿重复填写省市区">
					        		</td>
					            </tr>
					        	<tr>
					        		<td width="10%" align="right"></td>
					        		<td width="90%" class="adrs" align="left">
					        			<input type="checkbox" name="default" value="1"> 设置为默认收货地址
					        		</td>
					            </tr>
					        	<tr>
					        		<td width="10%" align="right"></td>
					        		<td width="90%" class="adrs" align="left">
					        			<!-- <button class="btn btn-red ajax-post" callback="address_call()" target-form="form-address" type="submit">确定添加</button> -->
					        			<input type="submit" callback="address_call()" class="btn btn-red ajax-post" value="确定添加">
					        		</td>
					            </tr>
					            <input name="id" type="hidden" value="">
					        </tbody>
					        </form>
					    </table>

					    <div class="backpage"><b>已保存地址：<small>最多保存5个收货地址</small></b></div>

						<table class="w-table">
					        <thead>
					            <tr>
					                <th>收货人</th>
					                <th>联系电话</th>
					                <th><p>所在地区</p></th>
					                <th>街道地址</th>
					                <th>默认地址</th>
					                <th>操作</th>
					            </tr>
					        </thead>
					        <tbody id="address">
					        	<?php foreach ($lists as $v) {?>
					        		<tr>
					        			<td><?php echo $v['nickname']?></td>
					        			<td><?php echo $v['tel']?></td>
					        			<td>
					        				<?php echo $v['province']?>
					        				<?php echo $v['city']?>
					        				<?php echo $v['dist']?>
					        			</td>
					        			<td><?php echo $v['address']?></td>
					        			<td>
					        				<?php if($v['default']==1){?>
					        				默认地址
					        				<?php }else{?>
					        				设置默认地址
					        				<?php }?>
					        			</td>
					        			<td>
					        				<a href="<?php echo U('user/delete',array('id'=>$v['id']));?>">删除</a>
					        				<a href="javascript:void(0)" class="a3 nblist edit" >修改</a>
					        			</td>
					        		</tr>
					        	<?php }?>
					        </tbody>
					    </table>
					</div>

				</div>
				<!-- 收货地址结束 -->

				<!-- 充值记录开始 -->
				<div class="tabs-panel-item">
					<div class="user-duobao-list">
						<div class="m-user-title"><a href="#" class="active">充值记录</a></div>
						<div class="m-user-day">
							<a href="javascript:void(0)" class="label label-red" paydate="">全部</a>
							<a href="javascript:void(0)" paydate="1">今天</a>
							<a href="javascript:void(0)" paydate="2">本周</a>
							<a href="javascript:void(0)" paydate="3">本月</a>
						</div>
						<div class="rechargeScrollbar">
						<table class="w-table">
					        <thead>
					            <tr>
					                <th>交易号</th>
					                <th>购买时间</th>
					                <th>支付通道</th>
					                <th>支付类型</th>
					                <th>金额（元）</th>
					                <th>获得欢乐币（个）</th>
					                <th>充值状态</th>
					            </tr>
					        </thead>
					        <tbody id='recharge' url="/weiyigou/index.php?s=/user/recharge_list">
					        	<tr>
					        		<td>111</td>
					        		<td>111</td>
					        		<td>111</td>
					        		<td>111</td>
					        		<td>111</td>
					        		<td>111</td>
					        		<td>111</td>
					        	</tr>
					        </tbody>
					    </table>
						</div>
					</div>
				</div>
				<!-- 充值记录结束 -->
			</div>
  			<div class="clear"></div>
		</div>
  	</div>
  	<div class="clear"></div>
  	<!-- 头像编辑弹出开始 -->
  	<div class="back-black user-face-show" style="display: none;">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">编辑头像</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<div id="uploader-demo">
				    <!--用来存放item-->
				    <div id="fileList" class="uploader-list"></div>
				    <!-- <div id="filePicker">上传图片</div> -->
				    <form action="<?php echo U('user/update')?>" method="post" enctype="multipart/form-data">
				    	<div>
				    <input type="file" name="filename" id="file" onchange="fileSelected();" style="display:none;">
				    <img src="/<?php echo $list['img']?>" alt="'Smiley face"  id='img' onclick="fileSelect();" style="width:80px; height:80px; border-radius:50%">
				    </div>
				    <div>
				    <input type="submit" class="btn btn-pink" value="修改">
				    </div>
				    </form>
				</div>
  			</div>
  		</div>
  	</div>
  	<!-- 头像编辑弹出结束 -->

  	<!-- 修改密码开始 -->
  	<div class="back-black editpwd" style="display: none;">
  		<form method="post" action="<?php echo U('user/password')?>" class="form-user">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">修改密码</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<label><span>原密码：</span><input type="password" name="oldpassword" /></label>
  				<label><span>新密码：</span><input type="password" name="password" /></label>
  				<label><span>再次输入：</span><input type="password"  name="repassword" /></label>
  				<!-- <button class="btn btn-red ajax-post" type="submit" callback="$('.editpwd').hide()" target-form="form-user">确认修改</button> -->
  				<input type="submit" class="btn btn-red ajax-post" value="确认修改">
  			</div>
  		</div>
  		</form>
  	</div>
  	<!-- 修改密码结束 -->

  	<!-- 绑定微信弹出开始 -->
  	<!-- <div class="back-black weixin" style="display: none;">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">绑定微信帐号</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<h3>请使用微信扫描下方二维码</h3>
  				<div class="wx-qrcode"><img src="images/wx-pays.png"></div>
  			</div>
  		</div>
  	</div> -->
  	<!-- 绑定微信弹出结束 -->

  	<!-- 绑定手机弹出开始 -->
  	<div class="back-black phonebing" style="display: none;">
  		<form method="post" action="<?php echo U('user/bing_phone')?>" class="form-phone">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">绑定手机</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<label><span>手机号码：</span><input type="text" name="phone" /></label>
  				<label><span>验证码：</span><input type="text" name="code" /><button id="sendcode" class="btn btn-green" type="button">获取验证码</button></label>
  				<button class="btn btn-red ajax-post" type="submit" callback="$('.phonebing').hide()" target-form="form-phone">确认绑定</button>
  			</div>
  		</div>
  		</form>
  	</div>
  	<!-- 绑定手机弹出结束 -->

  	<!-- 提现弹出开始 -->
  	<div class="back-black mentiontc" style="display: none;">
  		<form method="post" action="/weiyigou/index.php?s=/user/mention" class="form-mention-tc">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">佣金提现</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<label><span>提现金额：</span><input type="text" name="money" id="withraw-money" value="" placeholder="申请提现金额">元</label>
  				<label><span>手机号码：</span><input type="text" name="phone" id="withraw-phone" value="" placeholder="如：138****678"></label>
  				<label><span>开户人：</span><input type="text" name="account" id="withraw-account" value="" placeholder="姓名 如：张三"></label>
  				<label><span>银行名称：</span><input type="text" name="bank" id="withraw-bank" value="" placeholder="银行 如：中国工商银行"></label>
  				<label><span>开户支行：</span><input type="text" name="branch" id="withraw-branch" value="" placeholder="需具体到省市"></label>
  				<label><span>银行帐号：</span><input type="text" name="bank_number" id="withraw-bank_number" value="" placeholder="如：1234 5618 1234 5678 123"></label>
  				<button class="mention btn btn-red ajax-post" target-form="form-mention-tc" type="submit">申请提现</button>
  			</div>
  		</div>
  		</form>
  	</div>
  	<!-- 提现弹出结束 -->

  	<!-- 提现弹出开始 -->
  	<div class="back-black rechargetc" style="display: none;">
  		<form method="post" action="/weiyigou/index.php?s=/user/mention" class="form-recharge-tc">
  		<div class="more-number">
  			<div class="monu-heard">
  				<span class="block-title">佣金充值</span>
  				<i class="icon icon-cancel close"></i>
  			</div>
  			<div class="monu-body">
  				<label><span>佣金金额：</span><span class="red">0.00</span>元</label>
  				<label><span>充值金额：</span><input type="text" name="money" id="r-money" value="">元 以整数为单位</label>
  				<input type="hidden" name="type" value="1">
  				<button class="btn btn-red ajax-post" target-form="form-recharge-tc" type="submit">充值</button>
  			</div>
  		</div>
  		</form>
  	</div>
  	<!-- 提现弹出结束 -->
	
	<div class="bottom">
	<div class="container">
		<div class="bot-left">
			<h3>
				<span class="icon icon-leanpub"></span>
				新手指南
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/1">了解弘讯云购平台</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/2">服务协议</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/3">常见问题</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/4">推广赚钱</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-dunpai"></span>
				欢乐保障
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/5">公平保障</a>
				</li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/6">公正保障</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/7">公开保障</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/8">安全支付</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-truck"></span>
				商品配送
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/9">配送费用</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/10">商品验收与签收</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/11">发货未收到商品</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/12">商品配送</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-github"></span>
				关于我们
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/13">关于我们</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/14">公司证件</a></li>			</ul>
		</div>
		<div class="bot-right">
			<div class="bot-gongping">
				<span class="icon icon-zhngpin"></span> <i>100%正品保证</i>
			</div>
			<div class="bot-gongping">
				<span class="icon icon-gongpin"></span> <i>100%公平公正公开</i>
			</div>
			<div class="bot-gongping">
				<span class="icon icon-gongzheng"></span>
				<i>100%权益保障</i>
			</div>
		</div>

		<div class="copyright">
			Copyright &copy; 2015 一元云购  版权所有 		</div>
	</div>
</div>
	<script type="text/javascript">var htmltype,uploadheads=false;</script>
	<script src="/Public/index/js/jquery.min.js"></script>
	<script src="/Public/Static/layer/layer.js"></script>
	<script src="/Public/index/js/ajax.js"></script>
	<script src="/Public/index/js/copyToClipboard.js"></script>
	<script src="/Public/index/js/jquery.cxscroll.min.js"></script>
	<script src="/Public/index/js/cityselect/jquery.cityselect.js"></script>
	<script src="/Public/index/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="/Public/Static/dist/webuploader.js"></script>
	<script type="text/javascript" src="/Public/Static/jcrop/jquery.Jcrop.min.js"></script>
  	<script type="text/javascript" src="/Public/Home/js/uploadhead.js"></script>
	<script src="/Public/index/js/script.js"></script>
	<!--[if lt IE 9]>
	<script src="/Public/index/js/jquery.pseudo.js"></script>
	<![endif]-->
	<script type="text/javascript">
	function fileSelect() {
        document.getElementById("file").click();
    }
   
    function fileSelected() {
      // 文件选择后触发次函数
    }
    $(function(){
    	$("#file").on("change",function(){
    		var file=this.files[0];
    		if(this.files && file){
    			var reader=new FileReader();
    			reader.onload=function(e){
    				$("#img").attr("src",e.target.result);
    			}
    			reader.readAsDataURL(file);
    		}
    	});
    });
		$(document).ready(function(){
			address_list();

			var i = 120;
		    var intervalid;
		    $("#sendcode").click(function(event) {
		    	var pattern = new RegExp("^[1][35678][0-9]{9}$");
		    	if(false == pattern.test($('[name="phone"]').val())){
                    layer.msg('请填写正确的手机号码！', {icon: 2});
                }else{
			        $.get("<?php echo U('user/sendcode/type/bindcode')?>",{phone:$('[name="phone"]').val()}).success(function(data){
			            $(this).attr({"disabled":"true"});
			            intervalid = setInterval("codefun()",1000);
			        });
			    }
		    });
		     codefun=function(){
		        if (i == 0){
		            $("#sendcode").removeAttr("disabled");
		              clearInterval(intervalid);
		              $('#sendcode').html("获取验证码");
		        }
		        $('#sendcode').html(i+"秒后重新获取");
		        i--;
		    }
		
			// 弹出头像层
			$(".user-faceEdit").click(function(){
				$(".user-face-show").show();
			});
			// 关闭头像层.
			$(".close").click(function(){
				if(uploadheads){
					$.get("<?php echo U('user/removeup')?>");
				}
				$(".user-face-show").hide();
			});
			//修改密码
			$(".password").click(function(){
				$(".editpwd").show();
			});
			$(".close").click(function(){
				$(".editpwd").hide();
			});
			// 弹出绑定微信层
			$(".weixinb").click(function(){
				$(".weixin").show();
			});
			// 关闭绑定微信层.
			$(".close").click(function(){
				$(".weixin").hide();
			});
			// 弹出绑定手机层
			$(".phone").click(function(){
				$(".phonebing").show();
			});
			// 关闭绑定手机层.
			$(".close").click(function(){
				$(".phonebing").hide();
			});
			$(".mentionbtn").click(function(){
				$('.mentiontc').show();
			});
			$(".close").click(function(){
				$(".mentiontc").hide();
			});
			$(".rechargebtn").click(function(){
				$('.rechargetc').show();
			});
			$(".close").click(function(){
				$(".rechargetc").hide();
			});
			// 编辑名字
			$("#setname").on('click','.useredit-name:contains(编辑)',function(){
				$(this).siblings("h3").hide();
				$(this).siblings("i").show();
				$(this).children("a").html("保存")
			});
			// 编辑名字
			$("#setname").on('click','.useredit-name:contains(保存)',function(){
				$(this).children("a").html("编辑");
				var username=$(this).siblings("i").find(':input').val();
				var thas=this;
				$.get($(this).children("a").attr('url'),{username:username},function(data) {
			    	$(thas).siblings('h3').show().text(username);
					$(thas).siblings("i").hide();
				});
			});
			$('.mention').click(function(event){
	            var money=$('#withraw-money').val();
	            if(money.length==0){
	                layer.msg('请填写提现金额！', {icon: 2,shade:0.8});
	                return false;
	            }
	            if(money%100!=0){
	                layer.msg('提现金额只能是整百！', {icon: 2,shade:0.8});
	                return false;
	            }
	            if($('#withraw-account').val().length==0){
	                layer.msg('请填写开户人！', {icon: 2,shade:0.8});
	                return false;
	            }
	            if($('#withraw-bank').val().length==0){
	                layer.msg('请填写银行名称！', {icon: 2,shade:0.8});
	                return false;
	            }
	            if($('#withraw-bank_number').val().length==0){
	                layer.msg('请填写银行帐号！', {icon: 2,shade:0.8});
	                return false;
	            }
	            if($('#withraw-phone').val().length==0){
	                layer.msg('请填写联系电话！', {icon: 2,shade:0.8});
	                return false;
	            }
	            $('.ajax-post').trigger("click");
	        });
			// 弹出追加次数
			$('#records').on('click','.peopleadd',function(){
				$(this).hide();
				$(this).siblings("div.ro-goods").show();
			});
			// 
			$('#address').on('click','.edit',function(){
				$('.address-tr').show();
				var id=$(this).attr('id');
				$('.form-address').attr('action',"<?php echo U('user/address_edit')?>");
				$(this).parents('tr').siblings().removeClass('checked');
				$(this).parents('tr').addClass('checked');
				$(this).parent().siblings().each(function(index){
					$('#city tr').eq(index).find('input').val($(this).text());
					if(index==2){
						strs=$(this).text().split(" ");
						$("#city").citySelect({
							url: "/Public/index/js/cityselect/city.min.js",
				          	prov: strs[0],
				          	city: strs[1],
				          	dist: strs[2]
				        });
					}else if(index==4){
						if($(this).text()=='默认地址'){
							$('#city tr').eq(index).find(":checkbox").attr("checked",'true');
						}else{
							$('#city tr').eq(index).find(":checkbox").removeAttr("checked");
						}
					}
					$('#city').find('input[name="id"]').val(id);
					$('#city').find('button').text('确定修改');
				});
			});

			$('.address_add').click(function(event) {
				$('.address-tr').show();
				$('.form-address').attr('action',"<?php echo U('user/address_add')?>");
				$('#city tr').find(':text').val('');
				$('#city input[name="id"]').val('');
				$('#city tr').find(":checkbox").removeAttr("checked");
				$('#city tr').find("button").text('确定添加');
			});

			$('#address').on('click','.pinboard',function(){
				var thas=this;
				$(this).parents('tr').siblings().find('td .a1').addClass('pinboard').text('设为默认地址');
				$.get($(this).attr('url'), function(data) {
			    	$(thas).text('默认地址').removeClass('pinboard');
				});
			});

	        $("#city").citySelect({
	          	url: "/Public/index/js/cityselect/city.min.js",
	          	prov: "",
	          	city: "",
	          	dist: "",
	          	nodata: "null"
	        });

		});
		function address_call(){
			$('.address-tr').hide();
			address_list();
		}
		function address_list(){
			// $('#address').parents('.tabs-panel-item').append('<div class="loading"><span class="icon icon-spin3 animate-spin"></span> 正在努力加载...</div>');
			$.getJSON("<?php echo U('user/address')?>",function(result){
				if(result){
					var str = "";
					$.each(result, function(i, field){
						str += '<tr>';
						str += '<td>'+field['username']+'</td>';
						str += '<td>'+field['tel']+'</td>';
						str += '<td width="30%">'+field['province']+' '+field['city']+' '+field['dist']+'</td>';
						str += '<td>'+field['address']+'</td>';
						if(field['default']==1){
							str += '<td width="15%"><a href="javascript:void(0)" url="/user/address_default/id/'+field['id']+'" class="a1 nblist">默认地址</a></td>';
						}else{
							str += '<td width="15%"><a href="javascript:void(0)" url="/user/address_default/id/'+field['id']+'" class="a1 nblist pinboard">设为默认地址</a></td>';
						}
						str += '<td width="15%"><a href="javascript:void(0)" class="a3 nblist edit" id="'+field['id']+'"">修改</a> | <a href="/user/address_del/id/'+field['id']+'" class="a3 nblist ajax-get" callback="address_list()" id="'+field['id']+'"">删除</a></td>';
						str += '</tr>';
					});
					$("#address").html(str);
			        $('.loading').remove();
				}else{
		    		$('.loading').html('<span class="icon icon-attention"></span> 您还没有添加地址');
					setTimeout(function(){
						$('.loading').remove();
					},2000);
		    	}
		    });
		}
	</script>

  </body>
</html>