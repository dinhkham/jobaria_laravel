<?php

namespace App\Http\Requests;

//use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => ':attribute không được trống',
            'product_name.min' => ':attribute không được nhỏ hơn :min ký tự',
            'product_price.required' => ':attribute không được trống',
            'product_price.integer' => ':attribute phải là 1 số',
        ];
    }
    public function attributes()
    {
        return [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá sản phẩm',
        ];
    }
    protected function failedAuthorization()
    {
        throw new AuthenticationException('Bạn không có quyền truy cập');
    }
}
