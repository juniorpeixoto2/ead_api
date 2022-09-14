<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupportsResource;
use App\Models\Support;
use App\Repositories\SupportsRepository;

class SupportsController extends Controller {

    protected $repository;

    public function __construct(SupportsRepository $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $courses = $this->repository->getAll();
        return SupportsResource::collection($courses);
    }

    public function show($lesson_id) {
        $course = Support::findOrFail($lesson_id);
        return new SupportsResource($course);
    }
}
