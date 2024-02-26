<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $name = $request->input('name');
 
        print_r($name);

    }

    public function delete($id) {
        $monster_to_delete = Monster::where('id',$id)->delete();

        print_r($monster_to_delete);
    }
}
