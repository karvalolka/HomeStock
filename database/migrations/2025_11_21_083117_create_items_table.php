<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_path')->nullable();
            $table->foreignId('type_item_id')->constrained();
            $table->string('setting')->comment('парраметр (сеттинг/автор/')->nullable();
            $table->string('description')->comment('описание')->nullable();
            $table->enum('season', ['winter', 'summer', 'off-season', 'demi-season'])->comment('сезон')->default('off-season');
            $table->enum('type', ['component', 'object'])->comment('тип предмета')->default('object');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
