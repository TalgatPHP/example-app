<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Film;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Film::class;
    public function definition()
    {
        $title=$this->faker->sentence(2,true);
        return [
            'title'=>$title,
            'poster'=>'https://via.placeholder.com/600/5F1138/FFFFFF?text=POSTER.*'
        ];
    }
}
