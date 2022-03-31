<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\School;

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
        $newCount = Complaint::where('status', 'Baru')->get();
        $progressCount = Complaint::where('status', 'Dalam Proses')->get();
        $completedCount = Complaint::where('status', 'Selesai')->get();

        return view('admin.dashboard', compact('newCount', 'progressCount', 'completedCount'));
    }
}
