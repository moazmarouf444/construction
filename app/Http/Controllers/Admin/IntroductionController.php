<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Introduction\Update;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function edit(){
        $introduction = Introduction::first();
        $i = 1;
        return view('admin.introductions.edit',compact('introduction','i'));
    }


    public function update(Update $request){
        Introduction::first()->update($request->validated());
        auth()->guard('admin')->user()->saveReport('تعديل مقدكه');
        return response()->json(['url' => route('admin.introductions.edit')]);
    }
}

