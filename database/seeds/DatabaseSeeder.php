<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'provisor'
        ]);
        Permission::create([
            'name' => 'edit user'
        ]);
        Permission::create([
            'name' => 'add user'
        ]);
        Permission::create([
            'name' => 'delete user'
        ]);
        Permission::create([
            'name' => 'access to list users'
        ]);
        Permission::create([
            'name' => 'edit role'
        ]);
        Permission::create([
            'name' => 'add role'
        ]);
        Permission::create([
            'name' => 'delete role'
        ]);
        Permission::create([
            'name' => 'access to list roles'
        ]);
        Permission::create([
            'name' => 'modify user permissions'
        ]);

        $admin = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'active' => 1
        ]);


        $admin->assignRole('admin');

        $role->givePermissionTo(Permission::all());
        for ($i = 0; $i < 10; $i++) {
            $user = \App\User::create([
                'name' => 'provisor',
                'email' => $i . 'provisor@provisor.com',
                'password' => bcrypt('123456'),
                'active' => 1
            ]);

            $categorie = \App\Categorie::create([
                'name' => 'categorie N^' . $i
            ]);
            \App\Product::create([
                'title' => 'product-' . $i,
                'img' => 'green.jpg',
                'categorie_id' => $categorie->id,
            ]);

            $user->assignRole('provisor');



        }
        \App\Page::create([
            'title' => 'Unités',
            'content' => '',
        ]);

        \App\Page::create([
            'title' => 'La Qualité',
            'content' => '',
        ]);

        \App\Page::create([
            'title' => 'Chiffres',
            'content' => '',
        ]);

        \App\Page::create([
            'title' => 'Partenaires',
            'content' => '',
        ]);

    }
}
