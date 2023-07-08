<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Settings\Update;
use App\Models\Setting;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use UploadTrait;
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }



    public function update(Update $request)
    {
        $settings = $request->all();
        if ($request['logo_header']) {
            $settings['logo_header'] = $this->uploadAllTyps($request['logo_header'], 'settings');
        }
        if ($request['logo_footer']) {
            $settings['logo_footer'] = $this->uploadAllTyps($request['logo_footer'], 'settings');
        }

        foreach ($settings as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            ($setting) ? $setting->update(['value' => $value]) : Setting::create(['key' => $key, 'value' => $value]);
        }
        auth()->guard('admin')->user()->saveReport('تحديث الاعدادات');
        return (['response' => 'success', 'url' => route('admin.settings.index')]);
    }

}


