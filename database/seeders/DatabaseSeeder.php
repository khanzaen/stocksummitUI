<?php

namespace Database\Seeders;

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
        $this->call([
            AdminUserSeeder::class,
        ]);

        \App\Models\Setting::updateOrCreate(
            ['key' => 'registration_start_date'],
            ['value' => '2026-06-01 00:00:00']
        );

        \App\Models\Setting::updateOrCreate(
            ['key' => 'registration_end_date'],
            ['value' => '2026-08-31 23:59:59']
        );

        \App\Models\Setting::updateOrCreate(
            ['key' => 'competition_start_date'],
            ['value' => '2026-06-01 00:00:00']
        );

        \App\Models\Setting::updateOrCreate(
            ['key' => 'competition_end_date'],
            ['value' => '2026-08-15 23:59:59']
        );
    }
}
