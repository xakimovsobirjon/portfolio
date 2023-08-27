<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            ['name'=>'user_menegment_access'],
            ['name'=>'users_access'],
            ['name'=>'users_show'],
            ['name'=>'users_create'],
            ['name'=>'users_edit'],
            ['name'=>'users_delete'],
            ['name'=>'permissions_access'],
            ['name'=>'permissions_show'],
            ['name'=>'permissions_create'],
            ['name'=>'permissions_edit'],
            ['name'=>'permissions_delete'],
            ['name'=>'roles_access'],
            ['name'=>'roles_show'],
            ['name'=>'roles_create'],
            ['name'=>'roles_edit'],
            ['name'=>'roles_delete'],
            ['name'=>'companies_access'],
            ['name'=>'companies_show'],
            ['name'=>'companies_create'],
            ['name'=>'companies_edit'],
            ['name'=>'companies_delete'],
            ['name'=>'works_access'],
            ['name'=>'works_show'],
            ['name'=>'works_create'],
            ['name'=>'works_edit'],
            ['name'=>'works_delete'],

        ]);
    }
}
