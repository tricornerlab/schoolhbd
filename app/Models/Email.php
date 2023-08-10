<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'surname', 'email', 'subject', 'content', 'created_at', 'updated_at' ];
}
