<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model {
    use HasFactory;

    protected $fillable = ['titel', 'header', 'link', 'img', 'alt', 'video', 'description'];
    protected $table = 'projects';

}



