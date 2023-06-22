<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// su dung model
// khai bao product
use App\MyCustomClass\Products;
class ProductsController extends Controller{
	// tao bien model(la 1 biens cuar class ProductsCOPntroller)
	public $model;
	public function __construct(){
		// khỞi tạo object của class Products , sau đó gán vào biến $modle ( để từ biến $modle có thể gọi bất cứ hàm nào của product)
		$this->model=new Products();
	}
	public function read(){
		$data=$this->model->modelRead();
		return view("admin.products.read",["data"=>$data]);
	}
	public function update($id){
		$record=$this->model->modelGetRow($id);
		// tao bien $action de dua vao thuoc tinh action cua the form
		$action =url("backend/products/update-post/$id");
		return view("admin.products.create_update",["record"=>$record,"action"=>$action]);

	}public function updatePost($id){
		$this->model->modelUpdate($id);
		return redirect(url("backend/products"));
	}
	public function create(){

		$action =url("backend/products/create-post/");
		return view("admin.products.create_update",["action"=>$action]);

	}public function createPost(){
		$this->model->modelCreate();
		return redirect(url("backend/products"));
	}
	public function delete($id){
		$this->model->modelDelete($id);
		return redirect(url("backend/products"));
	}

}


 ?>