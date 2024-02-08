<?php

namespace App\Http\Controllers;

use App\Models\BlockBreaker_score;
use Illuminate\Http\Request;

class BlockBreakerController extends Controller
{
    function index(Request $request)
    {
        $data = BlockBreaker_score::orderBy('point', 'desc')->paginate(10)->toArray();
        return $data;
    }

    function add(Request $request)
    {
        $table = new BlockBreaker_score();
        $data = $request->all();
        $table->fill($data)->save();
        $ranking = BlockBreaker_score::orderBy('point', 'desc')->get()->toArray();
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
