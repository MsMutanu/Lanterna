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
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('second_name');
        $table->string('address');
        $table->string('phone');
        $table->string('email');
        $table->string('date_of_birth');
        $table->unsignedinteger('national_id_no');       
        $table->string('emergency_contact');
        $table->string('emergency_phone');
        
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
        Schema::dropIfExists('patients');
    }
};
