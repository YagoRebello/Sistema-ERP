<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'id' => '1',
            'documento' => '48709724842',
            'nome' => 'Yago'
        ]);

        User::create([
            'id' => '1',
            'name' => 'Yago',
            'email' => 'dev1@desenvolvedor.com',
            'password' => \bcrypt(value: '1234'),
            'is_admin' => '1',
        ]);

    }
}
