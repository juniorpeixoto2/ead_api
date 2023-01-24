<?php

namespace Database\Factories;

use App\Models\Modules;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lessons>
 */
class LessonsFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'module_id' => Modules::factory(),
            'name' => $this->faker->unique()->name(),
            'url' => $this->faker->url(),
        ];
    }
}
