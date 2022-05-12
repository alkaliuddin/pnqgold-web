@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="text-black-50">Utama</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $newComplaints->count() }}</h3>
                    <p>Baru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-plus"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">
                    Maklumat lanjut
                    <i class="fas fa-arrow-circle-right"></i>
                </a> --}}
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $progressComplaints->count() }}</h3>
                    <p>Dalam Proses</p>
                </div>
                <div class="icon">
                    <i class="fas fa-sync"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">
                    Maklumat lanjut
                    <i class="fas fa-arrow-circle-right"></i>
                </a> --}}
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $completedComplaints->count() }}</h3>
                    <p>Selesai</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">
                    Maklumat lanjut
                    <i class="fas fa-arrow-circle-right"></i>
                </a> --}}
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalCount }}</h3>
                    <p>Jumlah</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-plus"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">
                    Maklumat lanjut
                    <i class="fas fa-arrow-circle-right"></i>
                </a> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 md:col-12">
            <div class="card card-primary">
                <div class="card-header ui-sortable-handle">
                    <h3 class="card-title">
                        Carta Aduan Tahunan
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="p-0 tab-content">
                        <canvas id="barChart" height="100px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('scripts.statisticCharts')
@endsection