<?php


namespace App\Helpers;


class Helper
{
    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';
        if (!empty($menus)){
            foreach ($menus as $key =>$menu){
                if ($menu->parent_id == $parent_id){
                    $checked = '';
                    if($menu->active == 1) $checked ='checked';
                    $html .= '
                        <tr>
                            <td>'. $menu->id .'</td>
                            <td>'. $char.$menu->name .'</td>
                            <td>
                                <div class="custom-control custom-switch mb-3 ">
                                    <input onchange="changeStatusItem('. $menu->id .', \'/admin/menus/changeStatus\')" type="checkbox" '.$checked.' value="'. $menu->active .'" name="active" class="custom-control-input" id="customSwitch'. $menu->id .'">
                                    <label  class="cursor custom-control-label" for="customSwitch'. $menu->id .'"></label>
                                </div>
                            </td>
                            <td>'. $menu->updated_at .'</td>
                            <td class="text-center">
                            <a title="Edit" class="text-black-50 mr-2" href="/admin/menus/edit/'. $menu->id .'"><i class="fas fa-edit"></i></a>
                            <a title="Delete" class="text-black-50"
                            onclick="removeRow('. $menu->id .', \'/admin/menus/destroy\')"
                            href="javascript:void(0);"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    ';
                    unset($menus[$key]);
                    $html .= self::menu($menus, $menu->id, $char.'--');
                }
            }
        }
        return $html;
    }
    public static function products($products)
    {
        $html = '';
        if (!empty($products)){
            foreach ($products as $key =>$product){
                $checked = '';
                if($product->active == 1) $checked ='checked';
                $price = !empty($product->price_sale) ? number_format($product->price_sale,'0').'đ' : number_format($product->price,'0').'đ';
                $html .= '
                        <tr>
                            <td>'. $product->id .'</td>
                            <td>'. $product->name .'</td>
                            <td>'. $price .'</td>
                            <td>
                                <div class="custom-control custom-switch mb-3 ">
                                    <input onchange="changeStatusItem('. $product->id .', \'/admin/products/changeStatus\')" type="checkbox" '.$checked.' value="'. $product->active .'" name="active" class="custom-control-input" id="customSwitch'. $product->id .'">
                                    <label  class="cursor custom-control-label" for="customSwitch'. $product->id .'"></label>
                                </div>
                            </td>
                            <td>'. $product->updated_at .'</td>
                            <td class="text-center">
                            <a title="Edit" class="text-black-50 mr-2" href="/admin/products/edit/'. $product->id .'"><i class="fas fa-edit"></i></a>
                            <a title="Delete" class="text-black-50"
                            onclick="removeRow('. $product->id .', \'/admin/products/destroy\')"
                            href="javascript:void(0);"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    ';
            }
        }
        return $html;
    }
}
