<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\basic;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redis;

class basicController extends Controller
{
    public function index(){
    	return " Home for Basic Controller";
    }

    public function about(){
    	$name='Javed';
    	$id='345';
    	$phone='017384464';
    	$address='345, Dhaka';
    	//return view('all_user')->with('name',$name);
    	//return view('all_user',compact('name','id','phone'));
    	return view('all_user',compact('name','id','phone'))->with('address',$address);
    }

    public function viewCount(Request $request, $id)
     {
             $redis = \Redis::connection();
             $views=$redis->incr('article'.$id.'view')
            return "This is article with id".$id."It has".$views. "Views";
     }
}
