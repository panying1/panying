<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    /*
    后台详细页面
    查询商品的分类和品牌
     */
    public function show(){
        $model=M('goods_brand');
        $re=$model->select();
        $cate=M('goods_cate');
        $arr=$cate->select();
        $this->assign('list',$arr);
        $this->assign('arr',$re);
        $this->display('goods_add');
    }
    //商品的添加
    public function add(){
        $date=I('post.');
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath  =      './Public/img/';
        $upload->rootPath="./";
        $info   =   $upload->upload();
        // print_r($info);die;
        if(!$info) {
            $this->error($upload->getError());
        }else{
            $path=$info['filename']['savepath']. $info['filename']['savename'];
        }
        $image = new \Think\Image();
        $image->open($path);
        // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
        $image->thumb(150,150)->save("./Public/thumb/".'thumb_'.$info['filename']['savename']);
        $date['goods_photo']='thumb_'.$info['filename']['savename'];
        $date['filename']=$path;
        $arr=M('gou_goods');
        $re=$arr->add($date);
        if($re){
            $this->success('添加成功', U('goods/show'));
        } else {
            $this->error('新增失败');
        }
    }
    /*商品的展示
     * 分页
     *
     */
    public function select(){
        $a = M('gou_goods');
        //print_R($a);die;
        $count      = $a->count();
        $Page       = new \Think\Page($count,3);
        $show       = $Page->show();
        $re = $a->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$re);
        $this->assign('page',$show);
        $this->display('list');
    }
    //修改页面
    public function up(){
        $id=I('get.id');
        $model=M('gou_goods');
        $data = $model->where("g_id=$id")->find();
        $this->assign('arr',$data);
        $this->display('up');
    }
    /*
     * 修改的值
     *
     */
    public function update(){
        $g_id=I('post.g_id');
        $arr=I('post.');
        $model=M('gou_goods');
        $re=$model->where("g_id=$g_id")->save($arr);
        if($re){
            $this->success('添加成功', U('goods/show'));
        } else {
            $this->error('新增失败');
        }
    }
    //搜索
    public function sou(){
        $search1=I('post.search1');
        $search2=I('post.search2');
        //print_R($sea1);die;
        $User = M('gou_goods');
        $where=1;
        if(!empty($search1)){
            $where .= " and g_name like '%$search1%'";
        }
        if(!empty($search2)){
            $where .= " and partake_people like '%$search2%'";
        }
        $count      = $User->where($where)->count();
        $Page       = new \Think\Page($count,3);
        $show       = $Page->show();// 分
        $arr = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($arr as $k=>$v){
            $arr[$k]['g_name']=str_replace($search1,"<font color='red'>$search1</font>",$v['g_name']);
            $arr[$k]['partake_people']=str_replace($search2,"<font color='red'>$search2</font>",$v['partake_people']);
        }
        echo json_encode($arr);
//        $this->assign('list',$arr);
//        $this->assign('page',$show);
//        $this->display('list');
    }
/*
 * 地址管理
 *
 */
    public function adress(){
        $this->display();
    }
    /*
     * 地址添加
     * 三级联动插件
     */
    public function adress_add(){
        $data['ship_name']=I('post.ship_name');
        $data['ship_user_name']=I('post.ship_user_name');
        $data['sex']=I('post.sex');
        $data['address']=I('post.address');
        $data['postcode']=I('post.postcode');
        $data['mobile']=I('post.mobile');
        $data['telphone']=I('post.telphone');
        $data['d_id']=I('post.province').' '.I('post.city').' '.I('post.county');//所在区域
        $arr=M('adress');
        $re=$arr->add($data);
        if($re){
            $this->success('添加成功', U('goods/adress'));
        } else {
            $this->error('新增失败');
        }
    }
    //展示地址3
    public function adress_list(){
        $a = M('adress');
        //print_R($a);die;
        $count      = $a->count();
        $Page       = new \Think\Page($count,3);
        $show       = $Page->show();
        $re = $a->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$re);
        $this->assign('page',$show);
        $this->display('adress_list');
    }
    //修改地址
    public  function uplist(){
        $id=I('get.id');
        $model=M('adress');
        $data = $model->where("id=$id")->find();
        $this->assign('arr',$data);
        $this->display('uplist');
    }
    //修改后的页面
    public function xiu(){
        $g_id=I('post.id');
        $arr=I('post.');
        $model=M('adress');
        $re=$model->where("id=$g_id")->save($arr);
        if($re){
            $this->success('修改成功', U('goods/adress_list'));
        } else {
            $this->error('新增失败');
        }
    }
}