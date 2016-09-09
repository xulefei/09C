<?php
namespace App\Http\Controllers;
// use Controller;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class RegisterController extends Controller{
    public function getIndex(Request $request){
        // $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
        // if($session_uid==''){

        // }
        return view('home.register.index');
    }

    public function getRegisteryan(Request $request){
        $username = $request->input('username');
        $phone = $request->input('phone');
        $password = md5($request->input('password'));
        $email = $request->input('email');
        $times = time();
        $code = $request->input('code');
        $asd = DB::table('people')->insert(array('username'=>$username,
            'password'=>$password,'p_ipone'=>$phone,'p_time'=>$times,'email'=>$email,'rand'=>$code));
        // $users = DB::table('people')->first();
        echo '1';
    }

    //用户名验证
    public function getUsercheck(Request $request){
        $user = $request->get('name');
        $users = DB::table('people')->where('username','=',$user)->get();
        if(empty($users[0])){
            echo '1';
        }else{
            echo '0';
        }
    }

    public function getZzz(Request $request){
        return view('home.register.zccg');
    }





    // public function
}