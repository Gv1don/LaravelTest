<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder
{
    public function run(): void
    {
        User::create([
            'email' => '123@mail.ru',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'email' => 'test@gmail.ru',
            'password' => Hash::make('test'),
        ]);

        User::create([
            'email' => 'test@mail.ru',
            'password' => Hash::make('test'),
        ]);

        User::create([
            'email' => 'sail@gmail.com',
            'password' => Hash::make('sail'),
        ]);
    }
}
