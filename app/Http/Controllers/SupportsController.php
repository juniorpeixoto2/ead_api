<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupportsResource;
use App\Models\Support;
use App\Repositories\SupportsRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupportsController extends Controller {

    protected $repository;

    public function __construct(SupportsRepository $repository) {
        $this->repository = $repository;
    }

    public function index(Request $request) {
        $courses = $this->repository->getAll($request->all());
        return SupportsResource::collection($courses);
    }

    public function show($lesson_id) {
        $course = Support::findOrFail($lesson_id);
        return new SupportsResource($course);
    }

    public function storage(Request $request, Support $support) {
        $request->validate(
            [
                'lesson_id' => ['required', 'exists:lessons,id'],
                'status' => ['required', Rule::in(array_keys($support->statusOption))],
                'user_id' => ['required', 'exists:users,id'],
            ],
        );

        $support = $this->repository->createNew($request->all());

        return $support;
    }
}
