<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('blood');
            $table->string('donation_date');
            $table->string('no_of_bag');
            $table->string('contact_no');
            $table->string('donation_time');
            $table->string('managed');
            $table->string('location');
            $table->string('relationship');
            $table->string('message');
            $table->boolean('is_posted')->default(false);
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')
            ->on('patients')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
}
