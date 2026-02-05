<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'excerpt',
        'client',
        'category',
        'tags',
        'project_url',
        'start_date',
        'end_date',
        'is_published',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    protected $primaryKey = 'id';

    public $timestamps = true;

}
