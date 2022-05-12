@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="pull-left">
                <h1 class="text-black-50">Masuk Maklumat Sekolah</h1>
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
                            Butiran Sekolah
                        </h3>
                    </div>
                    <form action="{{ route('schools.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="school_code">Kod Sekolah</label>
                                            <input type="text" class="form-control" id="school_code" name="school_code" placeholder="Masuk Kod Sekolah" value="{{ old('school_code') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="school_name">Nama Sekolah</label>
                                            <input type="text" class="form-control" id="school_name" name="school_name" placeholder="Masukkan Nama Sekolah" value="{{ old('school_name') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">
                                <i class="mr-2 fas fa-ban"></i>
                                Cancel
                            </a>
                            <button class="float-right btn btn-primary" type="submit">
                                <i class="mr-2 fas fa-save"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="mx-auto container-fluid">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Import dari CSV
                        </h3>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="csv_file" class="form-label">Pilih fail CSV to import</label>
                                            <input type="file" class="form-control" id="csv_file" name="csv_file">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-8 form-check">
                                            <input type="checkbox" class="form-check-input" id="header" name="header" checked>
                                            <label class="form-check-label" for="header">
                                                Fail mempunyai baris header?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">
                                <i class="mr-2 fas fa-ban"></i>
                                Cancel
                            </a>
                            <button class="float-right btn btn-primary" type="submit">
                                <i class="fas fa-cloud-upload-alt"></i>
                                Import
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
