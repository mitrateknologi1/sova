<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('indikator_id');
            $table->uuid('opd_id');
            $table->uuid('users_id');
            $table->integer('status_konfirmasi')->default(0);
            $table->dateTime('tanggal_konfirmasi')->nullable();
            $table->uuid('admin_konfirmasi')->nullable();
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
        Schema::dropIfExists('monitoring');
    }
}
