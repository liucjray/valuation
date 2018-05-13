<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => __('voyager::seeders.roles.admin'),
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => __('voyager::seeders.roles.user'),
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'marketing']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Marketing'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'appraisal']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Appraisal'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'credit']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Credit'),
            ])->save();
        }
    }
}
