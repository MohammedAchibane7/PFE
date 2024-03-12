<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([ 
                 'nom'=> 'houcine',
                 'prenom'=> 'aberhache',
                 'CIN'=> 'Jm99227',
                 'email'=> 'houcine@gamil.org',
                 'password'=> Hash::make('1234567'),
                ]);
            }
}
