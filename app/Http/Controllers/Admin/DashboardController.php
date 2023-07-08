<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){
        $visitorsPerDay = Visitor::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at)as month'),
            DB::raw('DAY(created_at)as day'),
            DB::raw('COUNT(uid) AS count'),
        )->groupBy('day')->orderBy('created_at', 'desc')->get();

        $visitorsPerMonth = Visitor::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at)as month'),
            DB::raw('COUNT(uid) AS count'),
        )->groupBy('month')->orderBy('created_at', 'desc')->get();

        $visitorsPerYear = Visitor::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at)as month'),
            DB::raw('DAY(created_at)as day'),
            DB::raw('COUNT(uid) AS count'),
        )->groupBy('year')->orderBy('created_at', 'desc')->get();

        return view('admin.dashboard.index',compact('visitorsPerDay','visitorsPerMonth','visitorsPerYear'));
    }
}
