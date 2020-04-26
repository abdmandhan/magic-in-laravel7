<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'name'      => 'dark'
                ],
                [
                    'name'      => 'primary'
                ],
                [
                    'name'      => 'danger'
                ],
                [
                    'name'      => 'warning'
                ],
                [
                    'name'      => 'info'
                ],
                [
                    'name'      => 'success'
                ],
            ];

        foreach ($data as $key => $value) {
            Color::create($value);
        }
    }
}
