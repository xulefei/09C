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

	public function getLogin1(Request $request){
		echo 123;
	}
}
