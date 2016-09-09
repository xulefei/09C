<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
class MsgController extends Controller {
    function postIndex(){
        $tel = $_POST['tel'];
        $rand = rand(100000,999999);
        $target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
        $post_data = "account=cf_youngforyou&password=5d0475a646c95af8932d6965048d6284&mobile=".$tel."&content=".rawurlencode("您的验证码是：".$rand."。请不要把验证码泄露给其他人。");
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $target);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return($rand);
    }

}
