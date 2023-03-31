<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 20);
            $table->timestamps();
        });

        Category::create(['name' => 'T-SHIRTS']);
        Category::create(['name' => 'HOODIES']);
        Category::create(['name' => 'TROUSERS']);
        Category::create(['name' => 'SOCKS']);
        Category::create(['name' => 'COATS']);
        Category::create(['name' => 'JACKETS']);
        Category::create(['name' => 'SHOES']);
        Category::create(['name' => 'SUITS']);
        Category::create(['name' => 'SHORTS']);
        Category::create(['name' => 'CARDIGANS']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
