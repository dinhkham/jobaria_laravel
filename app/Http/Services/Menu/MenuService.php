<?php


namespace App\Http\Services\Menu;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuService
{
    public function create($request)
    {
        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
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
    public function getParent()
    {
        return Menu::where('parent_id', 0)->get();
       /* return Menu::
            when($parent_id == 0, function ($query) use ($parent_id){
                $query->where('parent_id',$parent_id);
            })->get();*/
    }
    public function getAll()
    {
        return Menu::orderbyDesc('id')->paginate(10);
    }
    public function update($request, $menu)
    {
        if ($request->input('parent_id') != $menu->id){
            $menu->parent_id = (int) $request->input('parent_id');
        }
        $menu->name = (string) $request->input('name');
        $menu->description = (string) $request->input('description');
        $menu->content = (string) $request->input('content');
        $menu->active = (int) $request->input('active');
        $menu->slug = (string) Str::slug($request->input('name'), '-');
        $menu->save();
        session()->flash('success', 'Cập nhật thành công');
    }
    public function destroy($request)
    {
        $id = (int) $request->input('id');
        $menu = Menu::where('id', $id)->first();
        if ($menu) {
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }
    public function changeStatus($request)
    {
        $id = (int) $request->input('id');
        $active = Menu::where('id', $id)->where('id', $id)->value('active');
        $new_active = ($active == 1) ? 0 : 1;
        $menu = Menu::where('id', $id)->first();
        if ($menu) {
            return Menu::where('id', $id)->update(array('active' => $new_active));
        }
        return false;
    }
}
