<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)),0,-1);
        return [
            'title'=>$title,
            'img'=>'https://via.placeholder.com/320/SF1138/FFFFFF/?text=img',
            'slug'=>$slug,
            'unit'=>'шт',
            'quantity'=>1,
            'price'=> random_int(10,9999),
            'content'=>$this->faker->paragraph(100, true),
            'created_at'=>$this->faker->dateTimeBetween('-1 year'),

        ];
    }
}
