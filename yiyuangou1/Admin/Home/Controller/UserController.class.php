<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
	//添加用户页面
    public function index(){
        $this->display('user/index');
    }
    /*
    用户的添加
    */
    public function addok(){
        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath  =      './Public/upload/';
        $upload->rootPath="./";
        $info   =   $upload->upload();
        // print_r($info);die;
        if(!$info) {
            $this->error($upload->getError());
        }else{
            $path=$info['filename']['savepath']. $info['filename']['savename'];
        }
                    //接值
            $date['username']=I('username');
            $date['password']=md5(I('password'));
            $date['repassword']=md5(I('repassword'));
        $date['img']=$path;
        $arr=M('index_user');
        $re=$arr->add($date);
        if($re){
            $this->success('添加成功', U('user/lists'));
        } else {
            $this->error('新增失败');
        }
    }
    //进行显示列表
    public function lists()
    {
        $User = M('index_user'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display('user/lists'); // 输出模板
    }
    //通过id查询出一条数据 并且赋值
    public function update(){
        $User = M("index_user");
        $id = $_GET['uid'];
        $re = $User->where("uid=$id")->find();
        // var_dump($re);die;
        $this->assign('arr',$re);// 赋值数据集
        $this->display('update'); // 输出模板
    }
    //对赋值的数据 进行修改
    public function update_do(){
        $User = M("index_user");
        $id = $_POST['uid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data['uid'] = $id;
        $data['username'] = $username;
        $data['password'] = md5($password);
        $re = $User->where("uid=$id")->save($data);
        if($re){
           $this->success("修改成功",U("user/lists"),2);
            }else{
            $this->error("修改失败");
        }
    }
    //对数据进行删除
    public function delete(){
        $User = M("index_user");
        $id = $_GET['uid'];
        $re = $User->where("uid=$id")->delete();
         if($re){
           $this->success("删除成功",U("user/lists"),2);
            }else{
            $this->error("删除失败");
        }
    }    
}