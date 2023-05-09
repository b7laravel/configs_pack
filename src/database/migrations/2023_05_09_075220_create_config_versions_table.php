<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('config_versions', function (Blueprint $table) {
            $table->id();
            $table->boolean('block_app')->nullable();
            $table->integer('android')->nullable();
            $table->boolean('android_check')->nullable();
            $table->integer('ios')->nullable();
            $table->boolean('ios_check')->nullable();
            $table->text('message')->nullable();
            $table->string('android_url')->nullable();
            $table->string('ios_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('config_versions');
    }
};
