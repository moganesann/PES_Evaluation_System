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
        Schema::create('schedules', function (Blueprint $table) {
            $table->string('schedule_id')->unique();
            $table->string('std_id');
            $table->string('lect_id');
            $table->string('Schedule_date');
            $table->string('Schedule_time');
            
        });

        Illuminate\Support\Facades\DB::table('schedules')->insert([
            ['schedule_id' => '01', 'std_id' => 'CB19025', 'lect_id' => 'SE18015', 'schedule_date' => '2022-06-15', 'Schedule_time' => '10:00'],
            ['schedule_id' => '02', 'std_id' => 'CB18085', 'lect_id' => 'SE19015', 'schedule_date' => '2022-06-15', 'Schedule_time' => '10:30'],
            ['schedule_id' => '03', 'std_id' => 'CC18076', 'lect_id' => 'SE19016', 'schedule_date' => '2022-06-15', 'Schedule_time' => '11:00'],
            ['schedule_id' => '04', 'std_id' => 'CB18026', 'lect_id' => 'SE19017', 'schedule_date' => '2022-06-15', 'Schedule_time' => '11:30'],
            ['schedule_id' => '05', 'std_id' => 'CA19023', 'lect_id' => 'SE19015', 'schedule_date' => '2022-06-15', 'Schedule_time' => '14:00'],
            ['schedule_id' => '06', 'std_id' => 'CD18039', 'lect_id' => 'SE19018', 'schedule_date' => '2022-06-15', 'Schedule_time' => '14:30'],
            ['schedule_id' => '07', 'std_id' => 'CB19016', 'lect_id' => 'SE19019', 'schedule_date' => '2022-06-15', 'Schedule_time' => '15:00'],
            ['schedule_id' => '08', 'std_id' => 'CB19083', 'lect_id' => 'SE19015', 'schedule_date' => '2022-06-16', 'Schedule_time' => '11:00'],
            ['schedule_id' => '09', 'std_id' => 'CB19083', 'lect_id' => 'SE18015', 'schedule_date' => '2022-06-16', 'Schedule_time' => '11:30'],


            ]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
