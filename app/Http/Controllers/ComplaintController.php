<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use DataTables;

class ComplaintController extends Controller {
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
        return view('admin.complaint.index');
    }

    public function create() {
        return view('admin.complaint.create');
    }

    public function getComplaints(Request $request) {
        if ($request->ajax()) {
            $data = Complaint::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Details</a>
                    <br>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>
                    ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
