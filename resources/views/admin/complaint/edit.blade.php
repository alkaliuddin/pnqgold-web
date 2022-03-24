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
                    <form action="{{ route('complaints.update', $complaint->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complaint_isd_code">ISD Code</label>
                                            <input type="text" class="form-control" id="complaint_isd_code"
                                                name="complaint_isd_code" value="{{ $complaint->complaint_isd_code }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="school_id">School Name & Code</label>
                                            <select class="form-control" name="school_id" id="school_id">
                                                <option value="school_id" selected disabled>-- Select School --
                                                </option>
                                                @foreach ($schools as $key => $school)
                                                    @if ($complaint->school_id == $school->id)
                                                        <option value="{{ $school->id }}" selected>
                                                            {{ $school->school_name }} ({{ $school->school_code }})
                                                        </option>
                                                    @else
                                                        <option value="{{ $school->id }}">
                                                            {{ $school->school_name }} ({{ $school->school_code }})
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asset_model">Asset Model</label>
                                            <input type="text" class="form-control" id="asset_model" name="asset_model"
                                                value="{{ $complaint->asset_model }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tagging_no">Tagging No.</label>
                                            <input type="text" class="form-control" id="tagging_no" name="tagging_no"
                                                value="{{ $complaint->tagging_no }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_no">Serial No.</label>
                                            <input type="text" class="form-control" id="serial_no" name="serial_no"
                                                value="{{ $complaint->serial_no }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_name">Complainant Name</label>
                                            <input type="text" class="form-control" id="complainant_name"
                                                name="complainant_name" value="{{ $complaint->complainant_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="complainant_email">Complainant Email</label>
                                            <input type="email" class="form-control" id="complainant_email"
                                                name="complainant_email" value="{{ $complaint->complainant_email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_phone">Complainant Phone No</label>
                                            <input type="text" class="form-control" id="complainant_phone"
                                                name="complainant_phone" value="{{ $complaint->complainant_phone }}">
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
                                        <textarea id="complaint_details" name="complaint_details" rows="4"
                                            class="form-control">{{ $complaint->complaint_details }}</textarea>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="form-group">
                                        <label for="status" class="block mb-2">
                                            Status
                                        </label>
                                        <br>
                                        <select class="form-control" name="status" id="status">
                                            <option value="status" selected disabled>-- Select Updated Status --</option>
                                            <option value="New">New</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Unknown">Unknown</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('complaints.index') }}" class="btn btn-danger">
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
