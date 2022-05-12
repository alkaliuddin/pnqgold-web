@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Pengurusan Tiket Aduan</h1>
        </div>
    </div>
    <div class="mx-auto container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-plus"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Baru
                        </span>
                        <span class="text-lg info-box-number">
                            {{ $newCount->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-warning">
                        <i class="fas fa-sync"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Dalam Proses
                        </span>
                        <span class="text-lg info-box-number">
                            {{ $progressCount->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-success">
                        <i class="fas fa-check"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Selesai
                        </span>
                        <span class="text-lg info-box-number">
                            {{ $completedCount->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-primary">
                        <i class="fas fa-folder-plus"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Jumlah
                        </span>
                        <span class="text-lg info-box-number">
                            {{ $totalCount }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Senarai Tiket Aduan
                        </h3>
                        <a href="{{ route('complaints.create') }}" class="float-right btn btn-primary pull-right">
                            <i class="fas fa-plus"></i>
                            Masuk Aduan Baru
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="p-0">
                            <table class="table table-auto table-bordered complaints-datatable dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-priority="1">Tarikh Masuk</th>
                                        <th>Tarikh Kemaskini</th>
                                        <th>Status</th>
                                        <th data-priority="1">Kod Aduan ISD</th>
                                        <th data-priority="1">Kod Sekolah</th>
                                        <th>Nama Sekolah</th>
                                        <th data-priority="1">Model Aset</th>
                                        <th>No. Tagging</th>
                                        <th>No. Siri</th>
                                        <th>Nama Pengadu</th>
                                        <th>Emel Pengadu</th>
                                        <th>No. Tel. Pengadu</th>
                                        <th>Keterangan Aduan</th>
                                        <th>Lampiran</th>
                                        <th data-priority="2">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Using DataTables to show data, refer to ComplaintController.php and app.js for functions -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
