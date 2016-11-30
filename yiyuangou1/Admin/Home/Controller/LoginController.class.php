<?php
namespace Home\Controller;
use Think\Controller;
session_start();
class LoginController extends Controller {
    /*
    登陆页面
    */
    public function login(){
           $this->display('login');
    }
    /*
    登陆成功
    */
    public function loginok(){
           //账号  
        $name=I('admin_user');
        $pwd=md5(I('admin_pwd'));  
        $user=M('admin_user');  
        $list=$user->where("admin_user='$name'")->find();
        $time=date("Y-m-d",time());  
        if($list['status']==0){  
            if($list['time']!=$time+1){  
                $this->error("您的账号已被锁定");
                }    
        }  
        if($list){  
            if($list['admin_pwd']==$pwd){  
                $data['id']=$list['id'];  
                $data['status']=3;  
                $data['time']=$time; 
                $user->save($data);  
                $this->success("登陆成功",'../index/index');  
                session('admin_user',$list['admin_user']);
                session('id',$list['id']);
            }else{  
                $list['status']=--$list['status'];  
                $data['status']=$list['status'];  
                // $data['id']=$list['id'];  
                $data['time']=$time;  
                $user->save($data);  
                $this->error("密码错误，还可以输入".$list['status']."次");  
            }  
        }else{  
            $this->error("账号错误");  
        }  

            // //数据库
            // $user=M('admin_user');
            // //接值
            // $name=I('admin_user');
            // $pwd=md5(I('admin_pwd'));
            // $data=$user->where(['admin_user'=>$name,'admin_pwd'=>$pwd])->find();
            // //判断是否登陆成功
            // if($data){
            //         $this->success('登陆成功','../index/index');
            //         session('admin_user',$data['admin_user']);
            //         session('admin_id',$data['admin_id']);
            // }else{
            // 	$this->success('登陆失败','login');
            // }
    }
    //退出登陆
public function loginout(){
    session(null); 
    //dump(session());
    $this->redirect('Login/login');
}
}