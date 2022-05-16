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
                            Butiran Aduan
                        </h3>
                    </div>
                    <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complaint_isd_code">Kod Aduan ISD</label>
                                            <input type="text" class="form-control" id="complaint_isd_code" name="complaint_isd_code"
                                                placeholder="Masuk Kod ISD" value="{{ old('complaint_isd_code') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="school_id">Nama Sekolah dan Kod</label>
                                            <select class="form-control" name="school_id" id="school_id">
                                                <option value="school_id" selected disabled>-- Pilih Sekolah --
                                                </option>
                                                @foreach ($schools as $key => $school)
                                                    <option value="{{ $school->id }}"
                                                        {{ old('school_id') == "$school->id" ? 'selected' : '' }}>
                                                        {{ $school->school_name }} ({{ $school->school_code }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asset_model">Model Aset</label>
                                            <select class="form-control" id="asset_model" name="asset_model">
                                                <option value="status" selected disabled>-- Pilih Model Aset --</option>
                                                <option value="Komputer Riba"
                                                    {{ old('asset_model') == 'Komputer Riba' ? 'selected' : '' }}>
                                                    Komputer Riba</option>
                                                <option value="Printer"
                                                    {{ old('asset_model') == 'Printer' ? 'selected' : '' }}>
                                                    Printer</option>
                                                <option value="Projektor"
                                                    {{ old('asset_model') == 'Projektor' ? 'selected' : '' }}>
                                                    Projektor</option>
                                                <option value="Charging Cart"
                                                    {{ old('asset_model') == 'Charging Cart' ? 'selected' : '' }}>
                                                    Charging Cart</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagging_no">No. Pendaftaran </label>
                                            <input type="text" class="form-control" id="tagging_no" name="tagging_no"
                                                placeholder="Masukkan No. Pendaftaran" value="{{ old('tagging_no') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_no">No. Siri</label>
                                            <input type="text" class="form-control" id="serial_no" name="serial_no"
                                                placeholder="Masukkan No. Siri" value="{{ old('serial_no') }}">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_name">Nama Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_name" name="complainant_name"
                                                placeholder="Masukkan Nama Pengadu" value="{{ old('complainant_name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="complainant_email">Emel Pangadu</label>
                                            <input type="email" class="form-control" id="complainant_email" name="complainant_email"
                                                placeholder="Masukkan Emel Pengadu" value="{{ old('complainant_email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complainant_phone">No. Telefon Pengadu</label>
                                            <input type="text" class="form-control" id="complainant_phone" name="complainant_phone"
                                                placeholder="Masukkan No. Telefon Pengadu" value="{{ old('complainant_phone') }}">
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
                                        <textarea id="complaint_details" name="complaint_details" rows="4" class="form-control"
                                            placeholder="Keterangan aduan...">{{ old('complaint_details') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="block mb-2">
                                            Status
                                        </label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="status" selected disabled>-- Pilih Status --</option>
                                            <option value="Baru" {{ old('status') == 'Baru' ? 'selected' : '' }}>Baru</option>
                                            <option value="Dalam Proses"
                                                {{ old('status') == 'Dalam Proses' ? 'selected' : '' }}>
                                                Dalam Proses</option>
                                            <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai
                                            </option>
                                        </select>

                                        <br>

                                        <label for="attachment_path" class="block mb-2">
                                            Muat Naik Lampiran
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control" type="file" name="attachment_path" id="attachment_path">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('complaints.index') }}" class="btn btn-danger">
                                <i class="mr-2 fas fa-ban"></i>
                                Batal
                            </a>
                            <button class="float-right btn btn-primary" type="submit">
                                <i class="mr-2 fas fa-save"></i>
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
