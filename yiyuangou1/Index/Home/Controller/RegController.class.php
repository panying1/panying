<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class RegController extends Controller {
	/*注册页面*/
    public function index(){
        $this->display('reg/reg');
    }
    /*
    注册成功
    */
    public function regok()
    {
    	//数据库
            $user=M('index_user');
            //接值
            $data['username']=I('username');
            $data['password']=md5(I('password'));
            $data['repassword']=md5(I('repassword'));
            $code=I("passcode");
            if($code==''){
                $this->error("验证码为空！");
            }
            if(!$this->checkVerify($code)){
                $this->error("验证码错误！");
            }
            $map['username']=I('username');
            if(M('index_user')->where($map)->getField('uid')){
                $this->error('用户已经注册！');
            }
            if(I('username')=='')
            {
                $this->error('请输入注册邮箱');
            }
            if(I('password')=='')
            {
                $this->error('请输入密码');
            }
            if(I('repassword')=='')
            {
                $this->error('请输入重复密码');
            }
            if(!$this->check_name(I('username'))){
                $this->error('请正确输入注册邮箱');
            }
            if(!I('protocol')){
                $this->error('抱歉不同意服务协议无法注册！');
            }
            if(I("password") != I("repassword")){
                        $this->error('密码和重复密码不一致！');
                    }
            if(strlen(I('password'))<6){
                        $this->error('密码长度必须大于5位数！');
                    }
            if($data['password']=$data['repassword'])
            {
                if($user->add($data)){
                           $this->success("注册成功",U("login/login"),2);
                            }else{
                            $this->error("注册失败");
                        }
            }else{
                $this->error("失败");
            }
            
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
    protected function check_name($username){
        if(is_numeric($username)){
            
        }else{
            return (ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+",$username));
        }
    }

}