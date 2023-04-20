<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\Spell;
use App\Models\Weapon;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function name_list() {
        $monsters_names = Monster::select('id','name')->get();
        return $monsters_names;
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
