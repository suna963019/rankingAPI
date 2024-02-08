<?php

namespace App\Http\Controllers;

use App\Models\Slot_score;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    function index(Request $request)
    {
        $data = Slot_score::orderBy('point', 'desc')->paginate(10)->toArray();
        return $data;
    }

    function add(Request $request)
    {
        $table = new Slot_score();
        $data = $request->all();
        $table->fill($data)->save();
        $ranking = Slot_Score::orderBy('point', 'desc')->get()->toArray();
        $num = 0;
        for ($i = 0; $i < count($ranking); $i++) {
            $num = $i;
            if ($ranking[$i]['name'] === $data['name'] && $ranking[$i]['point'] === $data['point']) {
                $num = $i;
            }
            if ($ranking[$i]['point'] < $data['point']) {
                break;
            }
        }
        return [$num];
    }
}
