<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\Store;
use App\Http\Requests\Admin\Question\Update;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        $questions = Question::all();
        $i = 1;

        return view('admin.questions.index',compact('questions','i'));
    }

    public function create(){
        return view('admin.questions.create');
    }

    public function store(Store $request){
        Question::create($request->validated());
        auth()->guard('admin')->user()->saveReport('اضافه سؤال');

        return response()->json(['url' => route('admin.questions.index')]);
    }

    public function update(Update $request){
        $question = Question::findOrFail($request->id);
        $question->update($request->validated());
        auth()->guard('admin')->user()->saveReport('تعديل سؤال');
        return response()->json(['url' => route('admin.questions.index')]);
    }

    public function destroy($id){
        Question::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف سؤال');
        return response()->json(['url' => route('admin.questions.index')]);
    }

}
