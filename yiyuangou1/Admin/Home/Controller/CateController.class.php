<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends Controller {
	//分类控制器
    public function index(){
        $this->display('index');
    }
    //添加分类页面
    public function add(){
        $this->display('add');
    }
    //接收值
    public function add_do(){
    	$User = M("Goods_cate");
    	$goods_title = $_POST['goods_title'];
    	// var_dump($goods_title);die;
	    $data['goods_title'] = $goods_title;
	    $re = $User->add($data);
	    if($re){
	    	 $this->success('新增成功', 'show');
	    }else{
	    	echo "添加失败";
	    }
    }
    //页面渲染
    public function show(){
    	$User=M('Goods_cate');    
    	$count      = $User->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('name',$list);// 赋值数据集
   		$this->assign('page',$show);// 赋值分页输出
    	$this->display('show'); // 输出模板
    }
    //对数据进行删除
    public function delete(){
    	$User = M("Goods_cate");
    	$goods_id = $_GET['goods_id'];
    	$re = $User->where("goods_id=$goods_id")->delete();
    	if ($re) {
    		$this->show();
    	}else{
    		echo "数据删除失败";
    	}
    }    
    //通过id查询出一条数据 并且赋值
    public function update(){
    	$User = M("Goods_cate");
    	$goods_id = $_GET['goods_id'];
    	$re = $User->where("goods_id=$goods_id")->find();
    	// var_dump($re);die;
    	$this->assign('name',$re);// 赋值数据集
    	$this->display('update'); // 输出模板
    }
    //对赋值的数据 进行修改
    public function update_do(){
    	$User = M("Goods_cate");
    	$goods_id = $_POST['goods_id'];
    	$goods_title = $_POST['goods_title'];
    	$data['goods_id'] = $goods_id;
    	$data['goods_title'] = $goods_title;
    	$re = $User->where("goods_id=$goods_id")->save($data);
    	if ($re) {
    		$this->show();
    	}else{
    		echo "数据修改失败";
    	}
    }
}