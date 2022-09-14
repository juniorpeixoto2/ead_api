<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model {
    use HasFactory;

    protected $fillable = [
        'name', 'url', 'video'
    ];

    public function module() {
        return $this->belongsTo(Modules::class);
    }
}
