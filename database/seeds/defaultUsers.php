<?php

use Illuminate\Database\Seeder;

class defaultUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'jasonbronson@gmail.com',
            'email_verified_at' => date('Y-m-d H:m'),
            'password' => bcrypt('admin'),
            'created_at' => date('Y-m-d H:m'),
        ]);

        DB::table('users')->insert([
            'name' => 'service',
            'email' => 'apiservice@gxm.com',
            'email_verified_at' => date('Y-m-d H:m'),
            'password' => bcrypt('GxmPassword!'),
            'api_token' => Str::random(80),
            'created_at' => date('Y-m-d H:m'),
        ]);
    }
}
