<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /*显示轮播
     * 友情链接
     */
    public function index(){
        $lun=M('gou_ad_data');
        $arr=$lun->where("ad_status=1")->select();

        $lian=M('gou_cat');
        $re=$lian->join("gou_news on gou_cat.id=gou_news.cat_id")->where(["gou_news.status"=>1])->select();
        $dao=M('gou_guide');
        $guide=$dao->select();
        //最热商品
        $goods=M('gou_goods');
        $good=$goods->where("hot=1 AND goods_status=1")->order('hits desc')->limit(0,8)->select();
        $shouji=$goods->where("goods_status=1 and cate_id=1")->order('hits desc')->limit(0,5)->select();
        $dian=$goods->where("goods_status=1 and cate_id=2")->order('hits desc')->limit(0,5)->select();
        $shu=$goods->where("goods_status=1 and cate_id=3")->order('hits desc')->limit(0,5)->select();
        $nv=$goods->where("goods_status=1 and cate_id=4")->order('hits desc')->limit(0,5)->select();
        $mei=$goods->where("goods_status=1 and cate_id=5")->order('hits desc')->limit(0,5)->select();
        $chao=$goods->where("goods_status=1 and cate_id=6")->order('hits desc')->limit(0,5)->select();
        $qi=$goods->where("goods_status=1 and cate_id=7")->order('hits desc')->limit(0,5)->select();
        $this->assign('dian',$dian);
        $this->assign('re',$shouji);
        $this->assign('shu',$shu);
        $this->assign('nv',$nv);
        $this->assign('mei',$mei);
        $this->assign('chao',$chao);
        $this->assign('qi',$qi);
         $this->assign('goods',$good);
        $this->assign('guide',$guide);
        $this->assign('list',$re);
        //var_dump($arr);die;
        $this->assign('arr',$arr);
        /*
         *最新揭晓
         */
        $re=$goods->where("goods_status=1 and sele=1")->order("goods_end_time desc")->select();

        $this->display('index');
    }
    public function lists()
    {  
        $dao=M('gou_guide');
        $guide=$dao->select();
        //所有商品
        $goods=M('gou_goods');
        $good=$goods->where("goods_status=1")->order('hits desc')->select();
         $this->assign('goods',$good);
         $this->assign('guide',$guide);

         $cate=M('goods_cate');
         $cates=$cate->select();
         $this->assign('res',$cates);

        //  $id=I('get.cate_id');
        // // $id=$_SESSION['id'];
        // $user=M('gou_goods');
        // $res=$user->where("cate_id=$id")->find();
        // $this->assign('re',$res);
        $this->display('list');
    }
}