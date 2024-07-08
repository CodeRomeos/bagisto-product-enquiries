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
        Schema::create('product_enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->index()->nullable();
            $table->unsignedBigInteger('product_id')->index()->nullable();
            $table->string('product_name')->index()->nullable();
            $table->string('name')->index()->nullable();
            $table->string('email')->index()->nullable();
            $table->string('phone')->index()->nullable();
            $table->text('message')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_enquiries');
    }
};
