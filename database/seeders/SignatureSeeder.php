<?php

namespace Database\Seeders;

use App\Models\Signature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Signature::factory(100)->create();
    }
}
