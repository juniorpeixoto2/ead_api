<?php

namespace App\Http\Controllers;

use App\Http\Resources\LessonsResource;
use App\Models\Lessons;
use App\Repositories\LessonsRepository;

class LessonsController extends Controller {

    protected $repository;

    public function __construct(LessonsRepository $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $courses = $this->repository->getAll();
        return LessonsResource::collection($courses);
    }

    public function show($lesson_id) {
        $course = Lessons::findOrFail($lesson_id);
        return new LessonsResource($course);
    }
}
