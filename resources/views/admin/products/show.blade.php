@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.codigo_barras') }}
                        </th>
                        <td>
                            {{ $product->codigo_barras }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.descricao') }}
                        </th>
                        <td>
                            {{ $product->descricao }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.preco') }}
                        </th>
                        <td>
                            ${{ $product->preco }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection