<?php

namespace App\Http\Controllers;

use App\Charts\ComplaintChart;
use App\Models\Complaint;
use Carbon\Carbon;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        // $newComplaints = Complaint::where('status', 'Baru')->orderBy('created_at')->select('created_at')->get();
        $newComplaints = Complaint::where('status', 'Baru')->orderBy('created_at')->pluck('status', 'created_at');
        $progressComplaints = Complaint::where('status', 'Dalam Proses')->orderBy('created_at')->pluck('status', 'created_at');
        $completedComplaints = Complaint::where('status', 'Selesai')->orderBy('created_at')->pluck('status', 'created_at');
        $totalCount = $newComplaints->count() + $progressComplaints->count() + $completedComplaints->count();

        $year = [];
        for ($i = 5; $i >= 0; $i--) {
            $dt = Carbon::today()->subYear($i)->format('Y');
            array_push($year, $dt);
        }

        $yearlyTotal = [];
        foreach ($year as $key => $value) {
            $yearlyTotal[] = Complaint::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)
                ->count();
        }

        $yearlyNew = [];
        foreach ($year as $key => $value) {
            $yearlyNew[] = Complaint::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)
                ->where('status', 'Baru')
                ->count();
        }

        $yearlyProgress = [];
        foreach ($year as $key => $value) {
            $yearlyProgress[] = Complaint::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)
                ->where('status', 'Dalam Proses')
                ->count();
        }

        $yearlyCompleted = [];
        foreach ($year as $key => $value) {
            $yearlyCompleted[] = Complaint::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)
                ->where('status', 'Selesai')
                ->count();
        }

        return view('admin.dashboard', compact(
            'newComplaints',
            'progressComplaints',
            'completedComplaints',
            'totalCount',
            'year',
            'yearlyTotal',
            'yearlyNew',
            'yearlyProgress',
            'yearlyCompleted'));
    }
}
