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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->string('lect_id')->unique();
            $table->string('lect_name');
            $table->string('lect_email');
            $table->string('lect_position');
            $table->string('lect_hp');
            $table->string('lect_officeno');
            $table->string('lect_faculty');
            $table->string('lect_exp');
        });


        DB::table('lecturers')->insert([
            ['lect_id' => 'SE19015', 'lect_name' => 'Narresh Naidu A/L Subramaniam', 'lect_email' => 'narresh@gmail.com', 'lect_position' => 'Supervisor/Evaluator', 'lect_hp' => '01124092575', 'lect_officeno' => '038848483', 'lect_faculty' => 'FKOM', 'lect_exp' => 'Mobile'],
            ['lect_id' => 'SE18015', 'lect_name' => 'Prabhu A/L Muthu', 'lect_email' => 'prabu@gmail.com', 'lect_position' => 'Supervisor', 'lect_hp' => '1067736363', 'lect_officeno' => '063838383', 'lect_faculty' => 'FKOM', 'lect_exp' => 'Web'],
           ]);






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
};
