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
      DB::table('users')->insert([
        ['name' => 'Elmer Sta. Maria', 'username' => 'Paps', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Maybelle Sta. Maria', 'username' => 'Bilog', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Sherwin Rhey Condez', 'username' => 'Jek/Sherwin', 'password' => bcrypt('sethseth2018'), 'admin' => 1],
        ['name' => 'Archimedes Sta. Maria', 'username' => 'Archie', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Cicer Sta. Maria', 'username' => 'Cero', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Lilia Sta. Maria', 'username' => 'Mama Leng', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Cheryl Sta. Maria', 'username' => 'Eyey', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Ann Margaret Sta. Maria', 'username' => 'Ann-Ann', 'password' => bcrypt('sethseth2018'), 'admin' => 1],
        ['name' => 'Daphne Sta. Maria', 'username' => 'Bem-Bem', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Andrei Sta. Maria', 'username' => 'Andi', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Evelyn Sta. Maria', 'username' => 'Belen', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Lester Gabanes', 'username' => 'Lester', 'password' => bcrypt('sethseth2018'), 'admin' => 0],
        ['name' => 'Mar Jason Bacay', 'username' => 'Jason', 'password' => bcrypt('sethseth2018'), 'admin' => 0]
      ]);
    }
}
