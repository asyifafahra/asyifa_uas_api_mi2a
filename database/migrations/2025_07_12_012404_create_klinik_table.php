<?php

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
        Schema::create('kliniks', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('address');
    $table->string('phone');
    $table->string('type');
    $table->double('latitude');
    $table->double('longitude');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kliniks');
    }
};

