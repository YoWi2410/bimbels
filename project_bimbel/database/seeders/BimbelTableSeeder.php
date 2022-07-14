<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bimbel;

class BimbelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bimbels = [
            [
                'title' => 'Bimbel Privat',
                'slug' => 'bimbel-privat',
                'price' => 500,
                'created_at' => date ('Y-m-d H:i:s', time ()),
                'updated_at' => date ('Y-m-d H:i:s', time ()),
            ],
            [
                'title' => 'Bimbel Umum',
                'slug' => 'bimbel-umum',
                'price' => 350,
                'created_at' => date ('Y-m-d H:i:s', time ()),
                'updated_at' => date ('Y-m-d H:i:s', time ()),
            ],
        ];
            Bimbel::insert($bimbels);
    }
}
