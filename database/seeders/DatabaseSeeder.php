<?php

namespace Database\Seeders;

use Domain\Users\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SetupRoleAndPermissionsSeeder::class
        ]);
         $admin = \Domain\Users\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@cms.dev',
        ]);
        $admin->assignRole(Role::findByName(Roles::ADMIN->value));
        // \App\Models\User::factory(10)->create();

       
    }
}
