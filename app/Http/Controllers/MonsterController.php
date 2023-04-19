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
            /* $monsters = [Monster::all(), Weapon::all(), Spell::all()];
            return response()->json($monsters); */

            /* $monsters_pivot = Monster::all();
            foreach ($monsters_pivot->weapons as $weapon) {
                return response()->json($weapon->pivot->quantities);
            } */

            /* Monster::where('quantities', 1)
                ->whereHas('weapon', function($q) {
                    $q->where('id_weapon', 1);
                })
                ->get(); */

            /* $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get(); */
        }
}
