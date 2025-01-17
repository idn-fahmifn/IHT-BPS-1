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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_room')->constrained('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->string('item_name');
            $table->string('brand');
            $table->integer('stok');
            $table->enum('status', ['good', 'broke', 'maintenance'])->default('good');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
