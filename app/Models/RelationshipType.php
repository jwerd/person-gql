<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationshipType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function relationships()
    {
        return $this->hasMany(Relationship::class, 'relationship_type_id', 'id');
    }
}
