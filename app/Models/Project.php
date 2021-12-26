<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = ['id', 'name', 'description', 'category', 'nbr_theme'];
}
