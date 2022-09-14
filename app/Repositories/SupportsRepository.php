<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Models\Support;

class SupportsRepository {

    protected $entity;

    public function __construct(Support $entity) {
        $this->entity = $entity;
    }

    public function getAll(array $filters = []) {
        return $this->entity
            ->where(function ($query) use ($filters) {
                if (isset($filters['lesson'])) {
                    $query->where('lesson_id', $filters['lesson']);
                }
                if (isset($filters['user'])) {
                    $query->where('user_id', $filters['user']);
                }
                if (isset($filters['description'])) {
                    $query->where('description', 'LIKE', '%' . $filters['description'] . '%');
                }
            })
            ->paginate();
    }
}
