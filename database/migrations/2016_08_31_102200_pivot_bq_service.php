<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotBqService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_tables', function (Blueprint $table) {
            $table->integer('bookqueue_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('service_tables',function(Blueprint $table){
            $table->foreign('bookqueue_id')->references('id')->on('bookqueues')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_tables');
    }
}
