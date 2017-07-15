<?php

use Illuminate\Database\Seeder;

class UseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        $role = [
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => [
                'admin' => true,
            ]
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();
        $sale = [
            'name' => 'Saleman',
            'slug' => 'saleman',
        ];
        $adminRole = Sentinel::getRoleRepository()->createModel()->fill($sale)->save();
        $customers = [
            'name' => 'Customers',
            'slug' => 'customers',
            'permissions' => [
                 'customer' => true,
            ]
        ];
        $customerRole = Sentinel::getRoleRepository()->createModel()->fill($customers)->save();
        $admin = [
            'email'    => 'admin@gmail.com',
            'password' => '123321',
        ];
        $users = [
            [
                'email'    => 'user1@gmail.com',
                'password' => '123321',
            ],
            [
                'email'    => 'user2@gmail.com',
                'password' => '123321',
            ],
            [
                'email'    => 'user3@gmail.com',
                'password' => '123321',
            ],
        ];
        $adminUser = Sentinel::registerAndActivate($admin);
        $adminUser->roles()->attach($adminRole);
        foreach ($users as $user)
        {
            $u = Sentinel::registerAndActivate($user);
            $u->roles()->attach($customerRole);
        }
        Schema::enableForeignKeyConstraints();
    }
}
