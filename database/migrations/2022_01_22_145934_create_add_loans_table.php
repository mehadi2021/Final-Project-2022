<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_loans', function (Blueprint $table) {
              $table->id();
            $table->string('name');
            $table->integer('amount');
             $table->integer('time');
              $table->integer('rate');
               $table->integer('interest');
                $table->integer('emi');
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
        Schema::dropIfExists('add_loans');
    }
}
