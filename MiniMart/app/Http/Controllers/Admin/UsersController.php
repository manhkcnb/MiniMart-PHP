<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//sử dụng query builder
use DB;
//đối tượng mã hóa password
use Hash;

class UsersController extends Controller
{
    public function read(Request $request){
        //lấy các bản ghi, phân 4 bản ghi trên 1 trang
        $data = DB::table("users")->orderBy("id","desc")->paginate(4);
        return view("admin.users.read",["data"=>$data]);
    }
    public function update(Request $request,$id){
        // laays 1 banr ghi
        $record =DB::table("users")->where("id","=",$id)->first();
        // taoj bieens action de dua vao thuoc tinh action cua form
        $action =url('backend/users/update-post/'.$id);
        return view('admin.users.create_update',["record"=>$record,"action"=>$action]);
    }
    public function updatePost(Request $request,$id){
        $email=$request->get("email");
        // ngaoi ra con coo
        $name=request("name");
        $password=$request->get("password");
        DB::table("users")->where("id","=",$id)->update(["name"=>$name]);
        if($password!=""){
            $password= Hash::make($password);
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        return redirect(url('backend/users'));
    }
    public function create(Request $request){
        // laays 1 banr ghi
     
        // taoj bieens action de dua vao thuoc tinh action cua form
        $action =url('backend/users/create-post');
        return view('admin.users.create_update',["action"=>$action]);
    }
    public function createPost(Request $request){
         $email=$request->get("email");
        // ngaoi ra con coo
        $name=request("name");
        $password=request("password");
        $password=Hash::make($password);
        DB::table("users")->insert(["name"=>$name,"email"=>$email,"password"=>$password]);
        
        return redirect(url('backend/users'));
    }
    public function delete(Request $request,$id){
        $record =DB::table("users")->where("id","=",$id)->delete();
        // taoj bieens action de dua vao thuoc tinh action cua form
        $action =url('backend/users/update-post/'.$id);
        return redirect(url('backend/users'));
    }
}
