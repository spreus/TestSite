<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->seedAdminRole();
        $this->seedPermissions();
    }

    private function seedAdminRole() {
        $existing = Role::whereName('admin')->get();
        if ($existing->isEmpty()) {
            Role::create([
                'name' => 'admin',
                'display_name' => 'Administrator'
            ]);
        }
    }

    private function seedPermissions() {
        $admin = Role::getAdminRole();
        $createUsersPermission = \App\Permission::create([
                    'name' => 'create-users',
                    'display_name' => 'Create users'
        ]);
        $createRolesPermission = \App\Permission::create([
                    'name' => 'create-roles',
                    'display_name' => 'Create roles'
        ]);
        $createPermissionsPermission = \App\Permission::create([
                    'name' => 'create-permissions',
                    'display_name' => 'Create permissions'
        ]);
        $createSourcesPermission = \App\Permission::create([
                    'name' => 'create-sources',
                    'display_name' => 'Create sources'
        ]);
        $admin->perms()->saveMany([
            $createUsersPermission,
            $createRolesPermission,
            $createPermissionsPermission,
            $createSourcesPermission
        ]);
    }

}
