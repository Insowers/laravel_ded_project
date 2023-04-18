<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index()
        {
            $monsters = Monster::all();
            return response()->json($monsters);
        }
}
