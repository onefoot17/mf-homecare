<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Setting;

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
        $felipe->first_name = 'Felipe';
        $felipe->last_name = 'Pastana';
        $felipe->email = 'felipe@vcompinc.com';
        $felipe->password = Hash::make('12345678');
        $felipe->save();

        $setting = new Setting([]);
        $felipe->settings()->save($setting);

        $vio = new User();
        $vio->first_name = 'Vio';
        $vio->last_name = 'Ivanescu';
        $vio->email = 'vio@vcompinc.com';
        $vio->password = Hash::make('12345678');
        $vio->save();

        $setting = new Setting([]);
        $vio->settings()->save($setting);

        $earl = new User();
        $earl->first_name = 'Earl';
        $earl->last_name = 'Misquitta';
        $earl->email = 'earl@vcompinc.com';
        $earl->password = Hash::make('12345678');
        $earl->save();

        $setting = new Setting([]);
        $earl->settings()->save($setting);
    }
}
