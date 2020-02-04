@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.update", [$product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('codigo_barras') ? 'has-error' : '' }}">
                <label for="codigo_barras">{{ trans('cruds.product.fields.codigo_barras') }}*</label>
                <input type="text" id="codigo_barras" name="codigo_barras" class="form-control" value="{{ old('codigo_barras', isset($product) ? $product->codigo_barras : '') }}" required>
                @if($errors->has('codigo_barras'))
                    <p class="help-block">
                        {{ $errors->first('codigo_barras') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.codigo_barras_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
                <label for="descricao">{{ trans('cruds.product.fields.descricao') }}*</label>
                <input type="text" id="descricao" name="descricao" class="form-control" value="{{ old('descricao', isset($product) ? $product->descricao : '') }}" required>
                @if($errors->has('descricao'))
                    <p class="help-block">
                        {{ $errors->first('descricao') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.descricao_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('preco') ? 'has-error' : '' }}">
                <label for="preco">{{ trans('cruds.product.fields.preco') }}*</label>
                <input type="number" id="preco" name="preco" class="form-control" value="{{ old('preco', isset($product) ? $product->preco : '') }}" step="0.01" required>
                @if($errors->has('preco'))
                    <p class="help-block">
                        {{ $errors->first('preco') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.preco_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection