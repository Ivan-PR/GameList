<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'mantenimentGame.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'mantenimentGame.crear'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentGame.editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentGame.eliminar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentGame.carga'])->syncRoles([$role1]);

    }
}
