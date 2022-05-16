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
        $newCount = Complaint::where('status', 'Baru')->get();
        $progressCount = Complaint::where('status', 'Dalam Proses')->get();
        $completedCount = Complaint::where('status', 'Selesai')->get();
        $totalCount = $newCount->count() + $progressCount->count() + $completedCount->count();

        $data = Complaint::with('School')
            ->latest('complaints.updated_at')
            ->get();

        // dd($data->toArray());

        return view('admin.complaint.index', compact('newCount', 'progressCount', 'completedCount', 'totalCount'));
    }

    public function create() {
        $schools = School::all();
        return view('admin.complaint.create', compact('schools'));
    }

    public function show(Complaint $complaint) {
        //
    }

    public function store(Request $request) {

        $request->validate(
            [
                'complaint_isd_code' => 'bail|required',
                'school_id' => 'required',
                'asset_model' => 'required',
                'tagging_no' => 'required',
                'serial_no' => 'required',
                'complainant_name' => 'required',
                'complainant_email' => 'required',
                'complainant_phone' => 'required',
                'complaint_details' => 'required',
                'status' => 'required',
            ],
            [
                'complaint_isd_code.required' => 'Sila masukkan Kod Aduan ISD',
                'school_id.required' => 'Sila pilih Sekolah',
                'asset_model.required' => 'Sila pilih Model Aset',
                'tagging_no.required' => 'Sila masukkan No. Pendaftaran',
                'serial_no.required' => 'Sila masukkan No. Siri',
                'complainant_name.required' => 'Sila masukkan Nama Pengadu',
                'complainant_email.required' => 'Sila masukkan Emel Pangadu',
                'complainant_phone.required' => 'Sila masukkan No. Telefon Pengadu',
                'complaint_details.required' => 'Sila masukkan Keterangan Aduan',
                'status.required' => 'Sila pilih Status aduan',
            ]
        );

        $data = $request->all();
        // $ISDExists = Complaint::where('complaint_isd_code',);
        Complaint::create($data);

        return redirect()->route('complaints.index')
            ->with('success', 'Aduan berjaya disimpan');
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
        $complaint->touch();

        return redirect()->route('complaints.index')
            ->with('success', 'Aduan telah dikemaskini');
    }

    public function destroy(Complaint $complaint) {
        $complaint->delete();

        return redirect()->route('complaints.index')
            ->with('success', 'Aduan telah dipadam');
    }

    public function getComplaints(Request $request) {

        if ($request->ajax()) {
            $data = Complaint::with('School')
                ->select('complaints.*')
                ->latest('complaints.updated_at')
                ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($request) {
                    return $request->created_at->toDateTimeString();
                })
                ->editColumn('updated_at', function ($request) {
                    return $request->updated_at->toDateTimeString();
                })
                ->addColumn('download', function ($row) {
                    return $this->getAttachmentDownloadColumn($row);
                })
                ->addColumn('action', function ($row) {
                    return $this->getActionColumn($row);
                })
                ->rawColumns(['download', 'action'])
                ->make(true);
        }
    }

    public function getActionColumn($data) {
        $detailsURL = route('complaints.edit', $data->id);
        $deleteURL = route('complaints.destroy', $data->id);

        $x = '
            <form action=' . $deleteURL . ' method="POST">
                <a href=' . $detailsURL . ' class="edit btn btn-success btn-sm">
                    <i class="fas fa-edit"></i>
                    Sunting
                </a>
                ' . csrf_field() . '
                ' . method_field("DELETE") . '
                <button type="submit" class="delete btn btn-danger btn-sm"
                    onclick="return confirm(\'Anda pasti?\')">
                    <i class="fas fa-trash"></i>
                    Padam
            </form>';

        return $x;
    }

    public function getAttachmentDownloadColumn($data) {
        $downloadURL = '#';

        $xy = '
            <a href=' . $downloadURL . ' class="edit btn btn-info btn-sm">
                <i class="fas fa-file-download"></i>
                Muat Turun
            </a>';

        return $xy;
    }
}
