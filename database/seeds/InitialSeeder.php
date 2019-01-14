<?php

use Illuminate\Database\Seeder;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals = [
            [
                'name' => 'Burek',
                'price' => '10',
                'image' => \Illuminate\Support\Facades\URL::to('/').'}}/img/pita.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Sirnica',
                'price' => '8',
                'image' => \Illuminate\Support\Facades\URL::to('/').'}}/img/pita.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Zeljanica',
                'price' => '8',
                'image' => \Illuminate\Support\Facades\URL::to('/').'}}/img/pita.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Krompirusa',
                'price' => '6',
                'image' => \Illuminate\Support\Facades\URL::to('/').'}}/img/pita.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Tikvenica',
                'price' => '6',
                'image' => \Illuminate\Support\Facades\URL::to('/').'}}/img/pita.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Baklava',
                'price' => '1',
                'image' => 'data:image/jpeg;base64,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
                O2w8yJzhJJRQf6g5A27OEEvgkkoMv62auy3YZgdFNdcpJKiH6By7BV+4whdQyF1JFH9Q1dGw0Kg1lIbQBOT6lJJJZLsQf//Z',
                'category_id' => 2
            ],
            [
                'name' => 'Tufahija',
                'price' => 'https://bascarsija.info/media/k2/items/cache/bf1e20a4462b71e3cc4cece2a8c96ac8_XL.jpg',
                'category_id' => 2
            ]
        ];

        $delivery = [
            'user_id' => 1
        ];

        foreach ($meals as $meal) {
            \App\Meal::create($meal);
        }

        \App\Delivery::create($delivery)->meals()->attach([1,2,3]);
    }
}
