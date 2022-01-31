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
        $data = [
            'name' => 'Rizal',
            'password' => bcrypt('123123'),
            'email' => 'rizal@mail.com'
        ];
        User::create($data);
    }
}
