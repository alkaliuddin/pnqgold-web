<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use DataTables;

class SchoolController extends Controller {
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
        return view('admin.school.index');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function edit(School $school) {

    }

    public function update(Request $request, School $school) {

    }

    public function destroy(School $school) {

    }

    public function getSchools(Request $request) {
        if ($request->ajax()) {
            $data = School::latest()->get();
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
        $detailsURL = '#';
        $deleteURL = '#';

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
}
