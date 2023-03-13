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

        Permission::create(['name' => 'manteniment.home']);
        Permission::create(['name' => 'manteniment.create']);
        Permission::create(['name' => 'manteniment.edit']);
        Permission::create(['name' => 'manteniment.destroy']);


        // VOY POR AQUI 
    }
}
