<?php

namespace Database\Seeders;

use Domain\Users\Roles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SetupRoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Roles::cases() as $role) {
            Role::create([
                'name' => $role->value,
            ]);
        }
    }

    public function defaultPermissions(): array
    {
        return [];
    }
}
