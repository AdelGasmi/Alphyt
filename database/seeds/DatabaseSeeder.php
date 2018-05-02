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
                'title' => 'product-'.$i,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci, aut delectus, dicta dolores dolorum, eos fugit hic minus necessitatibus odio perspiciatis quibusdam velit. A debitis eaque eos quasi velit.',
                'price' => '250',
                'img' => 'green.jpg',
                'categorie_id' => $categorie->id,
            ]);

            $user->assignRole('provisor');
        }

    }
}
