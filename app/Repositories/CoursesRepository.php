<?php

namespace App\Repositories;

use App\Models\Courses;

class CoursesRepository {

    protected $entity;

    public function __construct(Courses $entity) {
        $this->entity = $entity;
    }

    public function getAll() {
        return $this->entity->paginate();
    }
}
