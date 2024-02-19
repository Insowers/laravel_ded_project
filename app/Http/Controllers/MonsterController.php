<?php

namespace App\Http\Controllers;

use App\Models\Monster;

class MonsterController extends Controller
{
    public function loading_data() {
        $loading_data = Monster::select('id','name')->get();
        return $loading_data;
    }

    public function show($id) {
        $single_monster_data = Monster::with('weapons','spells')->findOrFail($id);
        return $single_monster_data;
    } 
}
