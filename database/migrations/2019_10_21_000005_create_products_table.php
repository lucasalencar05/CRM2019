<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigo_barras')->unique();

            $table->string('descricao');

            $table->decimal('preco', 15, 2);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
