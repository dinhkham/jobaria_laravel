<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function _construct(){

  }
  //Hien thi danh sach chuyen muc (phuong thuc get)
  public function index(){
    return view('clients/categories/list');
  }
  // Lay ra 1 chuyen muc theo id (phuong thuc get)
  public function getCategory($id){
    return view('clients/categories/edit');
  }
  // Cap nhat 1 chuyen muc
  public function updateCategory($id){
    return 'Submit sua chuyen muc '.$id;
  }
  // Show form du lieu (phuong thuc get)
  public function addCategory(){
    return view('clients/categories/add');
  }
   // Them du lieu vao  1 chuyen muc (phuong thuc post)
   public function handleAddCategory(){
    return redirect(route('categories.add'));
  }
  // Xoa 1 chuyen muc (phuong thuc delete)
  public function deleteCategory($id){
    return 'Submit xoa chuyen muc '.$id;
  }
}
