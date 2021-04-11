<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rpl10 = new Grade;
        $rpl10->name = '10 RPL';
        $rpl10->major = 'Rekayasa Perangkat Lunak';
        $rpl10->save();

        $rpl11 = new Grade;
        $rpl11->name = '11 RPL';
        $rpl11->major = 'Rekayasa Perangkat Lunak';
        $rpl11->save();

        $rpl12 = new Grade;
        $rpl12->name = '12 RPL';
        $rpl12->major = 'Rekayasa Perangkat Lunak';
        $rpl12->save();
    }
}
