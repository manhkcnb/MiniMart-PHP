<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//muốn sử dụng request thì phải lưu nó ở đây
// để sửa dụng đối tượng validator thì phải use đối tượng sau
use Illuminate\Support\Facades\Validator;
class HelloController extends Controller
{   

    //nếu muốn truyền đối tượng
    public function index(){
        echo "<h1> COntronnfj hekki, action index</h1>";
    }
    // truyen tham số từ url vào trong hàm controller
    public function index2($bien1,$bien2){
        echo "<h1> $bien1 $bien2</h1>";
    }public function form1(){
        return view("php64.form1");
    }public function form1Post(Request $request){
        $name =$request->get("name");
        $email =$request->get("email");
        echo "<h1> $name -$email</h1>";

    }public function form2(){
        return view("php64.form2");
    }public function form2Post(){
        // muốn su dung request
        // có thể sử dụng đối tượng reqiest để lấy giá trị thẻ form
        
        return view("php64.form2");

    }
    public function validation(){
        return view("php64.form3");
    }
    // validation-post
    public function validationPost(Request $request){
    // lấy tất cả các giá trị của thẻ form : $request
        $validator = Validator::make($request->all(),['name'=>'required|string|max:10','email'=>'email']);// tra ve true false
        if($validator->fails()){
               return redirect(url('controller/validation'))->withErrors($validator);
        }
        echo "<h1> Confirm ok</h1>";
     
    }

}
