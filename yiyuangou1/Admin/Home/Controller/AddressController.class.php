<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends CommonController {
	//添加广告页面
    public function index(){
        $this->display('address/address_add');
    }
    /*
    广告的添加
    */
    public function address_addok(){
           $date=I('post.');
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath  =      './Public/Uploads/';
        $upload->rootPath="./";
        $info   =   $upload->upload();
        // print_r($info);die;
        if(!$info) {
            $this->error($upload->getError());
        }else{
            $path=$info['filename']['savepath']. $info['filename']['savename'];
        }
        $date['ad_img']=$path;
        $arr=M('gou_ad_data');
        $re=$arr->add($date);
        if($re){
            $this->success('添加成功', U('address/lists'));
        } else {
            $this->error('新增失败');
        }

    }
    //进行显示列表
    public function lists()
    {
        $User = M('gou_ad_data'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('address/address_list'); // 输出模板
    }
}