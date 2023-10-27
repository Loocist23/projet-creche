<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('journee_enfants', function (Blueprint $table) {
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('enfant_id')->references('id')->on('enfants')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('planning_id');
            $table->foreign('planning_id')->references('id')->on('plannings')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')->references('id')->on('personnels')
                ->onDelete('cascade')
                ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journee_enfants', function (Blueprint $table) {

        });
    }
};
