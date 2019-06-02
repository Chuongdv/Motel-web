<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getHomepage(){
    	return view('pages.HomePage');
    }

    public function getDetail($id){
    	 return view('pages.DetailHome');
    }

    public function getHost($id){
    	$province = DB::table('province')->get();
    	return view('pages.host', ['user' =>Auth::user(),'province' => $province]);
    }

    public function getProfile($id){
    	return view('pages.profile', ['user' =>Auth::user()]);
    }

    public function postProfile(Request $request, $id){
    	if($request->password !="")
    	{
    		  DB::table('users')->where('id', '=', $id)->update(['name' => $request->name, 'email' => $request->email, 'password' =>bcrypt($request->password), 'birthday' => $request->bday, 'gender' => $request->gender]);
    	}
    	else
    	{

		  DB::table('users')->where('id', '=', $id)->update(['name' => $request->name, 'email' => $request->email, 'birthday' => $request->bday, 'gender' => $request->gender]);
    	}
    	return redirect('/profile/$id')->with('thongbao', 'Thông tin cá nhân đã được cập nhật');
    }


    public function getDistrict($id){
    	$district = DB::table('district')->where('province_id', '=', $id)->get();
    	return response()->json($district);
    }


    public function getWard($id){
        $ward = DB::table('Ward')->where('district_id', '=', $id)->get();
        return response()->json($ward);
    }


}
