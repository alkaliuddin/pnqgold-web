@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Complaint Tickets</h1>
        </div>
    </div>
    <div class="container-fluid mx-auto">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-plus"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            New
                        </span>
                        <span class="info-box-number text-lg">
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
                            In Progress
                        </span>
                        <span class="info-box-number text-lg">
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
                            Completed
                        </span>
                        <span class="info-box-number text-lg">
                            {{ $completedCount->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="info-box">
                    <span class="info-box-icon bg-danger">
                        <i class="fas fa-question"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Unknown
                        </span>
                        <span class="info-box-number text-lg">
                            {{ $unknownCount->count() }}
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
                            List of Complaint Tickets
                        </h3>
                        <a href="{{ url('/complaints/create') }}" class="btn btn-primary float-right pull-right">
                            <i class="fas fa-plus"></i>
                            Create a Complaint Ticket
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="p-0">
                            <table class="table table-auto table-bordered yajra-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ISD Code</th>
                                        <th>School Code</th>
                                        <th>School</th>
                                        <th>Asset Model</th>
                                        <th>Tagging No.</th>
                                        <th>Serial No.</th>
                                        <th>Complainant Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
    @include('scripts.complaintsDataTable')
@endsection
