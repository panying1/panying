<?php
namespace Home\Controller;
use Think\Controller;
session_start();
class LoginController extends Controller {
	//登陆页面
    public function login(){
        $this->display('login/login');
    }
    /*
    登陆成功
    */
    public function loginok(){
        //账号  
        $username=$_POST['username'];  
        //密码  
        $pwd=md5($_POST['password']);  
        $user=M('index_user');  
        $list=$user->where("username='$username'")->find();  
        $time=date("Ymd",time());  
        if($username=='') 
        {
            $this->error("请输入账号");
        }
        if($list['status']==0){  
            if($list['time']!=$time+1){  
                $this->error("您的账号已被锁定");  
            }
        } 
        if($list){  
            if($list['password']==$pwd){  
                $data['uid']=$list['uid'];  
                $data['status']=3;  
                $user->save($data);  
                $this->success("登陆成功",'../index/index');  
                session('username',$list['username']);
                session('uid',$list['uid']);
            }elseif($list['password']==''){
                $this->error("请输入密码");
            }else{  
                $list['status']=--$list['status'];  
                $data['status']=$list['status'];  
                $data['uid']=$list['uid'];  
                $data['time']=$time;  
                $user->save($data);  
                $this->error("密码错误，还可以输入".$list['status']."次");  
            }  
        }else{  
            $this->error("账号错误");  
        }  
    }
     //退出登陆
     public function loginout(){
	session(null); 
	// dump(session());
	$this->redirect('Login/login');
}
}