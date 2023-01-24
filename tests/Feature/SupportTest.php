<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Courses;
use App\Models\Modules;
use App\Models\Support;
use Tests\TestCase;

class SupportTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_insert() {
        Support::factory()->count(7)->create();

        $supports = Support::count();

        $this->assertEquals($supports, 7);
    }
}
