<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the service
            $table->string('category'); // Category of the service
            $table->decimal('price', 10, 2); // Price of the service, allowing up to 10 digits with 2 decimal places
            $table->text('description'); // Description of the service
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); // Status of the service
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
