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
        $newCount = Complaint::where('status', 'New')->get();
        $progressCount = Complaint::where('status', 'In Progress')->get();
        $completedCount = Complaint::where('status', 'Completed')->get();
        $unknownCount = Complaint::where('status', 'Unknown')->get();

        return view('home', compact('newCount', 'progressCount', 'completedCount', 'unknownCount'));
    }
}
