<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CsvImportRequest;
use App\Models\CsvData;
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
        return view('admin.school.create');
    }

    public function store(Request $request) {
        $request->validate([
            'school_code' => 'required',
            'school_name' => 'required',
        ], 
        [
            'school_code.required' => 'Sila masukkan Kod Sekolah',
            'school_name.required' => 'Sila masukkan Nama Sekolah',
        ]);

        $data = $request->all();
        School::create($data);

        return redirect()->route('schools.index')->with('success', 'Maklumat sekolah telah disimpan');
    }

    public function edit(School $school) {
        return view('admin.school.edit', compact('school'));
    }

    public function update(Request $request, School $school) {
        $request->validate([
            'school_code' => 'required',
            'school_name' => 'required',
        ]);

        $data = $request->all();
        $school->update($data);
        $school->touch();

        return redirect()->route('schools.index')
            ->with('success', 'Sekolah telah dikemaskini');
    }

    public function destroy(School $school) {
        $school->delete();

        return redirect()->route('schools.index')
            ->with('success', 'Sekolah telah dipadam');
    }

    public function parseImport(CsvImportRequest $request) {
        if ($request->has('header')) {
            $headings = (new HeadingRowImport)->toArray($request->file('csv_file'));
            $data = Excel::toArray(new ContactsImport, $request->file('csv_file'))[0];
        } else {
            $data = array_map('str_getcsv', file($request->file('csv_file')->getRealPath()));
        }

        if (count($data) > 0) {
            $csv_data = array_slice($data, 0, 2);

            $csv_data_file = CsvData::create([
                'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                'csv_header' => $request->has('header'),
                'csv_data' => json_encode($data),
            ]);
        } else {
            return redirect()->back();
        }

        return view('import_fields', [
            'headings' => $headings ?? null,
            'csv_data' => $csv_data,
            'csv_data_file' => $csv_data_file,
        ]);
    }

    public function processImport(Request $request) {
        $data = CsvData::find($request->csv_data_file_id);
        $csv_data = json_decode($data->csv_data, true);
        foreach ($csv_data as $row) {
            $contact = new Contact();
            foreach (config('app.db_fields') as $index => $field) {
                if ($data->csv_header) {
                    $contact->$field = $row[$request->fields[$field]];
                } else {
                    $contact->$field = $row[$request->fields[$index]];
                }
            }
            $contact->save();
        }

        return view('admin.school.index');
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
        $detailsURL = route('schools.edit', $data->id);
        $deleteURL = route('schools.destroy', $data->id);

        // $x = '
        //     <form action=' . $deleteURL . ' method="POST">
        //         <a href=' . $detailsURL . ' class="edit btn btn-success btn-sm">
        //             <i class="fas fa-edit"></i>
        //             Sunting
        //         </a>
        //         ' . csrf_field() . '
        //         ' . method_field("DELETE") . '
        //         <button type="submit" class="delete btn btn-danger btn-sm"
        //             onclick="return confirm(\'Anda pasti?\')">
        //             <i class="fas fa-trash"></i>
        //             Padam
        //     </form>';

        $x = '
            <form action=' . $deleteURL . ' method="POST">
                <a href=' . $detailsURL . ' class="edit btn btn-success btn-sm">
                    <i class="fas fa-edit"></i>
                    Sunting
                </a>
            </form>';

        return $x;
    }
}
