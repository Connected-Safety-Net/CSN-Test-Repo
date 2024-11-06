<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'James Bond',
            'email' => 'james.bond@laravel.test',
            'dob' => '1963-07-15',
            'employee_id' => '007',
            'phone' => '123-456-7890',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Tony Stark',
            'email' => 'tony.stark@laravel.test',
            'dob' => '1955-02-28',
            'employee_id' => '001',
            'phone' => '456-234-6473',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Bruce Banner',
            'email' => 'bruce.banner@laravel.test',
            'dob' => '1976-05-21',
            'employee_id' => '002',
            'phone' => '482-281-3396',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Freddy Mercury',
            'email' => 'freddy.mercury@laravel.test',
            'dob' => '1946-07-04',
            'employee_id' => '003',
            'phone' => '158-294-8291',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Marilyn Monroe',
            'email' => 'marilyn.monroe@laravel.test',
            'dob' => '1977-09-30',
            'employee_id' => '004',
            'phone' => '493-445-3453',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Optimus Prime',
            'email' => 'optimus.prime@laravel.test',
            'dob' => '1966-10-02',
            'employee_id' => '005',
            'phone' => '582-348-8491',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Michael Jackson',
            'email' => 'michael.jackson@laravel.test',
            'dob' => '1968-07-07',
            'employee_id' => '006',
            'phone' => '984-937-8458',
            'password' => bcrypt('password'),
        ]);
    }
}
