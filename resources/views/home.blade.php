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
                        <h3>25</h3>
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
                        <h3>0</h3>
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
                        <h3>0</h3>
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
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Unknown</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-6">
                <div class="card">
                    <div class="card-header ui-sortable-handle">
                        <h3 class="card-title">
                            Bar Chart
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="p-0 tab-content">
                            <div class="chart">
                                <canvas id="areaChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 572px;"
                                    width="715" height="312" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card">
                    <div class="card-header ui-sortable-handle">
                        <h3 class="card-title">
                            Donut Chart
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="p-0 tab-content">
                            <div class="chart">
                                <canvas id="areaChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 572px;"
                                    width="715" height="312" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
