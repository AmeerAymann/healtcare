<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                $role = Role::create(['name' => 'Admin']);
                $role1 = Role::create(['name' => 'Doctor']);
                $role2 = Role::create(['name' => 'Patiant']);

                $user = User::create([
                        'username' => 'xdenglish',
                        'name' => 'xdenglish',
                        'email' => 'admin@xdenglish.net',
                        'password' => bcrypt('123456'),
                        'roles_name' => ['Admin'],
                        'status' => 'active'
                ]);

                $permissions = Permission::pluck('id', 'id')->all();
                $role->syncPermissions($permissions);
                $user->assignRole([$role->id]);
                // --------------
                $user1 = User::create([
                        'username' => 'admin',
                        'name' => 'admin',
                        'email' => 'admin@gmail.com',
                        'password' => bcrypt('123456'),
                        'roles_name' => ['Admin'],
                        'status' => 'active'
                ]);
                $permissions1 = Permission::pluck('id', 'id')->all();
                $role->syncPermissions($permissions1);
                $user1->assignRole([$role->id]);


                $s2 = User::create([
                        'username' => 'Doctor',
                        'name' => 'Doctor',
                        'email' => 'Doctor@Doctor.net',
                        'password' => bcrypt('123456'),
                        'roles_name' => ['Doctor'],
                        'status' => 'active'
                ]);
                $s2->assignRole([$role1->id]);

                $s3 = User::create([
                        'username' => 'Patiant',
                        'name' => 'Patiant',
                        'email' => 'Patiant@Patiant.net',
                        'password' => bcrypt('123456'),
                        'roles_name' => ['Patiant'],
                        'status' => 'active'
                ]);
                $s3->assignRole([$role2->id]);
        }
}
