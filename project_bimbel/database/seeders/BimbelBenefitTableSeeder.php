<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BimbelBenefit;

class BimbelBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bimbelBenefits = [
            [
                'bimbels_id' => 1,
                'name' => 'Guru Professional'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'Kurikulum Mengikuti'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'Fokus US & AN'
            ],
            [
                'bimbels_id' => 1,
                'name' => '1-1 Teacher Study'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'SBMPTN & SNMPTN'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'Online & Offline Class'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'Premium Class Web'
            ],
            [
                'bimbels_id' => 1,
                'name' => 'Untuk SD, SMP, SMA'
            ],
            [
                'bimbels_id' => 2,
                'name' => 'Guru Professional'
            ],
            [
                'bimbels_id' => 2,
                'name' => 'Untuk SD, SMP, SMA'
            ],
            [
                'bimbels_id' => 2,
                'name' => 'Offline Class'
            ],
        ];

        BimbelBenefit::insert($bimbelBenefits);
    }
}
