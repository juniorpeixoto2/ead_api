<?php

namespace App\Repositories;

use App\Models\Lessons;

class LessonsRepository {

    protected $entity;

    public function __construct(Lessons $entity) {
        $this->entity = $entity;
    }

    public function getAll() {
        return $this->entity->paginate();
    }
}
