<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\School;
use Carbon\Carbon;

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
        $selectedYear = 2021;

        $newCount = Complaint::where('status', 'Baru')->get();
        $progressCount = Complaint::where('status', 'Dalam Proses')->get();
        $completedCount = Complaint::where('status', 'Selesai')->get();
        $totalCount = $newCount->count() + $progressCount->count() + $completedCount->count();

        return view('admin.dashboard', compact('newCount', 'progressCount', 'completedCount', 'totalCount'));
    }
}
