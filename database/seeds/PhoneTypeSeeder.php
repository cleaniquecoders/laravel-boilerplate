<?php

use Illuminate\Database\Seeder;

class PhoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Home',
            'Mobile',
            'Office',
            'Other',
        ];

        foreach ($data as $datum) {
            \OSI\Models\PhoneType::create([
                'name'  => $datum,
                'label' => str_slug($datum, '-'),
            ]);
        }
    }
}
