<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class Authentication extends Controller
{
    public function getSignin(){
        if(Auth::check())
        {
            if(Auth::user()->Rolle == 0)
            {
              return redirect('host/' . Auth::user()->id);
            }
            else
            {
                 return redirect('manager/user/list');
            } 
        }
    	return view('pages.login');
    }

    public function postSignin(Request $request){
        
    	if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password]))
    	{
            if(Auth::user()->Rolle == 0)
            {
    		  return redirect('host/' . Auth::user()->id);
            }
            else
            {
                 return redirect('manager/user/list');
            } 

    	}
    	else{
    		return redirect('signin')->with('thongbao','Email không tồn tại hoặc sai mật khẩu!');
    	}
    }


    public function getSignout(){
        Auth::logout();
        return redirect('/signin');
    }

    public function getSignup(){
    	return view('pages.signup');
    }

    public function postSignup(Request $request){

    	$email = DB::table('users')->where('email', '=', $request->email)->get();
    	echo count($email);
    	
    	if(count($email) == 0){
    		DB::table('users')->insert(['name' => $request->name, 'email' => $request->email, 'password' =>bcrypt($request->password), 'birthday' => $request->bday, 'gender' => $request->gender]);
    		return redirect('signin')->with('thongbao','Đăng kí thành công, bây giờ bạn có thể đăng nhập');
    	}
    	else{
    		return redirect('signup')->with('thongbao','email đã được sử dụng');
    	}
    }

    
}
