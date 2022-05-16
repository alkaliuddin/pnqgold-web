<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\School;

class GuestController extends Controller {
    /**
     * Show the guest helpdesk view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('guest.helpdesk');
    }

    public function search() {
        $search_query = $_GET['query'];
        if (empty($search_query)) {
            return \redirect()->route('guest.index')->withErrors(['msg' => 'Sila masukkan Kod ISD']);
        }
        $complaints = Complaint::where('complaint_isd_code', 'LIKE', '%' . $search_query . '%')->with('School')->get();

        if ($complaints->isEmpty()) {
            return \redirect()->route('guest.index')->withErrors(['msg' => 'Tiada aduan dengan Kod ISD yang diberi']);
        }

        // dd($complaints->toArray());

        return view('guest.search', compact('complaints'));
    }

    public function show(Complaint $complaint) {
        //
    }

    public function downloadAttachment(Request $request, $attachment_path) {
        return response()->file(public_path('assets/' . $attachment_path));
    }
}
