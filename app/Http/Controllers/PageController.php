<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function getHomepage(){
        $house = DB::table('house')->join('image', 'house.id', '=', 'image.id');
        
        return view('pages.HomePage', ['house' => $house]);
    }


    public function PostHomepage(Request $request){
        $house = DB::table('house')->join('image', 'house.id', '=', 'image.id');
        $province = DB::table('province')->get();

        if($request->provinceform != -1){
            $house=$house->where('province', '=', $request->provinceform);
        }

        if($request->districtform != -1){
            $house=$house->where('district', '=', $request->districtform);
        }

        if($request->wardform != -1){
            $house=$house->where('ward', '=', $request->wardform);
        }

        if($request->method != -1){
            $house=$house->where('type', '=', $request->method);
        }

       if($request->areaform == 1){
            $house=$house->where('areas', '>=', 10)->where('areas', '<=', 20);
        }elseif($request->areaform == 2){
            $house=$house->where('areas', '>=', 20)->where('areas', '<=', 30);
        }elseif($request->areaform == 3){
            $house=$house->where('areas', '>=', 30)->where('areas', '<=', 50);
        }elseif($request->areaform == 4){
            $house=$house->where('areas', '>=', 50);
        }

       if($request->costform == 1){
            $house=$house->where('cost', '>=', 1000)->where('cost', '<=', 3000);
        }elseif($request->costform == 2){
            $house=$house->where('cost', '>=', 3000)->where('cost', '<=', 5000);
        }elseif($request->costform == 3){
            $house=$house->where('cost', '>=', 5000);
        }


        return view('pages.HomePage', ['house' => $house]);

    }



    public function getDetail($id){
        $home = DB::table('house')->where("house.id", '=', $id)->join('image', 'house.id', '=', 'image.id')->get();
         return view('pages.DetailHome',  ['home' => $home[0]]);
    }

    public function getHost($id){
        $province = DB::table('province')->get();
        return view('pages.host', ['user' =>Auth::user(),'province' => $province]);
    }

    public function getProfile($id){
        return view('pages.profile', ['user' =>Auth::user()]);
    }

    public function postProfile(Request $request, $id){
        if($request->policy != "agree")
        {
            return redirect('/profile/$id')->with('thongbao', 'Hãy chấp nhận điều khoản trước khi thay đổi');
        }


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


    public function postHost(Request $request, $id){
        
        DB::table('house')->insert(['province'=>  $request->provinceform, 'district' => $request->districtform, 'ward' => $request->wardform, 'location' => $request->particular, 'areas' => $request->quantity, 'cost' => $request->cost, 'description' => $request->detailHouse, 'own' => $id, 'type' => $request->method, 'hostName' => $request->hostName, 'hostPhone' =>$request->hostPhone]);
        

        $house = DB::table('house')->get()->last();
        DB::table('image')->insert(['id'=> $house->id]);

        if($request->hasFile('imageHouse1')){
             $file = $request->file('imageHouse1');
             do{
                $name = str_random(5);
             }
             while(file_exists('image/house/' . $name . "." . $file->getClientOriginalExtension()));
             
            $request->file('imageHouse1')->move('image/house', $name .  "." .$file->getClientOriginalExtension());
            DB::table('image')->where('id', '=', $house->id)->update(['image1' => $name .  "." .$file->getClientOriginalExtension(), 'describe1' => $request->describeHouse1]);


            if($request->hasFile('imageHouse2')){
                $file = $request->file('imageHouse2');
             do{
                $name = str_random(5);
             }
             while(file_exists('image/house/' . $name . "." . $file->getClientOriginalExtension()));
             
            $request->file('imageHouse2')->move('image/house', $name .  "." .$file->getClientOriginalExtension());
            DB::table('image')->where('id', '=', $house->id)->update(['image2' => $name .  "." .$file->getClientOriginalExtension(), 'describe2' => $request->describeHouse2]);



            if($request->hasFile('imageHouse3')){
                $file = $request->file('imageHouse3');
             do{
                $name = str_random(5);
             }
             while(file_exists('image/house/' . $name . "." . $file->getClientOriginalExtension()));
             
            $request->file('imageHouse3')->move('image/house', $name .  "." .$file->getClientOriginalExtension());
            DB::table('image')->where('id', '=', $house->id)->update(['image3' => $name .  "." .$file->getClientOriginalExtension(), 'describe3' => $request->describeHouse3]);


            if($request->hasFile('imageHouse4')){
                $file = $request->file('imageHouse4');
             do{
                $name = str_random(5);
             }
             while(file_exists('image/house/' . $name . "." . $file->getClientOriginalExtension()));
             
            $request->file('imageHouse4')->move('image/house', $name .  "." .$file->getClientOriginalExtension());
            DB::table('image')->where('id', '=', $house->id)->update(['image4' => $name .  "." .$file->getClientOriginalExtension(), 'describe4' => $request->describeHouse4]);
            
            }
          
            }

            }

           
        }

       return redirect('/host/$id')->with('thongbao', 'Đăng bài thành công');
    }


}
