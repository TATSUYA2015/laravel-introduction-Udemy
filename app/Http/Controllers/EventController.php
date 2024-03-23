<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    // 新規登録画面
    public function create()
    {
        return view('events.create');
    }

    // 登録処理
    public function store(Request $request)
    {
        Log::debug('イベント名: '. $request->get('title'));
        return  to_route('events.create');  
    }
}
