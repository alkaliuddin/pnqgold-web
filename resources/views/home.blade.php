@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Dashboard</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $newCount->count() }}</h3>
                        <p>New</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $progressCount->count() }}</h3>
                        <p>In-progress</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $completedCount->count() }}</h3>
                        <p>Completed</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-4">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $total = $newCount->count() + $progressCount->count() + $completedCount->count() }}</h3>
                        <p>Total</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-6">
                <div class="card">
                    <div class="card-header ui-sortable-handle">
                        <h3 class="card-title">
                            Bar Chart
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="p-0 tab-content">
                            <div class="barChart">
                                <canvas id="barChart" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('scripts.statisticCharts')
@endsection
