<?php

namespace Database\Seeders;

use App\Models\RelationshipType;
use Illuminate\Database\Seeder;

class RelationshipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'RELATIVE'],
            ['name' => 'ASSOCIATE'],
            ['name' => 'FRIEND'],
            ['name' => 'ENEMY']
        ];
        foreach($types as $type) {
            RelationshipType::updateOrCreate($type,$type);
        }
    }
}
