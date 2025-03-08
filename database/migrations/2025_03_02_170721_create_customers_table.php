<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('guiders', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')
                ->nullable() 
                ->constrained() 
                ->onDelete('cascade'); 
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('image')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->text('bio')->nullable();
            $table->boolean('is_active')->default(true); 
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
        Schema::dropIfExists('guiders');
    }
};
