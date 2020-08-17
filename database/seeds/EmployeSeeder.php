<?php

use App\Employe;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employe::create([
            'name' => 'Deka Veve',
            'email' => 'deka@gmail.com',
            'phone_number' => '082251924311',
            'nik' => '6785945263',
            'birth_date' => now(),
            'salary' => '3000000',
            'address' => 'A. yani Streat',
        ]);
    }
}
