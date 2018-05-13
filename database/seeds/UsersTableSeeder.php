<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Ray',
                'email'          => 'ray@gmail.com',
                'password'       => bcrypt('1234qwer'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            User::create([
                'name'           => 'Kelly987',
                'email'          => 'kelly@gmail.com',
                'password'       => bcrypt('1234qwer'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);
        }

        $role = Role::where('name', 'marketing')->firstOrFail();
        User::create([
            'name'           => 'marketing',
            'email'          => 'marketing@gmail.com',
            'password'       => bcrypt('1234qwer'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
        ]);

        $role = Role::where('name', 'appraisal')->firstOrFail();
        User::create([
            'name'           => 'appraisal',
            'email'          => 'appraisal@gmail.com',
            'password'       => bcrypt('1234qwer'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
        ]);

        $role = Role::where('name', 'credit')->firstOrFail();
        User::create([
            'name'           => 'credit',
            'email'          => 'credit@gmail.com',
            'password'       => bcrypt('1234qwer'),
            'remember_token' => str_random(60),
            'role_id'        => $role->id,
        ]);

        // 更新所有用戶語系: zh_CN
        User::whereNotNull('id')->update(['settings' => '{"locale":"zh_CN"}']);
    }
}
