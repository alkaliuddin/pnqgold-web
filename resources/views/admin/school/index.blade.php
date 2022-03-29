@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Schools</h1>
        </div>
    </div>
    <div class="container-fluid mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            List of Schools
                        </h3>
                        <a href="#" onclick="alert('Feature not ready')" class="btn btn-primary float-right pull-right">
                            <i class="fas fa-plus"></i>
                            Add School
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="p-0">
                            <table class="table table-auto table-bordered schools-datatable dt-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>School</th>
                                        <th>School Code</th>
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
@endsection
