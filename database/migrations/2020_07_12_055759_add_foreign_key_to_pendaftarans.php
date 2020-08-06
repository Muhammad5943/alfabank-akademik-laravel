<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPendaftarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            // $table->foreignId('id_user')->after('id')->constrained('users')->onDelate('cascade');
            // $table->foreignId('id_program_kursus')->after('id_user')->constrained('program_kursuses')->onDelate('cascade');

            $table->foreign('id_user')->references('id')->on('users')->onDelate('cascade');
            $table->foreign('id_program_kursus')->references('id')->on('program_kursuses')->onDelate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_program_kursus']);
        });
    }
}
