<?php
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Session,Request,Redirect,Storage;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller
{
    public function login_index(){
        return view('home/login');
    }
    public function login_pro(){
        $arr=Request::input();
       // print_r($uname);die;
        $str=DB::table('users')->where(['uname'=>$arr['uname'],'upass'=>$arr['upass']])->first();
      //  print_r($str);die;
        if($str){
            Session::put('uname',$arr['uname']);
            Session::save();
            //print_r($id);die;
            return Redirect::to('index_success');
        }else{
            echo "<script>alert('账号或密码错误');history.go(-1);</script>";
            die;
        }

    }
}