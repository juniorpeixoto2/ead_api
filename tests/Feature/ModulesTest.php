<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Courses;
use App\Models\Modules;
use Tests\TestCase;

class ModulesTest extends TestCase {
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_insert() {
        Modules::factory()->count(6)->create();
        $modules = Modules::count();

        $this->assertEquals($modules, 6);
    }
}
