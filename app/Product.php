<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'preco',
        'descricao',
        'created_at',
        'updated_at',
        'deleted_at',
        'codigo_barras',
    ];
}
