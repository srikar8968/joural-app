<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $roles = [
            ['name' => 'admin'],
            ['name' => 'editor'],
            ['name' => 'seo'],
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}