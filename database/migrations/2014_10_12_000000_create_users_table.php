<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('permission')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'Polgár Attila', 'email' => 'polgar.attila@gmail.com', 'password' => Hash::make('Aa123456@'), 'permission' => true]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
