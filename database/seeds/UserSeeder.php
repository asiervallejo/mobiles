<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        //Cargo los roles:
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

    	$user=User::create([
        'name' => 'dextroyer',
        'email' => 'realdextroyer@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('666fade666'), // password
        'remember_token' => Str::random(10),
    	]);
        $user->roles()->attach($role_admin);
        $user->roles()->attach($role_user);

        $user=User::create([
        'name' => 'asier',
        'email' => 'asiervallejo@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('666asier666'), // password
        'remember_token' => Str::random(10),
        ]);
        $user->roles()->attach($role_user);

        $users=factory(App\User::class, 5)->create();
        foreach($users as $user)
        {
            $user->roles()->attach($role_user);

        }
    }
}
