<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Introduction;
use App\Models\NewCompany;
use App\Models\Project;
use App\Models\Question;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request){
        $existing_uid = $request->cookie('visitor_uid');
        if (! $existing_uid || Visitor::where('uid', $existing_uid)->doesntExist()) {
            $uid = Str::uuid();
            Visitor::create(['uid' => $uid]);
        }
        $settings = Setting::all()->pluck('value', 'key');
        $intro = Introduction::first();
        $questions = Question::all();
        $facts = Fact::take(4)->latest()->get();
        $news = NewCompany::all();

        return view('site.index',compact('settings','questions','intro','facts','news'));
    }

    public function new($id){
        $new = NewCompany::findOrFail($id);
        $settings = Setting::all()->pluck('value', 'key');
        return view('site.new',compact('new','settings'));
    }
    public function contactUs(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'phone'=>'required|min:9|max:11',
            'email'=>'required|email',
            'message' => 'required',
        ]);
        if($validator->passes()){
            Contact::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'message' => $request['message'],
            ]);
            $msg  = route('site.index');
            return response()->json([
                'key' => 'success',
                'msg' => $msg
            ]);
        }else {
            foreach ((array)$validator->errors() as $key => $value) {
                foreach ($value as $msg) {
                    return response()->json(['key' => 'fail', 'msg' => $msg[0]]);
                }
            }
        }
    }

}
