<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriePermission extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_permission_name'];
}
