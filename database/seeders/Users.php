<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        $manager = Role::create([
            'name' => 'manager',
            'display_name' => 'User Manager', // optional
            'description' => 'Manager is allowed to read and create books', // optional
        ]);

        $client = Role::create([
            'name' => 'client',
            'display_name' => 'Client', // optional
            'description' => 'Client is allowed to Visite vitrine and check books add comments', // optional
        ]);

        $readBook = Permission::create([
            'name' => 'read-book',
            'display_name' => 'Read Books', // optional
            'description' => 'Read and show the books', // optional
        ]);

        $createBook = Permission::create([
            'name' => 'create-book',
            'display_name' => 'Create Books', // optional
            'description' => 'create new books', // optional
        ]);
        $updateBook = Permission::create([
            'name' => 'update-book',
            'display_name' => 'update Books', // optional
            'description' => 'update selected book', // optional
        ]);
        $deleteBook = Permission::create([
            'name' => 'delete-book',
            'display_name' => 'Delete Books', // optional
            'description' => 'delete selected book', // optional
        ]);

        $readAuthor = Permission::create([
            'name' => 'read-author',
            'display_name' => 'Read Authors', // optional
            'description' => 'Read and show the authors', // optional
        ]);
        $createAuthor = Permission::create([
            'name' => 'create-author',
            'display_name' => 'Create Authors', // optional
            'description' => 'create new authors', // optional
        ]);
        $updateAuthor = Permission::create([
            'name' => 'update-author',
            'display_name' => 'update Authors', // optional
            'description' => 'update selected author', // optional
        ]);
        $deleteAuthor = Permission::create([
            'name' => 'delete-author',
            'display_name' => 'Delete Authors', // optional
            'description' => 'delete selected author', // optional
        ]);

        $readCategory = Permission::create([
            'name' => 'read-category',
            'display_name' => 'Read Categories', // optional
            'description' => 'Read and show the categories', // optional
        ]);
        $createCategory = Permission::create([
            'name' => 'create-category',
            'display_name' => 'Create Categories', // optional
            'description' => 'create new category', // optional
        ]);
        $updateCategory = Permission::create([
            'name' => 'update-category',
            'display_name' => 'update Categories', // optional
            'description' => 'update selected category', // optional
        ]);
        $deleteCategory = Permission::create([
            'name' => 'delete-category',
            'display_name' => 'Delete Categories', // optional
            'description' => 'delete selected category', // optional
        ]);

        $readUser = Permission::create([
            'name' => 'read-user',
            'display_name' => 'Read Users', // optional
            'description' => 'Read and show the users', // optional
        ]);
        $createUser = Permission::create([
            'name' => 'create-user',
            'display_name' => 'Create User', // optional
            'description' => 'create new users', // optional
        ]);
        $updateUser = Permission::create([
            'name' => 'update-user',
            'display_name' => 'update User', // optional
            'description' => 'update selected user', // optional
        ]);
        $deleteUser = Permission::create([
            'name' => 'delete-user',
            'display_name' => 'Delete User', // optional
            'description' => 'delete selected user', // optional
        ]);


        $owner->givePermissions([$readBook,$createBook, $updateBook, $deleteBook, $readCategory, $createCategory, $updateCategory, $deleteCategory, $readAuthor, $createAuthor, $updateAuthor, $deleteAuthor, $readUser, $createUser, $updateUser, $deleteUser]);
        $admin->givePermissions([$readBook,$createBook, $updateBook, $deleteBook, $readCategory, $createCategory, $updateCategory, $deleteCategory, $readAuthor, $createAuthor, $updateAuthor, $deleteAuthor]);
        $manager->givePermissions([$readBook,$createBook, $readCategory, $createCategory, $readAuthor, $createAuthor]);

        $Abderrahmene=User::factory()->create([
            'username' => 'Abderrahmene',
            'email' => 'abdouhnd31@gmail.com',
        ]);
        $Youcef=User::factory()->create([
            'username' => 'Youcef'
        ]);
        $Amine=User::factory()->create([
            'username' => 'Amine',
        ]);

        $Abderrahmene->addRole($owner);
        $Youcef->addRole($admin);
        $Amine->addRole($manager);

        for($i=0;$i<10;$i++){
            $user=User::factory()->create();
            $user->addRole($client);
        }
    }
}
