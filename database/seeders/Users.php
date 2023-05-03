<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->boolean('is_admin')->default(false);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
        ]);

        \App\Models\User::factory(10)->create();

    }
}
