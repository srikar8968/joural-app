<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Category::factory(20)->create();
        \App\Models\Editor::factory(30)->create();
        \App\Models\Journal::factory(80)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Meta::factory(10)->create();
        \App\Models\Page::factory(5)->create();

        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
