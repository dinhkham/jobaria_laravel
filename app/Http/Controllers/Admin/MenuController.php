<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    public $data = [];
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index()
    {
        $data['title'] = 'Danh sách danh mục';
        $data['menus'] = $this->menuService->getAll();
        return view('admin.menu.list', $data);
    }
    public function create()
    {
        $data['title'] = 'Thêm danh mục';
        $data['menus'] = $this->menuService->getParent();
        return view('admin.menu.add', $data);
    }
    public function store(CreateFormRequest $request)
    {

        $result = $this->menuService->create($request);
        return redirect()->back();
    }
    public function show(Menu $menu)
    {
        $data['title'] = 'Chỉnh sửa danh mục '.$menu->name;
        $data['menu'] = $menu;
        $data['menus'] = $this->menuService->getParent();
        return view('admin.menu.edit', $data);
    }
    public function edit(Menu $menu)
    {
        $data['title'] = 'Chỉnh sửa danh mục '.$menu->name;
        $data['menu'] = $menu;
        $data['menus'] = $this->menuService->getParent();
        return view('admin.menu.edit', $data);
    }
    public function update(Menu $menu, CreateFormRequest $request)
    {
        $result = $this->menuService->update($request, $menu);
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result = $this->menuService->destroy($request);
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
        $result = $this->menuService->changeStatus($request);
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
