<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',['m','f','o']);
            $table->text('adderess');
            $table->date('DOB');
            $table->string('password');
            $table->integer('points');
            $table->boolean('status')->default(1);


            $table->timestamps();//created_id updated_id
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
}
