<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title_en', 'title_fr', 'img', 'content_en', 'content_fr', 'location', 'created_at', 'updated_at'];
}
