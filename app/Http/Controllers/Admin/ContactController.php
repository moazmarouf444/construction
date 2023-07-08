<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Report;
use App\Traits\ReportTrait;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use ReportTrait;
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $i = 1;
        return view('admin.contacts.index', compact('contacts', 'i'));
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف رساله');
        return response(['id' => $id]);
    }

   
}
