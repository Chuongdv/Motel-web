<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ManagerUserController extends Controller
{
    
    public function getList(){
    	$user = DB::table('users')->where('Rolle', '=', 0)->get();
    	return view('user.danhsach', ['user' => $user]);
    }


    public function deleteUser($id){
    	
    	$house = DB::table('house')->where('own', '=', $id)->get();
    	if(isset( $house[0])){
    		DB::table('image')->where('id', '=', $house[0]->id)->delete();
    		DB::table('house')->where('own', '=', $id)->delete();
    	}
    	DB::table('users')->where('id', '=', $id)->delete();
    	return redirect('/manager/user/list')->with('thongbao', 'Xóa thành công');
    	
 
    }
}
