<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->string('member_name');
            $table->integer('ac_no');
            $table->string('type');
            $table->integer('loan_amount');
            $table->integer('rate');
             $table->integer('time');
             $table->integer('interest');
            $table->integer('emi');
            $table->date('payment_date');
             $table->string('status')->default('In Process');





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
        Schema::dropIfExists('loans');
    }
}
