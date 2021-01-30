<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function relative()
    {
        return $this->belongsTo(Person::class, 'relationship_person_id');
    }
    
    public function type()
    {
        return $this->hasOne(RelationshipType::class, 'id', 'relationship_type_id');
    }
}
