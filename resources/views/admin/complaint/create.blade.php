@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="pull-left">
                <h1 class="text-black-50">Membuat Aduan Baru</h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada masalah dengan input anda.<br><br>
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
                            Butiran Aduan
                        </h3>
                    </div>
                    <form action="{{ route('complaints.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complaint_isd_code">Kod Aduan ISD</label>
                                            <input type="text" class="form-control" id="complaint_isd_code" name="complaint_isd_code" placeholder="Masuk Kod ISD">
                                        </div>
                                        <div class="form-group">
                                            <label for="school_id">Nama Sekolah dan Kod</label>
                                            <select class="form-control" name="school_id" id="school_id">
                                                <option value="school_id" selected disabled>-- Pilih Sekolah --
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
                                            <label for="asset_model">Model Aset</label>
                                            {{-- <input type="text" class="form-control" id="asset_model" name="asset_model"
                                                placeholder="Enter Asset Model"> --}}
                                            <select class="form-control" id="asset_model" name="asset_model">
                                                <option value="status" selected disabled>-- Pilih Model Aset --</option>
                                                <option value="Komputer Riba">Komputer Riba</option>
                                                <option value="Printer">Printer</option>
                                                <option value="Projektor">Projektor</option>
                                                <option value="Charging Cart">Charging Cart</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagging_no">No. Pendaftaran </label>
                                            <input type="text" class="form-control" id="tagging_no" name="tagging_no" placeholder="Masukkan No. Pendaftaran">
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_no">No. Siri</label>
                                            <input type="text" class="form-control" id="serial_no" name="serial_no" placeholder="Masukkan No. Siri">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_name">Nama Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_name" name="complainant_name" placeholder="Masukkan Nama Pengadu">
                                        </div>
                                        <div class="form-group">
                                            <label for="complainant_email">Emel Pangadu</label>
                                            <input type="email" class="form-control" id="complainant_email" name="complainant_email" placeholder="Masukkan Emel Pengadu">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_phone">No. Telefon Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_phone" name="complainant_phone" placeholder="Masukkan No. Telefon Pengadu">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="form-group">
                                        <label for="complaint_details" class="mb-2 block">
                                            Keterangan Aduan
                                        </label>
                                        <br>
                                        <textarea id="complaint_details" name="complaint_details" rows="4" class="form-control" placeholder="Keterangan aduan..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="mb-2 block">
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
                                Batal
                            </a>
                            <button class="btn btn-primary float-right" type="submit">
                                <i class="fas fa-save mr-2"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('scripts.createComplaintScript')
@endsection
