<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $instructorRole = Role::where('name', 'instructor')->first();
        $studentRole = Role::where('name', 'student')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        $teacher = User::create([
            'name' => 'Author User',
            'email' => 'author@gmail.com',
            'password' => Hash::make('password')
        ]);

        $student = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $teacher->roles()->attach($teacherRole);
        $student->roles()->attach($studentRole);
    }
}
