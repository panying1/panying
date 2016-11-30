<?php
namespace Home\Controller;
use Think\Controller;
session_start();
class UserController extends Controller {
	/*用户中心页面*/
    public function index(){
       
        //导航
        $lian=M('gou_cat');
        $re=$lian->join("gou_news on gou_cat.id=gou_news.cat_id")->where(["gou_news.status"=>1])->select();
        $dao=M('gou_guide');
        $guide=$dao->select();
        
        $this->assign('guide',$guide);
        $this->assign('list',$re);

        $User = M('index_user'); // 实例化User对象       
        $id=$_SESSION['uid'];
        //接值
        $list=$User->where(['uid'=>$id])->find();
        // print($list);die;
        $this->assign('list',$list);// 赋值数据集
        $user = M('gou_address');
        $lists=$user->join('index_user on index_user.uid = gou_address.uid')->where(['gou_address.uid'=>$id])->select();
        // $lists=$user->select();
        $this->assign('lists',$lists);// 赋值数据集

        $zhi = M('gou_zhi');
        $arr=$zhi->where(['uid'=>$id])->find();
        $this->assign('arr',$arr);// 赋值数据集

        $this->display('user/index'); // 输出模板
    }
    //编辑
    public function set_username(){
        $id=$_SESSION['uid'];
            M('index_user')->where("uid=$id")->setField('username',I('username'));
  }
  //修改密码
    public function password()
    {
        $User = M('index_user'); // 实例化User对象   
        //从session中取出id
        $id=$_SESSION['uid'];
        //获取提交的新旧密码、并查询是否有此用户
        $oldpassword = $_POST['oldpassword'];
        // echo $oldpassword;die;
        $password = md5($_POST['password']);
        $repassword = md5($_POST['repassword']);
        $res = $User->where("uid=$id" and "password=$oldpassword" )->find();
        // print_r($res);die;
        if($password==$repassword)
        {
            $data=$User->where(["uid"=>$id])->save(["password"=> $password,"repassword"=> $repassword]);
            // print_r($data);die;
            $this->success('修改成功', U('user/index'));
        }
        
    }
    // public function removeup(){
    //     D('index_user')->removeup();
    // }
    //编辑图片
    public function update()
    {
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
        $date['img']=$path;
        $arr=M('index_user');
        $id=$_SESSION['uid'];
        $re=$arr->where(['uid'=>$id])->save($date);
        if($re){
            $this->success('修改成功', U('user/index'));
        } else {
            $this->error('修改失败');
        }
    }
    //地址
    public function address_add(){
        $data['nickname']=I('post.nickname');
        $data['tel']=I('post.tel');
        $data['province']=I('post.province');
        $data['city']=I('post.city');
        $data['dist']=I('post.dist');
        $data['mobile']=I('post.mobile');
        $data['address']=I('post.address');
        $data['uid']=$_SESSION['uid'];
        $data['default']=I('post.default');
        $arr=M('gou_address');
        $re=$arr->add($data);
        if($re){
            $this->success('添加成功', U('user/index'));
        } else {
            $this->error('新增失败');
        }
    }
         //对数据进行删除
    public function delete(){
        $User = M("gou_address");
        $id = $_GET['id'];
        $re = $User->where("id=$id")->delete();
        if($re){
            $this->success('删除成功', U('user/index'));
        } else {
            $this->error('删除失败');
        }
    }  
    //对赋值的数据 进行修改
    public function address_edit(){
        $User = M("gou_address");
        $data=I('post.');
        $res = $User->save($data);
        if($res){
            $this->success('修改成功', U('goods/show'));
        } else {
            $this->error('修改失败');
        }
    }
    //绑定手机
    public function bing_phone(){
    if(IS_POST){
      $id=$_SESSION['uid'];
      if(M('index_user')->where(array('phone'=>I('phone')))->getField('uid')){
        $this->error('该手机已绑定！');
      }
      if(!cell_code_check(I('code'))){
        $this->error('手机验证失败！');
      }
      if(M('index_user')->where(['uid'=>$id])->setField('phone',I('phone'))){
        $this->success('手机绑定成功！');
      }else{
        $this->error('手机绑定失败！');
      }
    }else{
      $this->display('index');
    }
  }
      public function sendcode($type='reg',$phone=''){
        $username=$phone?$phone:session('username');
        if(IS_GET){
            if($type=='reg'){
                $this->cellcode($username);
            }elseif($type=='bindcode'){
                $this->bindcode($username);
            }else{
                $this->pswcode($username);
            }
        }
    }
         //充值
     public function recharge()
     {
        $this->display('zhi');
     }
     public function zhiok()
     {
        $id=$_SESSION['uid'];
        $data['price']=I('post.price');
        $data['uid']=$id;
        $arr=M('gou_zhi');
        $res=$arr->where(['uid'=>$id])->find();
        if($id!=$res['uid'] || $res['uid']=="")
        {
                    $re=$arr->where(['uid'=>$id])->add($data);
                    if($re){
                            $this->success('添加成功', U('user/index'));
                    } else {
                            $this->error('新增失败');
                    }           
        }else{
            $data['price']= $data['price']+$res['price'];
            // print_r($data);die;
                    $re=$arr->where(['uid'=>$id])->save($data);
                    if($re){
                        $this->success('充值成功', U('user/index'));
                    } else {
                        $this->error('充值失败');
                    }
        }
     }
}