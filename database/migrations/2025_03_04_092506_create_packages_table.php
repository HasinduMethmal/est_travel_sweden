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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Package name (e.g. "Beach Holiday")
            $table->text('description'); // Detailed description of the package
            $table->decimal('price', 10, 2); // Price of the package
            $table->string('destination'); // Destination for the package
            $table->integer('duration'); // Duration of the trip in days
            $table->string('image')->nullable(); // Image URL or path for the package
            $table->boolean('is_active')->default(true); // To check if the package is available
            $table->timestamps(); // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
