<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Lucas Dantas',
            'email'    => 'lucas.dantas.nogueira@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
