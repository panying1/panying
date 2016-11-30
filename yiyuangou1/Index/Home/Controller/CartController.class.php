<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
 //购物车页面
    public function cart(){
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

        $id=I('get.id');
        // $id=$_SESSION['id'];
        $user=M('gou_goods');
        $res=$user->where("g_id=$id")->find();
        $this->assign('re',$res);
        $this->display();
    }
 }