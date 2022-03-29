@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="pull-left">
                <h1 class="text-black-50">Insert new Complaint</h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Complaint Details
                        </h3>
                    </div>
                    <form action="{{ route('complaints.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complaint_isd_code">ISD Code</label>
                                            <input type="text" class="form-control" id="complaint_isd_code"
                                                name="complaint_isd_code" placeholder="Enter ISD Code">
                                        </div>
                                        <div class="form-group">
                                            <label for="school_id">School Name & Code</label>
                                            <select class="form-control" name="school_id" id="school_id">
                                                <option value="school_id" selected disabled>-- Select School --
                                                </option>
                                                @foreach ($schools as $key => $school)
                                                    <option value="{{ $school->id }}">
                                                        {{ $school->school_name }} ({{ $school->school_code }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asset_model">Asset Model</label>
                                            {{-- <input type="text" class="form-control" id="asset_model" name="asset_model"
                                                placeholder="Enter Asset Model"> --}}
                                            <select class="form-control" id="asset_model" name="asset_model">
                                                <option value="status" selected disabled>-- Select Asset Model --</option>
                                                <option value="Komputer Riba">Komputer Riba</option>
                                                <option value="Printer">Printer</option>
                                                <option value="Projektor">Projektor</option>
                                                <option value="Charging Cart">Charging Cart</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagging_no">Tagging No.</label>
                                            <input type="text" class="form-control" id="tagging_no" name="tagging_no"
                                                placeholder="Enter Tagging #">
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_no">Serial No.</label>
                                            <input type="text" class="form-control" id="serial_no" name="serial_no"
                                                placeholder="Enter Serial #">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_name">Complainant Name</label>
                                            <input type="text" class="form-control" id="complainant_name"
                                                name="complainant_name" placeholder="Enter Complainant Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="complainant_email">Complainant Email</label>
                                            <input type="email" class="form-control" id="complainant_email"
                                                name="complainant_email" placeholder="Enter Complainant Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_phone">Complainant Phone No</label>
                                            <input type="text" class="form-control" id="complainant_phone"
                                                name="complainant_phone" placeholder="Enter Complainant Phone #">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex">
                                    <div class="form-group">
                                        <label for="complaint_details" class="block mb-2">
                                            Details
                                        </label>
                                        <br>
                                        <textarea id="complaint_details" name="complaint_details" rows="4" class="form-control"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="form-group">
                                        <label for="status" class="block mb-2">
                                            Status
                                        </label>
                                        <br>
                                        <select class="form-control" name="status" id="status">
                                            <option value="status" selected disabled>-- Pilih Status --</option>
                                            <option value="Baru">Baru</option>
                                            <option value="Dalam Proses">Dalam Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">
                                <i class="fas fa-ban mr-2"></i>
                                Cancel
                            </a>
                            <button class="btn btn-primary float-right" type="submit">
                                <i class="fas fa-save mr-2"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
