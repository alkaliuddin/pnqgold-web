@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Pengurusan Maklumat Sekolah</h1>
        </div>
    </div>
    <div class="container-fluid mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Senarai Sekolah
                        </h3>
                        <a href="#" onclick="alert('Feature not ready')" class="btn btn-primary float-right pull-right">
                            <i class="fas fa-plus"></i>
                            Tambah Sekolah
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="p-0">
                            <table class="table table-auto table-bordered schools-datatable dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sekolah</th>
                                        <th>Kod Sekolah</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
