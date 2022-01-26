<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [
        'review',
        'grade',
        'student',
        'url',
    ];

    public function students() {
        return $this->belongsTo(User::class, 'student');
    }
}
