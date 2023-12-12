<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create
        ([
            'name'=>'PT. ABS',
            'address'=>'Jl. Pedurungan selatan Semarang',
            'email'=>'pt.abs@gmailcom',
        ]);


    }
}
