<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use DB,Session,Request,Redirect,Storage;
class HomeController extends Controller
{
   public function index_success(){
       return view('home/index');
   }
}