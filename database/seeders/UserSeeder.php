<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gruppourani.ch',
            'password' => bcrypt('numero12')
        ]);

        $roleAdmin = Role::where('name', '=', 'Admin')->first();
        $admin->assignRole([$roleAdmin->id]);
    }
}
