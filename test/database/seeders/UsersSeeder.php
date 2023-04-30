<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['email' => '123@mail.ru', 'password' => Hash::make('123')],
            ['email' => 'test@inbox.ru', 'password' => Hash::make('test')],
            ['email' => 'test@yandex.ru', 'password' => Hash::make('test')],
            ['email' => 'sail@gmail.com', 'password' => Hash::make('sail')],
        ]);
    }

    public function setCommand($command)
    {
        $this->command = $command;
    } 

    public function setContainer($container)
    {
        $this->container = $container;
    }
}
