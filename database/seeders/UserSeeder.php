<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "My Tran";
        $user->category = "Quản lý nhân sự";
        $user->email = "my@gamil.com";
        $user->password = "123456";
        $user->save();
    }
}
