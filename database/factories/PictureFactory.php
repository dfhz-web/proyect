<?php

namespace Database\Factories;


use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\Factory;

class PictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Picture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'modules/' . $this->faker->image('public/storage/modules',640,480, null, false),
            
 
          
        
        ];
    }
}
