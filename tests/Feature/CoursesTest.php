<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Courses;
use Tests\TestCase;

class CoursesTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_insert() {
        $this->artisan('migrate:fresh')->assertExitCode(0);

        Courses::factory()->count(10)->create();
    }
}
