<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\Spell;
use App\Models\Weapon;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function loading_data() {
        $loading_data = Monster::select('id','name')->get();
        return $loading_data;
    }

    /* public function index() {
        $monsters = Monster::with('weapons')->get();
        return $monsters;
    } */

    public function show($id) {
        $single_monster_data = Monster::with('weapons','spells')->findOrFail($id);
        return $single_monster_data;
    } 
}
