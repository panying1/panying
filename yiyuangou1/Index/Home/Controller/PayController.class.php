<?php
namespace Home\Controller;
use Think\Controller;
class  PayController extends Controller {
    /*显示轮播
     * 支付页面
  */
    public function pay(){
        if(empty($_SESSION['username'])) {
            echo "<script>alert('请先登录');</script>";
            $this->display('login/login');die;
        }
        $lun=M('gou_ad_data');
        $arr=$lun->where("ad_status=1")->select();

        $lian=M('gou_cat');
        $re=$lian->join("gou_news on gou_cat.id=gou_news.cat_id")->where(["gou_news.status"=>1])->select();
        $dao=M('gou_guide');
        $guide=$dao->select();

        $this->assign('guide',$guide);
        $this->assign('list',$re);
        //var_dump($arr);die;
        $this->assign('arr',$arr);
        /*
         *最新揭晓
         */
        // $this->display('index');
        $id=I('get.id');
        $arr=M('gou_goods');
        $re=$arr->where("g_id=$id")->find();
        $this->assign('re',$re);
        $this->display();
    }
    //支付
    public function zhifu(){
        $id=I('post.pid');
       // $price=I('post.price');

        //  //接受订单信息
        // $in_number = $this->uri->segment(4);
        // //接受总价
        // $sum = $this->uri->segment(3);
        // ******************************************************配置 start*************************************************************************************************************************
        //↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
        //合作身份者id，以2088开头的16位纯数字
        $alipay_config['partner']       = '2088002075883504';
        //收款支付宝账号
        $alipay_config['seller_email']  = 'li1209@126.com';
        //安全检验码，以数字和字母组成的32位字符
        $alipay_config['key']           = 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
        //↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
        //签名方式 不需修改
        $alipay_config['sign_type']    = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        //$alipay_config['input_charset']= strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
        // ******************************************************配置 end*************************************************************************************************************************

        // ******************************************************请求参数拼接 start*************************************************************************************************************************
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => $alipay_config['partner'], // 合作身份者id
            "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
            "payment_type"  => '1', // 支付类型
            "notify_url"    => "http://www.cishop.com/shop/index.php/shop/errorr", // 服务器异步通知页面路径
            "return_url"    => "http://localhost/shiyi/yiyuangou/index.php/home/pay/xiu?id=$id", // 页面跳转同步通知页面路径
            "out_trade_no"  => time().rand(111,222), // 商户网站订单系统中唯一订单号
            "subject"   => "订单", // 订单名称
            "total_fee" => "0.01", // 付款金额
            "body"  => "", // 订单描述 可选
            "show_url"  => "", // 商品展示地址 可选
            "anti_phishing_key" => "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
            "exter_invoke_ip"   => "", // 客户端的IP地址
            "_input_charset"    => 'utf-8', // 字符编码格式
        );
// 去除值为空的参数
        foreach ($parameter as $k => $v) {
            if (empty($v)) {
                unset($parameter[$k]);
            }
        }
// 参数排序
        ksort($parameter);
        reset($parameter);

// 拼接获得sign
        $str = "";
        foreach ($parameter as $k => $v) {
            if (empty($str)) {
                $str .= $k . "=" . $v;
            } else {
                $str .= "&" . $k . "=" . $v;
            }
        }
        $parameter['sign'] = md5($str . $alipay_config['key']);
        $parameter['sign_type'] = $alipay_config['sign_type'];
// ******************************************************请求参数拼接 end*************************************************************************************************************************


// ******************************************************模拟请求 start*************************************************************************************************************************
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
        foreach ($parameter as $k => $v) {
            $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
        }

        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";

// ******************************************************模拟请求 end*************************************************************************************************************************
        echo $sHtml;
    }
    /*修改参与的人数
     * 剩余的人数
     * 并入库
     */
    public  function xiu(){
        $gou_goods = M("gou_goods"); // 实例化User对象
        $gou_goods->where('g_id=8')->setInc('people',3); // 用户的积分加3
     }


}