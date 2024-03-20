<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
 
                $name = $this->faker->sentence;
                $slug = Str::slug($name, '-');                 
                $faker = $this->faker->image(public_path("products"),460,600);
                return [
                    'name' => $name,
                    'category_id' => 4,
                    'description' => $this->faker->text(300),
                    'slug'=> $slug,
                    'weight'=>$this->faker->randomDigit(),
                    'price' => $this->faker->numberBetween(10000,80000),               
                    'image' =>  $this->faker->image(null,460, 600)
                ];
          
    }
}
