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
        Schema::create('guiders', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the Guider record
            $table->foreignId('user_id')
                ->nullable() // Foreign key to the users table
                ->constrained() // Automatically links to the `id` column in the `users` table
                ->onDelete('cascade'); // If the user is deleted, the Guider record is deleted as well
            $table->string('name'); // Guider name
            $table->string('email')->unique(); // Guider email
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); // Status of the Guider
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Guiders');
    }
};
