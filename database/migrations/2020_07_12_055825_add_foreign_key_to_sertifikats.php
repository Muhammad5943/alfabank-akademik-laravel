<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSertifikats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            // $table->foreignId('id_pendaftaran')->after('id')->constrained('pendaftarans')->onDelate('cascade');

            $table->foreign('id_pendaftaran')->references('id')->on('pendaftarans')->onDelate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sertifikats', function (Blueprint $table) {
            $table->dropForeign(['id_pendaftaran']);
        });
    }
}
