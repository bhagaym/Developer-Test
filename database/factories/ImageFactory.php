<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'file_path' => 'images/' . $this->faker->image('public/storage/images', 400, 300, null, false),
        ];
    }
}
