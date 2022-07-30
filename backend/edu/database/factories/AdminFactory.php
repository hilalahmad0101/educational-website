<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'vijay123',
            'name' => 'vijay kumar',
            'email' => 'vijaykumar@gmail.com',
            'profession' => 'writer',
            'password' => Hash::make('vijay123'),
            'image' => 'https://images.unsplash.com/photo-1658980830698-1171dee00f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDd8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
        ];
    }
}
