<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Creating role Admin...');
        $admin = Role::create(['name' => 'Admin']);

        $adminPermissions = Permission::pluck('id','id')->all();
        $this->command->info('Looking admin permission... '.json_encode($adminPermissions));

        $this->command->info('Syncing admin permission... ');
        $admin->syncPermissions($adminPermissions);
    }
}
