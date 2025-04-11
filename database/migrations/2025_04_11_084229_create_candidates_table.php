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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('full_address');
            $table->string('district');
            $table->string('state');
            $table->integer('age');
            $table->string('marital_status');
            $table->string('qualification');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('job_experience')->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
