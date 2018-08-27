<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id'=>1,
                'username'=>'admin',
                'email'=>'admin@truyen24h.info',
                'password'=>'$10$e/WxxDzHIH9ry4AhEifb6unb347RXF9Lu3.4znroMJsj0ZK5kd3EK',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'admin_level'=>1,
            ],
            [
                'id'=>2,
                'username'=>'member',
                'email'=>'member@truyen24h.info',
                'password'=>'$10$e/WxxDzHIH9ry4AhEifb6unb347RXF9Lu3.4znroMJsj0ZK5kd3EK',
                'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'status'=>1,
                'admin_level'=>0,
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
