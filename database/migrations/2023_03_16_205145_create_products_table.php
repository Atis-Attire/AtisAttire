<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('modell')->references('id')->on('modells');
            $table->char('size', 3);
            $table->integer('stock');
            $table->timestamps();
        });

        Product::create(['modell' => '1', 'size' => 'xs', 'stock' => 1]);
        Product::create(['modell' => '2', 'size' => 's', 'stock' => 2]);
        Product::create(['modell' => '3', 'size' => 's', 'stock' => 3]);
        Product::create(['modell' => '4', 'size' => 'm', 'stock' => 4]);
        Product::create(['modell' => '5', 'size' => 'l', 'stock' => 5]);
        Product::create(['modell' => '6', 'size' => 'xl', 'stock' => 6]);
        Product::create(['modell' => '7', 'size' => 'xs', 'stock' => 7]);
        Product::create(['modell' => '8', 'size' => 'm', 'stock' => 8]);
        Product::create(['modell' => '9', 'size' => 'l', 'stock' => 9]);
        Product::create(['modell' => '10', 'size' => 'xxl', 'stock' => 3]);
        Product::create(['modell' => '1', 'size' => 'm', 'stock' => 4]);
        Product::create(['modell' => '1', 'size' => 'l', 'stock' => 9]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
