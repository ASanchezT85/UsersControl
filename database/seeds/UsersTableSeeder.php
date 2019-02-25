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
        User::create([
            'name'                  => 'Administrador',
            'email'                 => 'admin@admin.com',
            'email_verified_at'     => now(),
            'password'              => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
            'remember_token'        => str_random(10)
        ])->roles()->sync([
            'role_id' => 1,
            'user_id' => 1
        ]);
    }
}
