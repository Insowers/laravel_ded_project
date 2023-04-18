<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\Spell;
use App\Models\Weapon;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index()
        {
            $monsters = [Monster::all(), Weapon::all(), Spell::all()];
            return response()->json($monsters);
        }
}
