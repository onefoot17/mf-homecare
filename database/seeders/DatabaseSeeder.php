<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $felipe = new User();
        $felipe->name = 'Felipe Pastana';
        $felipe->email = 'felipe@vcompinc.com';
        $felipe->password = Hash::make('12345678');
        $felipe->save();

        $vio = new User();
        $vio->name = 'Vio Ivanescu';
        $vio->email = 'vio@vcompinc.com';
        $vio->password = Hash::make('12345678');
        $vio->save();

        $earl = new User();
        $earl->name = 'Earl Misquitta';
        $earl->email = 'earl@vcompinc.com';
        $earl->password = Hash::make('12345678');
        $earl->save();

    }
}
