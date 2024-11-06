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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('university')->nullable();
            $table->text('description')->nullable();
            $table->string('studies')->nullable();
            $table->string('image')->nullable();
            $table->string('cv')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('university');
            $table->dropColumn('description');
            $table->dropColumn('studies');
            $table->dropColumn('image');
            $table->dropColumn('cv');
            $table->dropColumn('address');
            $table->dropColumn('contact');
        });
    }
};
