<?php
namespace App\Http\Controllers;
// use Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

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
		public function postLogin(Request $request){
		// $session_uid = isset($request->session()->get('uid'))?$request->session()->get('uid'):'';
		// if($session_uid==''){
			echo 111;
		// }
		//return view('home.login.index');
	}




	// public function
}