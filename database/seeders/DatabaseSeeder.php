<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $tenant1 = \App\Models\Tenant::create(['id' => 'foo']);
        $tenant1->domains()->create(['domain' => sprintf("foo.%s.test", env('APP_NAME'))]);

        \App\Models\Tenant::all()->runForEach(function () {
            \App\Models\User::factory(10)->create();
        });
    }
}
