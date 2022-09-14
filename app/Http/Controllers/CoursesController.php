<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Courses;
use App\Repositories\CoursesRepository;

class CoursesController extends Controller {

    protected $repository;

    public function __construct(CoursesRepository $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $courses = $this->repository->getAll();
        return CourseResource::collection($courses);
    }

    public function show($course_id) {
        $course = Courses::findOrFail($course_id);
        return new CourseResource($course);
    }
}
