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
        Schema::create('users', function (Blueprint $table) {

            $table->string('u_id')->unique();
            $table->string('u_name');
            $table->string('password');
            $table->string('u_type');
            $table->string('email')->unique();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken();
            $table->primary('u_id');
            });
    
            DB::table('users')->insert([

            ['u_id' => 'CB19052', 'u_name' => 'Ronald Lim Sheng Wei',  'email' => 'ronald@gmail.com',  'u_type' => 'Student', 'password' => '$2y$10$7XHTLyG0ufGBmKCV9atVVeby0fJyD215gvfBJhugY02ehb5AC7rme'], //ronald52

            //Coordinator
             ['u_id' => 'CO0001', 'u_name' => 'Muhammad Azwan',  'email' => 'azwan@gmail.com',  'u_type' => 'Coordinator', 'password' => '$2y$10$AK1FBzdCAq8xr01GWokP5eyZV9qDjUJIVrsJJwqy.Gc/RfX8itMn.'],//azwan123

            //Supervisor & Evaluator
            ['u_id' => 'SE19015', 'u_name' => 'Narresh Naidu A/L Subramaniam', 'email' => 'narresh@gmail.com', 'u_type' => 'Supervisor/Evaluator', 'password' => '$2y$10$IPtOkCcSKh.89D49WD9Kmu8aDn92O.yap7dU8l/wEQjpshe16/wdm'],//narresh12
            
            //Supervisor
            ['u_id' => 'SE18015', 'u_name' => 'Prabhu A/L Muthu', 'email' => 'prabu@gmail.com', 'u_type' => 'Supervisor', 'password' => '$2y$10$vEYDkCvmII9W9KgNud9rHu40PuvaXguMT5cUl3LB.iOxSRpDtFBpK'],//prabu123
            
        
        ]);

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
