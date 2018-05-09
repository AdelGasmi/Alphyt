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
        Permission::create([
            'name' => 'manage categories'
        ]);
        Permission::create([
            'name' => 'manage products'
        ]);
        Permission::create([
            'name' => 'manage pages'
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

            $user->assignRole('provisor');

        }

//        Add Page

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

//        Add  Category

        $category = \App\Categorie::create([
            'name' => 'Produits Phytosanitaires pour l Hygiéne Publique'
        ]);
//            Add Field For this Category
        \App\CategorieField::create([
            'name' => 'GAMME DE PRODUIT ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'APPELLATION COMMERCIALE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'DESCRIPTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SUBSTANCE ACTIVE ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SPECTRE D’ACTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'LIEUX DE DESINFECTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'TRAITEMENT DES BATIMENTS D’ELEVAGES ET DU MATERIEL DE TRANSPORT DES ANIMAUX DOMESTIQUES ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PRECAUTIONS D’EMPLOI',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PERSISTANCE D’ACTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'TOXICITE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PRECAUTIONS D’EMPLOI',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'IMPORTANT',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'EN CAS D’INTOXICATION',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'EMBALLAGE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'UNITE DE PRODUCTION',
            'categorie_id' => $category->id
        ]);


        $category = \App\Categorie::create([
            'name' => 'Produits Phytosanitaires à Usage Agricole '
        ]);
//            Add Field For this Category
        \App\CategorieField::create([
            'name' => 'GAMME DE PRODUIT ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'APPELLATION COMMERCIALE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'DESCRIPTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'FORMULATION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SUBSTANCE ACTIVE ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SPECTRE D’ACTION ET DOSES D’EMPLOI',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'MODE D’EMPLOI ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'TOXICITE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PPRECAUTIONS D’EMPLOI',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'IMPORTANT',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'EN CAS D\'INTOXICATION',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'EMBALLAGE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'UNITE DE PRODUCTION',
            'categorie_id' => $category->id
        ]);

        $category = \App\Categorie::create([
            'name' => 'Produits Aérosols '
        ]);

        //            Add Field For this Category
        \App\CategorieField::create([
            'name' => 'GAMME DE PRODUIT ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'APPELLATION COMMERCIALE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'DESCRIPTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SUBSTANCE ACTIVE ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PRECAUTIONS D\'EMPLOI',
            'categorie_id' => $category->id
        ]);

        $category = \App\Categorie::create([
            'name' => 'Pastilles Inseticides à Usage Doméstique '
        ]);

        //            Add Field For this Category
        \App\CategorieField::create([
            'name' => 'GAMME DE PRODUIT ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'APPELLATION COMMERCIALE',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'DESCRIPTION ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'SUBSTANCE ACTIVE ',
            'categorie_id' => $category->id
        ]);

        \App\CategorieField::create([
            'name' => 'PRECAUTIONS D\'EMPLOI',
            'categorie_id' => $category->id
        ]);

    }
}
