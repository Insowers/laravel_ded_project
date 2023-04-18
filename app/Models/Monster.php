<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    public function weapon() {
        return $this->belongsToMany(Weapon::class)->withPivot('quantities');
    }

    public function spell() {
        return $this->belongsToMany(Spell::class);
    }
}
