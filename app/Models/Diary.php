<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model // mantotajs
{
    use HasFactory;
    protected $fillable = ["title","body","date"];
}
