<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Models\Support;

class SupportsRepository {

    protected $entity;

    public function __construct(Support $entity) {
        $this->entity = $entity;
    }

    public function getAll() {
        return $this->entity->paginate();
    }

    public function getByLesson($lesson_id) {
        return $this->entity->paginate();
    }
}
