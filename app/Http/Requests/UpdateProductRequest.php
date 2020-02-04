<?php

namespace App\Http\Requests;

use App\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'codigo_barras' => [
                'min:13',
                'max:13',
                'required',
                'unique:products,codigo_barras,' . request()->route('product')->id,
            ],
            'descricao'     => [
                'max:50',
                'required',
            ],
            'preco'         => [
                'required',
            ],
        ];
    }
}
