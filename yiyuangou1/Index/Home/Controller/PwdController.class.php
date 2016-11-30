<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
session_start();
class PwdController extends Controller {
	/*填写账户名页面*/
    public function index(){
        $this->display('pwd/index');
    }
    /*
    成功
    */
    public function indexok(){
        //数据库
            $user=M('index_user');
            //接值
            $username=I('username');
            $code=I("passcode");
            if($code==''){
                $this->error("验证码为空！");
            }
            if(!$this->checkVerify($code)){
                $this->error("验证码错误！");
            }
            $data=$user->where(['username'=>$username])->find();
            //判断
            if($data){
                $this->success('获取用户名成功','index1');
                session('username',$data['username']);
                session('uid',$data['uid']);
            }else{
                $this->success('获取用户名失败','index');
            }
    }
    //修改页面
    public function index1()
    {
        $this->display();
    }
    /*
    新密码写入成功
    */
    public function index1ok(){
        //数据库
            $user=M('index_user');
            //接值
            $id=$_SESSION['uid'];
            // echo $id;die;
        //获取提交的新密码、并查询是否有此用户
           $password = md5($_POST['password']);
           $repassword = md5($_POST['repassword']);
        $res = $user->where("uid=$id" )->find();
            //判断
            if($password==$repassword)
        {
            $data=$user->where(["uid"=>$res['uid']])->save(["password"=> $password,"repassword"=> $repassword]);
            // print_r($data);die;
            $this->success('新密码写入成功', U('pwd/index2'));
        }
        else{
            $this->error('新密码与重写密码不一致', U('pwd/index1'));
        }
    }
    //完成
    public function index2()
    {
        $this->display();
    }
    //验证码
        public function verify(){
        ob_clean();
        $config =   array(
        'useCurve'  => false,            // 是否画混淆曲线
        'useNoise'  => true,            // 是否添加杂
        'fontSize'  => 16,              // 验证码字体大小(px)
        'length'    => 4,               // 验证码位数
        );
        $verify = new Verify($config);
        $verify->entry();
    }
             //验证码验证
    public function checkVerify($code){
        $verify = new Verify();
        return $verify->check($code);
    }
}