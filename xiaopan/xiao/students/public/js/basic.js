$(function() {
	/*确认退出层*/
	$('.sign-out>a').click(function() {
		$(this).parents('body').find('.outlayer').slideDown(200);
	});
	$('.tip-box .cancel').click(function(){
		$(this).parents('.outlayer').slideUp(200);
	});
	
	/*展示选择框*/
	$('.show-btn').click(function(){
		$(this).siblings('.checkshow').toggle().siblings('.goin').toggle();
		$(this).parents('body').find('.cover-bg').show();
	});
	$('.close').click(function(){
		$(this).parent('.checkshow').hide().parents('body').find('.cover-bg').hide();
	});
	$('.checkshow>p').click(function(){
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	$('.sex>label').click(function(){
		$(this).addClass('sex-check').siblings().removeClass('sex-check');
	});
	$('.hd>li').click(function(){
		var index=$(this).index();
		console.log(index)
		$(this).addClass('active').siblings().removeClass('active');
		$('.bd>div').eq(index).show().siblings().hide();
	});
	//绿色通道女男
	$('#s>label').click(function(){
		$(this).addClass('sex-check').siblings().removeClass('sex-check');
	});
	//绿色通道申请类型
	$('#s>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='s_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//绿色通道政治面貌
	$('#type>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='u_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//绿色通道户籍类型
	$('#h>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='h_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//推迟报到类型
	$('#t>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='t_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//推迟报到时间
	$('#time>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='t_time']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//个人信息户口迁移
	$('#q>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='q_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//个人信息党员关系
	$('#d>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='d_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//抵校登记交通方式
	$('#j>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='j_type']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});
	//抵校登记是否陪同
	$('#i>p').click(function(){
		_this=$(this);
		var value=_this.text();
		$("input[name='is']").val(value);
		$(this).addClass('checked').siblings().removeClass('checked');
	});

	$('.notice-content a:even').css('background','#eee');
	
	/* $(document).on("click", ".page-item", function (e) {
          $(this).addClass('active');
        });*/
     
    var touch_ele = ".touch,a,button";//Elements that need to be clicked
    touch_feedback(touch_ele);//Add touch feedback
    function touch_feedback(ele) {
        $('body').on("touchstart touchend touchmove tap", ele, function (e) {
            var $this = $(this)
            // e.preventDefault();
            switch (event.type) {
                case "touchstart":
                    $this.addClass("activated");
                    break;
                case "touchmove":
                    $(this).removeClass("activated");
                    break;
                case "touchend":
                    $(this).removeClass("activated");
                    break;
                case "tap":
                    var url=$this.attr("data-url")
                    if(url)
                    window.location.href=url;
                    break;
            }
        });
    };//touch_feedback
});