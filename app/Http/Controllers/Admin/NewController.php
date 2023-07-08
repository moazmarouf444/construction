<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\Store;
use App\Http\Requests\Admin\News\Update;
use App\Models\NewCompany;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        $news = NewCompany::all();
        $i = 1;
        return view('admin.news.index',compact('news','i'));
    }

    public function create(){
        return view('admin.facts.create');
    }

    public function store(Store $request){
        NewCompany::create($request->validated());
        auth()->guard('admin')->user()->saveReport('اضافه مقال جديد عن الشركه');
        return response()->json(['url' => route('admin.new.company.index')]);
    }

    public function update(Update $request){
        NewCompany::findOrFail($request->id)->update($request->validated());
        auth()->guard('admin')->user()->saveReport('تعديل مقال ');
        return response()->json(['url' => route('admin.new.company.index')]);
    }

    public function destroy($id){
        NewCompany::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف مقال ');
        return response()->json(['url' => route('admin.new.company.index')]);
    }

}
