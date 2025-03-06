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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name of the destination
            $table->text('description'); // Description of the destination
            $table->decimal('price', 10, 2); // Price of the destination, allowing up to 10 digits and 2 decimal points
            $table->string('image')->nullable(); // Image path, nullable in case no image is uploaded
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); // Status, defaulting to 'Active'
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};
