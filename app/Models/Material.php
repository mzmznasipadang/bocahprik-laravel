<?php

// app/Models/Material.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'title', 'type', 'content_url', 'duration', 'order_number'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
