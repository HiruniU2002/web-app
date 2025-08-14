<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cakes', function (Blueprint $table) {
            $table->id();
            $table->string('cake_name');
            $table->enum('cake_type', [
                'Wedding Cakes',
                'Birthday Cakes',
                'Brownies',
                'Cup Cakes'
            ]);
            $table->enum('cake_flavour', [
                'Chocolate',
                'Vanilla',
                'Fruit',
                'Red Velvet'
            ]);
            $table->decimal('cake_price', 8, 2);
            $table->text('cake_description');
            $table->enum('cake_size', [
                'Small',
                'Medium',
                'Large'
            ]);
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cakes');
    }
};