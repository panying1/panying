<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function show(){
    	$User=M('Gou_order');    
    	$count      = $User->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('name',$list);// 赋值数据集
   		$this->assign('page',$show);// 赋值分页输出
    	$this->display('show'); // 输出模板
    }
     //对数据进行删除
    public function delete(){
    	$User = M("Gou_order");
    	$or_id = $_GET['or_id'];
    	$re = $User->where("or_id=$or_id")->delete();
    	if ($re) {
    		$this->show();
    	}else{
    		echo "数据删除失败";
    	}
    }    
    //对订单表进行查询
    public function sel(){
    	$User = M("Gou_order");
		$or_number=I('post.or_number');
		$accept_name=I('post.accept_name');
		$re = $User->where("or_number='$or_number' OR accept_name='$accept_name'")->select();
		$count      = $User->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出
    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('name',$re);// 赋值数据集
   		$this->assign('page',$show);// 赋值分页输出
    	$this->display('show'); // 输出模板
    }
    /*
     * 友情链接
     *
     */
    public function lianjie(){
        $this->display();
    }
    //添加
    public function lianjie_add(){
        $data=I('post.');
        $data['create_time']=strtotime(date('Y-m-d h:i:s'));
        $arr=M('gou_news');
        $re=$arr->add($data);
        if($re){
            $this->success('添加成功', U('order/lianjie'));
        } else {
            $this->error('新增失败');
        }
    }
}