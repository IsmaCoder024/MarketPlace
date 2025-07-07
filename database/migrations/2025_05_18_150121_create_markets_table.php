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
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('image_path');
            $table->string('description');
            $table->string('price');
            $table->string('seen')->default('Yes');
            $table->boolean('isApproved')->default(false);
            $table->boolean('isAppropiate')->nullable();
            $table->string('delReason')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    
      //Reverse the migrations.

      public function down(): void
    {
        Schema::dropIfExists('Markets');
    }
         
    
     

};
