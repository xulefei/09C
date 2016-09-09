<?php
namespace App\Http\Controllers;
// use Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller{
	public function getIndex(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){

		// }
//		return redirect('login/login1');
		 return view('home.register.index');
	}

	public function getSql(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){

		// }
		return view('home.register.index');
	}

	public function getUrl(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){

		// }
		return view('home.login.index');
	}
	public function getForget(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){

		// }
		return view('home.findpass.email');
	}
		public function postLogin(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){
			echo 111;
		// }
		//return view('home.login.index');
	}
	public  function postMail(Request $request){
		$mail=$request->input('email');
		$rand=rand(10000,999999);
		Session::put('mail',$mail);
		Session::put('randnum',$rand);
		$title="金融宝，您身边的理财管家！";
		$content="金融宝：您的账号正在进行找回操作。您的验证码是：".$rand;
		$data=array('address'=>$mail,'title'=>$title,'content'=>$content);
		$url="http://localhost/tp3.2/index.php?c=mail&a=index";
		$curl = curl_init(); // 启动一个CURL会话
		//curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
		curl_setopt($curl, CURLOPT_URL,$url); // 要访问的地址
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
		if($tmpInfo=="1"){
			return redirect('index/email1');
			//return view('home.findpass.email1',['mail'=>$mail]);
		}else{
			return view('home.findpass.email');
		}
		;
}

	public function getEmail1(Request $request){
		$mail=Session::get('mail');
		return view('home.findpass.email1',['mail'=>$mail]);
	 }
	public function  postEmailok(Request $request){
		//print_r($request->input());
		$nowrand=$request->input('code');
		$rand=Session::get('randnum');
//		echo $rand;
//		echo "<br/>";
//		echo $nowrand;die;

		if($nowrand==$rand){
			return redirect('index/email2');
		}else{
			return redirect('index/email1');
		}
	}
	public function getEmail2(Request $request){
		return  view('home.findpass.email2');
	}
	public function postReset(Request $request){
		$pass=$request->input('pass');
		$rpass=$request->input('rpass');
		$mail=Session::get('mail');
		$data=array('pass'=>$pass,'mail'=>$mail);
		if($pass==!$rpass){
			return redirect('index/email2');
		}else{
			$url="http://localhost/tp3.2/index.php?c=reset&a=index";
			$curl = curl_init(); // 启动一个CURL会话
			//curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
			curl_setopt($curl, CURLOPT_URL,$url); // 要访问的地址
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
			$tmp=json_decode($tmpInfo,true);
			if($tmp['id']=="111"){
				Session::forget('mail');
				Session::forget('randnum');
				return redirect('index/success');

			}else{
				echo "fails";
			}
		}

	}
	public  function  getSuccess(Request $request){
		return view('home.findpass.success');
	}
}