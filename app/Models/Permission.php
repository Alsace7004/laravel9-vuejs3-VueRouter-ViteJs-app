<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as SpatiePermission;
class Permission extends SpatiePermission
{
    use HasFactory;

    public function __construct(array $attributes =[])
    {
        parent::__construct($attributes);
        $this->mergeFillable(['slug','categorie_permission_id']);
    }
}
