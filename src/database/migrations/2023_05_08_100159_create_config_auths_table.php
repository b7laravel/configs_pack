<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('config_auth', function (Blueprint $table) {
            $table->id();
            $table->text('type')->nullable();
            $table->text('status')->default('active');
            $table->integer('sort')->nullable();
            $table->integer('code_length')->default(4);
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->integer('other_code_timer_in_seconds')->default(60);
            $table->string('code_send_title')->nullable();
            $table->string('try_other_code_title')->nullable();
            $table->string('request_code_uri')->nullable();
            $table->string('code_check_uri')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('config_auth');
    }
};
