<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->create([
            'name'=>'kaka',
            'second'=>'bimbim',
            'company_id'=>'1',
            'email'=>'kaka@gmail.com',
            'phone'=>'123321',
        ]);


    }
}
