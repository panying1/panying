<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends CommonController {
	//添加用户页面
    public function index(){
        $this->display('admin/index');
    }
    /*
    用户的添加
    */
    public function addok(){
            //数据库
            $user=M('admin_user');
            //接值
            $data['admin_user']=I('admin_user');
            $data['admin_pwd']=md5(I('admin_pwd'));
            if($user->add($data)){
           $this->success("新增成功",U("admin/lists"),2);
            }else{
            $this->error("新增失败");
        }
    }
    //进行显示列表
    public function lists()
    {
        $User = M('admin_user'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('admin/lists'); // 输出模板
    }
    //通过id查询出一条数据 并且赋值
    public function update(){
        $User = M("admin_user");
        $id = $_GET['id'];
        $re = $User->where("id=$id")->find();
        // var_dump($re);die;
        $this->assign('arr',$re);// 赋值数据集
        $this->display('update'); // 输出模板
    }
    //对赋值的数据 进行修改
    public function update_do(){
        $User = M("admin_user");
        $id = $_POST['id'];
        $admin_user = $_POST['admin_user'];
        $admin_pwd = $_POST['admin_pwd'];
        $data['id'] = $id;
        $data['admin_user'] = $admin_user;
        $data['admin_pwd'] = md5($admin_pwd);
        $re = $User->where("id=$id")->save($data);
        if($re){
           $this->success("修改成功",U("admin/lists"),2);
            }else{
            $this->error("修改失败");
        }
    }
    //对数据进行删除
    public function delete(){
        $User = M("admin_user");
        $id = $_GET['id'];
        $re = $User->where("id=$id")->delete();
         if($re){
           $this->success("删除成功",U("admin/lists"),2);
            }else{
            $this->error("删除失败");
        }
    }    
}