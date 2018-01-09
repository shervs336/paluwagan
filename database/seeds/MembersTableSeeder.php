<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
          ['name' => 'Elmer Sta. Maria', 'nickname' => 'Paps'],
          ['name' => 'Maybelle Sta. Maria', 'nickname' => 'Bilog'],
          ['name' => 'Sherwin Rhey Condez', 'nickname' => 'Jek/Sherwin'],
          ['name' => 'Archimedes Sta. Maria', 'nickname' => 'Archie'],
          ['name' => 'Cicer Sta. Maria', 'nickname' => 'Cero'],
          ['name' => 'Lilia Sta. Maria', 'nickname' => 'Mama Leng'],
          ['name' => 'Cheryl Sta. Maria', 'nickname' => 'Eyey'],
          ['name' => 'Ann Margaret Sta. Maria', 'nickname' => 'Paps'],
          ['name' => 'Daphne Sta. Maria', 'nickname' => 'Bem-Bem'],
          ['name' => 'Andrei Sta. Maria', 'nickname' => 'Andi'],
          ['name' => 'Evelyn Sta. Maria', 'nickname' => 'Belen'],
          ['name' => 'Lester Gabanes', 'nickname' => 'Lester'],
          ['name' => 'Mar Jason Bacay', 'nickname' => 'Jason']
        ]);
    }
}
