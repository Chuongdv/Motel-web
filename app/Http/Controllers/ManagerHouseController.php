<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManagerHouseController extends Controller
{
    public function getList(){
    	$house = DB::table('users')->join('house', 'users.id', '=', 'house.own')->get();
    	return view('house.danhsach', ['house' => $house]);
    }

    public function deleteHouse($id){
    	   	DB::table('image')->where('id', '=', $id)->delete();
    		DB::table('house')->where('id', '=', $id)->delete();
    		return redirect('manager/house/list')->with('thongbao', 'Xóa thành công');
    }
}
