<?php

namespace Database\Seeders;

use App\Models\clients;
use App\Models\credit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        clients::factory(10)->has(credit::factory(3))->create();
    }
}
