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
        Schema::create('students', function (Blueprint $table) {
            $table->string('std_id')->unique();
            $table->string('crs_id');
            $table->string('lect_id');
            $table->string('title');
            $table->string('std_name');
            $table->string('std_email');
            $table->string('std_hp');
            $table->string('std_fac');
        });

        DB::table('students')->insert([
            ['std_id' => 'CB19083', 'crs_id' => 'BCC3012', 'lect_id' => 'SE19015', 'title' => 'Food Waste Application', 'std_name' => 'Moga', 'std_email' => 'moga@gmail.com', 'std_hp' => '018383939', 'std_fac' => 'FKOM'],
            ['std_id' => 'CB18085', 'crs_id' => 'BCC3024', 'lect_id' => 'SE18015', 'title' => 'Anti-Virus','std_name' => 'Aisyah', 'std_email' => 'aisyah@gmail.com', 'std_hp' => '0138384838', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CB19015', 'crs_id' => 'BCC3012','lect_id' => 'SE19015', 'title' => 'Attendance System','std_name' => 'Narresh', 'std_email' => 'narresh@gmail.com', 'std_hp' => '01124092575', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CB19016', 'crs_id' => 'BCC3012','lect_id' => 'SE18015', 'title' => 'Android task monitoring','std_name' => 'Loga', 'std_email' => 'loga@gmail.com', 'std_hp' => '0123342345', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CB18026', 'crs_id' => 'BCC3024','lect_id' => 'SE18015', 'title' => 'Fingerprint-based ATM system','std_name' => 'Aqilah', 'std_email' => 'aqilah@gmail.com', 'std_hp' => '0193324536', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CB19025', 'crs_id' => 'BCC3012','lect_id' => 'SE19015', 'title' => 'Advanced employee management system','std_name' => 'Ronald', 'std_email' => 'ronald@gmail.com', 'std_hp' => '0181123213', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CC18024', 'crs_id' => 'DCC3024','lect_id' => 'SE19015', 'title' => 'Image encryption using AES algorithm','std_name' => 'Alia', 'std_email' => 'alia@gmail.com', 'std_hp' => '0192230574', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CC18011', 'crs_id' => 'DCC3024','lect_id' => 'SE18015', 'title' => 'Fingerprint voting system','std_name' => 'Nadia', 'std_email' => 'nadia@gmail.com', 'std_hp' => '0181233214', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CA19023', 'crs_id' => 'BCC3012','lect_id' => 'SE18015', 'title' => 'Weather forecasting system','std_name' => 'Chee Kin', 'std_email' => 'ck@gmail.com', 'std_hp' => '0173246574', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CD19045', 'crs_id' => 'BCC3012','lect_id' => 'SE19015', 'title' => 'Android local train ticketing system','std_name' => 'Rani', 'std_email' => 'rani@gmail.com', 'std_hp' => '01132456789',  'std_fac' => 'FKOM' ],
            ['std_id' => 'CC18067', 'crs_id' => 'DCC3024','lect_id' => 'SE19015', 'title' => 'Railway tracking and arrival time prediction system','std_name' => 'Muthu', 'std_email' => 'muthu@gmail.com', 'std_hp' => '0172315423', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CC18076', 'crs_id' => 'DCC3024','lect_id' => 'SE18015', 'title' => 'Automated payroll system with GPS tracking and image capture','std_name' => 'Ali', 'std_email' => 'ali@gmail.com', 'std_hp' => '0134457784', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CC18093', 'crs_id' => 'DCC3024','lect_id' => 'SE18015', 'title' => 'e-Learning platform','std_name' => 'Pravin', 'std_email' => 'pravin@gmail.com', 'std_hp' => '0145457784','std_fac' => 'FKOM' ],
            ['std_id' => 'CC18039', 'crs_id' => 'DCC3024','lect_id' => 'SE19015', 'title' => 'Smart health prediction system','std_name' => 'Nabila', 'std_email' => 'nabila@gmail.com', 'std_hp' => '0156373892', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CA18039', 'crs_id' => 'BCC3024','lect_id' => 'SE19015', 'title' => 'Software piracy protection system','std_name' => 'Navin', 'std_email' => 'navin@gmail.com', 'std_hp' => '0156323255', 'std_fac' => 'FKOM' ],
            ['std_id' => 'CD18039', 'crs_id' => 'BCC3024','lect_id' => 'SE18015', 'title' => 'FYP Evaluation System', 'std_name' => 'Kavin', 'std_email' => 'kavin@gmail.com', 'std_hp' => '0167558999', 'std_fac' => 'FKOM' ],
            
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
