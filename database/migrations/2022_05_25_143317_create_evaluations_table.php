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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->string('ev_id')->unique();
            $table->string('std_id');
            $table->String('marksev1');
            $table->String('marksev2');
            $table->String('marksev3');
            $table->String('markstotal');
        });

        DB::table('evaluations')->insert([
            ['std_id' => 'CB19083', 'ev_id' => 'E01', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CB19015', 'ev_id' => 'E02', 'marksev1' => '23', 'marksev2' => '22', 'marksev3' => '24', 'markstotal' => ''],
            ['std_id' => 'CB19016', 'ev_id' => 'E03', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CB18085', 'ev_id' => 'E04', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CB18026', 'ev_id' => 'E05', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CB19025', 'ev_id' => 'E06', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CC18024', 'ev_id' => 'E07', 'marksev1' => '22', 'marksev2' => '34', 'marksev3' => '30', 'markstotal' => ''],
            ['std_id' => 'CC18011', 'ev_id' => 'E08', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CA19023', 'ev_id' => 'E09', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CD19045', 'ev_id' => 'E10', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CC18067', 'ev_id' => 'E11', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CC18076', 'ev_id' => 'E12', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CC18093', 'ev_id' => 'E13', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CA18039', 'ev_id' => 'E14', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
            ['std_id' => 'CD18039', 'ev_id' => 'E15', 'marksev1' => '', 'marksev2' => '', 'marksev3' => '', 'markstotal' => ''],
           ]);
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
};
