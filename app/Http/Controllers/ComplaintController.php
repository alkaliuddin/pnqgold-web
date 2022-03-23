<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Complaint;
use App\Models\School;
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
        $newCount = Complaint::where('status', 'New')->get();
        $progressCount = Complaint::where('status', 'In Progress')->get();
        $completedCount = Complaint::where('status', 'Completed')->get();
        $unknownCount = Complaint::where('status', 'Unknown')->get();

        $data = Complaint::with('School')
            ->latest('complaints.updated_at')
            ->get();

        // dd($data->toArray());

        return view('admin.complaint.index', compact('newCount', 'progressCount', 'completedCount', 'unknownCount'));
    }

    public function create() {
        $schools = School::all();
        return view('admin.complaint.create', compact('schools'));
    }

    public function show(Complaint $complaint) {
        //
    }

    public function store(Request $request) {

        $request->validate([
            'complaint_isd_code' => 'required',
            'school_id' => 'required',
            'asset_model' => 'required',
            'tagging_no' => 'required',
            'serial_no' => 'required',
            'complainant_name' => 'required',
            'complainant_email' => 'required',
            'complainant_phone' => 'required',
            'complaint_details' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        $ISDExists = Complaint::where('complaint_isd_code', );
        Complaint::create($data);

        return redirect()->route('complaints.index')->with('success', 'Complaint saved successfully');
    }

    public function edit(Complaint $complaint) {
        $schools = School::all();
        return view('admin.complaint.edit', compact('complaint', 'schools'));
    }

    public function update(Request $request, Complaint $complaint) {
        $request->validate([
            'complaint_isd_code' => 'required',
            'school_id' => 'required',
            'asset_model' => 'required',
            'tagging_no' => 'required',
            'serial_no' => 'required',
            'complainant_name' => 'required',
            'complainant_email' => 'required',
            'complainant_phone' => 'required',
            'complaint_details' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
        $complaint->update($data);

        return redirect()->route('complaints.index')
            ->with('success', 'Complaint updated successfully');
    }

    public function destroy(Complaint $complaint) {
        $complaint->delete();

        return redirect()->route('complaints.index')
            ->with('success', 'Complaint deleted successfully');
    }

    public function getComplaints(Request $request) {

        if ($request->ajax()) {
            $data = Complaint::with('School')
                ->select('complaints.*')
                ->latest('complaints.updated_at')
                ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return $this->getActionColumn($row);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function getActionColumn($data) {
        $detailsURL = route('complaints.edit', $data->id);
        $deleteURL = route('complaints.destroy', $data->id);

        $btn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        $x = '
                <a href=' . $detailsURL . ' class="edit btn btn-success btn-sm">Details</a>
                <form action=' . $deleteURL . ' method="POST">
                    ' . csrf_field() . '
                    ' . method_field("DELETE") . '
                    <button type="submit" class="delete btn btn-danger btn-sm"
                        onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</a>
                </form>';

        return $x;
    }
}
