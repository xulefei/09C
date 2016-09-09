<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
 //    public function __construct(Request $request){
	// 	$session_uid = empty($request->session()->get('uid'))?'':$request->session()->get('uid');
	// 	if($session_uid==''){
	// 		echo "<script>alert('请先登录')</script>";
	// 		return view('home.login.index');
	// 	}		
	// }
}
