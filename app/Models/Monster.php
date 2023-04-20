<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    public function weapons() {
        return $this->belongsToMany(Weapon::class)->withPivot('quantity');
    }

    public function spells() {
        return $this->belongsToMany(Spell::class);
    }
}
