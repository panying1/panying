<?php
namespace Home\Controller;
use Think\Controller;
class BrandController extends CommonController {
	//添加品牌页面
    public function index(){
    	$user=M('goods_cate');
        $list = $user->select();
        $this->assign('list',$list);
        $this->display('brand/index');
    }
    /*
    品牌的添加
    */
    public function brand_add(){
            //数据库
            $user=M('goods_brand');
            //接值
            $data['brand_title']=I('brand_title');
            $data['cate_id']=I('cate_id');
            $data['order']=I('order');
            if($user->add($data)){
           $this->success("新增成功",U("brand/lists"),2);
            }else{
            $this->error("新增失败");
        }
    }
    //进行显示列表
    public function lists()
    {
        $User = M('goods_brand'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->order(array('order'=>'desc'))->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('brand/lists'); // 输出模板
    }

}