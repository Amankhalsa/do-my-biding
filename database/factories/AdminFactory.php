<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'postcode' =>$this->faker->numerify('##########'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_number' => $this->faker->unique()->numerify('##########'),
            'about_yourself'  => $this->faker->paragraph,
            'Activities_and_Interests'  => $this->faker->text,
            'address'  => $this->faker->address, 
            'country' =>$this->faker->country, 
            'city' =>$this->faker->streetName, 
            'dob' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31'),
            'gender' => $this->faker->randomElement($array = array ('male', 'female')) ,
            'Details'  => $this->faker->text,
             'profile_photo_path' => $this->faker->image('public/upload/images',640,480, null, false),
            // 'remember_token' => Str::random(10),
        ];
    }
}
