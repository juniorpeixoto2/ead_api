<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Modules;
use Tests\TestCase;

class NLessonsTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_insert() {
        Lessons::factory()->count(7)->create();


        $lessons = Lessons::count();

        $this->assertEquals($lessons, 7);
    }
}
