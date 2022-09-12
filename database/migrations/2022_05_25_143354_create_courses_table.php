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
        Schema::create('courses', function (Blueprint $table) {
            $table->string('crs_id')->unique();
            $table->string('crs_name');
            $table->string('crs_desc');
        });

        DB::table('courses')->insert([
            ['crs_id' => 'BCC3012', 'crs_name' => 'PSM1', 'crs_desc' => 'Undergraduate Project 1'],
            ['crs_id' => 'BCC3024', 'crs_name' => 'PSM2', 'crs_desc' => 'Undergraduate Project 2'],
            ['crs_id' => 'DCC3024', 'crs_name' => 'PTA', 'crs_desc' => 'Final Year Diploma Project'],
           ]);






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
