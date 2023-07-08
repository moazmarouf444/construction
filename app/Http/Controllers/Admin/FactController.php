<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Fact\Store;
use App\Http\Requests\Admin\Fact\Update;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $facts = Fact::all();
        $i = 1;
        return view('admin.facts.index',compact('facts','i'));
    }

    public function create(){
        return view('admin.facts.create');
    }

    public function store(Store $request){
        Fact::create($request->validated());
        auth()->guard('admin')->user()->saveReport('اضافه حقيقه عن الشركه ');
        return response()->json(['url' => route('admin.facts.index')]);
    }

    public function update(Update $request){
        Fact::findOrFail($request->id)->update($request->validated());
        auth()->guard('admin')->user()->saveReport('تعديل حقيقه عن الشركه');
        return response()->json(['url' => route('admin.facts.index')]);
    }

    public function destroy($id){
        Fact::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف حقيقه عن الشركه');
        return response()->json(['url' => route('admin.facts.index')]);
    }

}
