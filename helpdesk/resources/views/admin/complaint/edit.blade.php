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
            <strong>Oops!</strong> Sila semak maklumat berikut.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mx-auto container-fluid">
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
                                            <label for="complaint_isd_code">Kod Aduan ISD</label>
                                            <input type="text" class="form-control" id="complaint_isd_code" name="complaint_isd_code"
                                                value="{{ $complaint->complaint_isd_code }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="school_id">Nama Sekolah dan Kod</label>
                                            <select class="form-control" name="school_id" id="school_id">
                                                <option value="school_id" selected disabled>-- Pilih Sekolah --
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
                                            <label for="asset_model">Model Aset</label>
                                            <input type="hidden" class="asset_selected_val" value="{{ $complaint->asset_model }}" />
                                            <select class="form-control" id="asset_model" name="asset_model" required>
                                                <option value="" disabled>-- Pilih Model Aset --</option>
                                                <option value="Komputer Riba">Komputer Riba</option>
                                                <option value="Printer">Printer</option>
                                                <option value="Projektor">Projektor</option>
                                                <option value="Charging Cart">Charging Cart</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagging_no">No. Pendaftaran </label>
                                            <input type="text" class="form-control" id="tagging_no" name="tagging_no"
                                                value="{{ $complaint->tagging_no }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_no">No. Siri</label>
                                            <input type="text" class="form-control" id="serial_no" name="serial_no"
                                                value="{{ $complaint->serial_no }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_name">Nama Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_name" name="complainant_name"
                                                value="{{ $complaint->complainant_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="complainant_email">Emel Pangadu</label>
                                            <input type="email" class="form-control" id="complainant_email" name="complainant_email"
                                                value="{{ $complaint->complainant_email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_phone">No. Telefon Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_phone" name="complainant_phone"
                                                value="{{ $complaint->complainant_phone }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="form-group">
                                        <label for="complaint_details" class="block mb-2">
                                            Keterangan Aduan
                                        </label>
                                        <br>
                                        <textarea id="complaint_details" name="complaint_details" rows="4" class="form-control" placeholder="Keterangan aduan..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="block mb-2">
                                            Status
                                        </label>
                                        <input type="hidden" class="status_selected_val" value="{{ $complaint->status }}" />
                                        <select class="form-control" name="status" id="status">
                                            <option value="" disabled>-- Pilih Status --</option>
                                            <option value="Baru">Baru</option>
                                            <option value="Dalam Proses">Dalam Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>

                                        <br>

                                        <label for="fileUpload" class="block mb-2">
                                            Muat Naik Lampiran
                                        </label>
                                        <input class="form-control" type="file" name="fileUpload" id="fileUpload">
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('complaints.index') }}" class="btn btn-danger">
                                <i class="mr-2 fas fa-ban"></i>
                                Batal
                            </a>
                            <button class="float-right btn btn-primary" type="submit">
                                <i class="mr-2 fas fa-save"></i>
                                Kemaskini
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('scripts.editComplaintScript')
@endsection
