<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['welcome'] = 'welcome';
        return view('clients.home', $this->data);
    }
    public function products(){
        $this->data['title'] = 'San pham';
        return view('clients.products', $this->data);
    }
    public function getAdd(){
        $this->data['title'] = 'Thêm sản phẩm';
        $this->data['errorMessage'] = 'Vui lòng kiểm tra dữ liệu';
        return view('clients.add', $this->data);
    }
    public function postAdd(ProductRequest $request){
        dd($request);
    }
    //   public function postAdd(Request $request){
//        $rules = [
//            'product_name' => 'required|min:6',
//            'product_price' => 'required|integer'
//        ];
//        $message = [
//            'product_name.required' => 'Tên sản phẩm không được trống',
//            'product_name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
//            'product_price.required' => 'Giá sản phẩm không được trống',
//            'product_price.integer' => 'Giá sản phẩm phải là 1 số',
//        ];
//        $request->validate($rules, $message);

}
