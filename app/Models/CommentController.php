<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentController extends Model
{
    use HasFactory;
    protected $fillable=["commenttext","username"];
}
