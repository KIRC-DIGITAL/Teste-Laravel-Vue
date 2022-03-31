<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAvaliacaoInSubimissaoExpocomRegionalCentrooestes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submissao_expocom_regional_centrooestes', function (Blueprint $table) {
            $table->bigInteger('avaliacao')->after('inscricao_id')->nullable();
            $table->bigInteger('regiao')->after('avaliacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissao_expocom_regional_centrooestes', function (Blueprint $table) {
            $table->dropColumn('avaliacao');
            $table->dropColumn('regiao');
        });
    }
}
