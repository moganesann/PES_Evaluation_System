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
        Schema::create('coordinators', function (Blueprint $table) {
            $table->string('cord_id')->unique();
            $table->string('cord_name');
            $table->string('cord_email');
            $table->string('cord_hp');
            $table->string('cord_officeno');
            $table->string('cord_exp');

        });

        DB::table('coordinators')->insert([
            ['cord_id' => 'CO0001', 'cord_name' => 'Muhammad Azwan', 'cord_email' => 'azwan@gmail.com', 'cord_hp' => '01273747838', 'cord_officeno' => '097383737', 'cord_exp' => 'Software'],
        ]);









    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinators');
    }
};
