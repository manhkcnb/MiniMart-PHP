<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//sử dụng query builder cần khai báo đối tượng DB để thao tác csdl
use DB;

class CustomersController extends Controller
{
    public function read(Request $request){
        $data = DB::table("customers")->orderBy("id","desc")->paginate(10);
        /*
            - DB::table("customers") <=> sử dụng query builder tác động vào table customers
            - ->orderBy("id","desc") <=> order by id desc
            - ->paginate(4) <=> phân 4 bản ghi trên một trang (laravel có hàm phân trang sẵn)
        */
        return view("crud.customers.read",["data"=>$data]);
    }
    public function create(Request $request){}
    public function createPost(Request $request){}
    public function update(Request $request,$id){
        //tạo biến action để đưa vào thuộc tính action của thẻ form
        $action = url('update-post/'.$id);
        //lấy một bản ghi
        $record = DB::table("customers")->where("id","=",$id)->first();
        /*
            ->first() <=> lấy một bản ghi
            ->get() <=> lấy tất cả kết quả truy vấn trả về
        */
        return view("crud.customers.form_create_update",["action"=>$action,'record'=>$record]);
    }
    public function updatePost(Request $request,$id){
        $name = $request->get('name');
        $email = $request->get('email');
        $address = $request->get('address');
        $phone = $request->get('phone');
        //update ban ghi
        DB::table("customers")->where("id","=",$id)->update(["name"=>$name,"email"=>$email,"address"=>$address,"phone"=>$phone]);
        //di chuyển đến một url
        return redirect(url('read'));
    }
    public function delete(Request $request,$id){}
}
