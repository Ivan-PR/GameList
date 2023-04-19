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

        Permission::create(['name' => 'mantenimentLocations.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'mantenimentLocations.crear'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLocations.editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLocations.eliminar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLocations.carga'])->syncRoles([$role1]);

        Permission::create(['name' => 'mantenimentPlatforms.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'mantenimentPlatforms.crear'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentPlatforms.editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentPlatforms.eliminar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentPlatforms.carga'])->syncRoles([$role1]);

        Permission::create(['name' => 'mantenimentLanguages.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'mantenimentLanguages.crear'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLanguages.editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLanguages.eliminar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentLanguages.carga'])->syncRoles([$role1]);

        Permission::create(['name' => 'mantenimentRomsizes.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'mantenimentRomsizes.crear'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentRomsizes.editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentRomsizes.eliminar'])->syncRoles([$role1]);
        Permission::create(['name' => 'mantenimentRomsizes.carga'])->syncRoles([$role1]);

    }
}
