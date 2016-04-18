<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Administrator', 'email' => 'admin@example.com', 'password' => bcrypt('abc123')]);
        $user->admin = true; // Protected against mass-assignment, so this is the only way
        $user->save();
    }
}
