<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

        $Abderrahmene->addRole('owner');
        $Youcef->addRole('admin');
        $Amine->addRole('manager');

        for($i=0;$i<10;$i++){
            $user=User::factory()->create();
            $user->addRole('client');
        }
    }
}
