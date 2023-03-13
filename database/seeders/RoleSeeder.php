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

        Permission::create(['name' => 'manteniment.home'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'manteniment.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'manteniment.edit'])->syncRoles([$role1]);;
        Permission::create(['name' => 'manteniment.destroy'])->syncRoles([$role1]);;


        // VOY POR AQUI 
    }
}
