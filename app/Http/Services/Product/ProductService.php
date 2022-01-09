<?php


namespace App\Http\Services\Product;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Http\Services\Menu\MenuService;
class ProductService
{
    public function create($request)
    {
        $isValidPrice = $this->isValidPrice($request);
        if (empty($isValidPrice)) return false;
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' =>  $request->input('price'),
                'price_sale' =>  $request->input('price_sale'),
                'thumb' => (string) $request->input('thumb'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'slug' => Str::slug($request->input('name'), '-'),
                'active' => (int) $request->input('active'),
            ]);
            session()->flash('success', 'Thêm mới thành công');
        } catch (\Exception $err){
            session()->flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
    protected function isValidPrice($request)
    {
        if ($request->input('price') <= $request->input('price_sale')){
            session()->flash('error', 'Giá khuyến mại phải nhỏ hơn giá gốc');
            return false;
        }
        return true;
    }
    public function getParent()
    {
        return Menu::get();
    }
    public function getAll()
    {
        return Product::get();
    }
    public function update($request, $menu)
    {
        $menu->name = (string) $request->input('name');
        $menu->thumb = (string) $request->input('thumb');
        $menu->price = $request->input('price');
        $menu->price_sale = $request->input('price_sale');
        $menu->description = (string) $request->input('description');
        $menu->content = (string) $request->input('content');
        $menu->active = (int) $request->input('active');
        $menu->slug = (string) Str::slug($request->input('name'), '-');
        $menu->menu_id = (int) $request->input('menu_id');
        $menu->save();
        session()->flash('success', 'Cập nhật thành công');
    }
    public function destroy($request)
    {
        $id = (int) $request->input('id');
        $product = Product::where('id', $id)->first();
        if ($product) {
            return Product::where('id', $id)->delete();
        }
        return false;
    }
    public function changeStatus($request)
    {
        $id = (int) $request->input('id');
        $active = Product::where('id', $id)->where('id', $id)->value('active');
        $new_active = ($active == 1) ? 0 : 1;
        $product = Product::where('id', $id)->first();
        if ($product) {
            return Product::where('id', $id)->update(array('active' => $new_active));
        }
        return false;
    }
}
