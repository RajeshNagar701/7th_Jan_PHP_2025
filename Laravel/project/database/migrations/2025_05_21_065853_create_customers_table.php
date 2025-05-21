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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('pass');
            $table->string('gender');
            $table->string('lag');
            $table->bigInteger('mobile');
            $table->enum('status',['Block','Unblock'])->default('Unblock');
            $table->string('image');
            
            $table->timestamps(); // two column create created_at() updated_at()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
