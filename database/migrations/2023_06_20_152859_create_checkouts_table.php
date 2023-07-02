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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('country')->nullable();
            $table->string('saddress')->nullable();
            $table->string('apartment')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('code')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('order_name')->nullable();
            $table->string('order_price')->nullable();
            $table->string('account')->nullable();
            $table->string('payment')->nullable();
            $table->string('paypal')->nullable();
            $table->string('order_note')->nullable();

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
        Schema::dropIfExists('checkouts');
    }
};
