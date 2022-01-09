<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductService;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $data = [];
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Danh sách sản phẩm';
        $data['products'] = $this->productService->getAll();
        return view('admin.product.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Thêm sản phẩm';
        $data['menus'] = $this->productService->getParent();
        return view('admin.product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $result = $this->productService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data['title'] = 'Chỉnh sửa sản phẩm '.$product->name;
        $data['menus'] = $this->productService->getParent();
        $data['product'] = $product;
        return view('admin.product.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['title'] = 'Chỉnh sửa sản phẩm '.$product->name;
        $data['menus'] = $this->productService->getParent();
        $data['product'] = $product;
        return view('admin.product.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, ProductRequest $request)
    {
        $result = $this->productService->update($request, $product);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->productService->destroy($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công',
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Xóa không thành công',
        ]);
    }
    public function changeStatus(Request $request)
    {
        $result = $this->productService->changeStatus($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => 'Thay đổi trạng thái thành công',
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Thay đổi trạng thái thất bại',
        ]);
    }
}
