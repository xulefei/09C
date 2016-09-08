<?php
namespace App\Http\Controllers;
// use Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller{
	public function getLogin(){
		return redirect('login/login1');
		echo 321;
	}

	public function postLogin1(Request $request){

		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$data=array('name'=>$name,'pass'=>$pass);
		$address="http://localhost/tp3.2/index.php?c=index&a=index";
		$curl = curl_init(); // 启动一个CURL会话
		//curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
		curl_setopt($curl, CURLOPT_URL, $address); // 要访问的地址
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
		curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
		curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
		curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
		curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
		curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
		curl_setopt($curl, CURLOPT_POSTFIELDS,$data);
		$tmpInfo = curl_exec($curl); // 执行操作
		curl_close($curl);
		echo $tmpInfo;
	}
}
