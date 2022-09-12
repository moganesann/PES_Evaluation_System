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
        Schema::create('progress', function (Blueprint $table) {
            $table->string('std_id')->unique();
            $table->string('progress_perc');
            $table->string('comments');
            $table->timestamp('updated_at')->nullable();
 
        });

        DB::table('progress')->insert([
            ['std_id' => 'CB19083',  'progress_perc' => '70', 'comments' => 'Excellent'],
            ['std_id' => 'CB19015',  'progress_perc' => '68', 'comments' => 'Good'],
            ['std_id' => 'CB19016', 'progress_perc' => '64', 'comments' => 'Need improvement'],
            ['std_id' => 'CB18085', 'progress_perc' => '65', 'comments' => 'Need improvement'],
            ['std_id' => 'CB18026', 'progress_perc' => '72', 'comments' => 'Excellent'],
            ['std_id' => 'CB19025',  'progress_perc' => '57', 'comments' => 'Speed up your progress'],
            ['std_id' => 'CC18024',  'progress_perc' => '62', 'comments' => 'Need improvement'],
            ['std_id' => 'CC18011',  'progress_perc' => '70', 'comments' => 'Excellent' ],
            ['std_id' => 'CA19023',  'progress_perc' => '63', 'comments' => 'Need improvement' ],
            ['std_id' => 'CD19045',  'progress_perc' => '75', 'comments' => 'Excellent' ],
            ['std_id' => 'CC18067', 'progress_perc' => '67', 'comments' => 'Good'],
            ['std_id' => 'CC18076',  'progress_perc' => '68', 'comments' => 'Good'],
            ['std_id' => 'CC18093',  'progress_perc' => '69', 'comments' => 'Good'],
            ['std_id' => 'CA18039',  'progress_perc' => '63', 'comments' => 'Need improvement'],
            ['std_id' => 'CD18039', 'progress_perc' => '58', 'comments' => 'Speed up your progress' ],
           ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
};
