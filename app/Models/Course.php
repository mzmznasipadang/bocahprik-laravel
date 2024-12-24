<?php

// app/Models/Course.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumbnail_url', 'created_by'];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}

