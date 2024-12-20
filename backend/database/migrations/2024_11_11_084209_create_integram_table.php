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
        Schema::create('integram', function (Blueprint $table) {
            $table->id();
            $table->string("cegnev");
            $table->string("cim");
            $table->string("adoszam");
            $table->string("nev");
            $table->string("tel");
            $table->string("email");
            $table->longText("pdf");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integram');
    }
};
