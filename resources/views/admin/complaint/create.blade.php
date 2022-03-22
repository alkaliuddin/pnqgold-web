@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-black-50">Insert new Complaint</h1>
        </div>
    </div>
    <div class="container-fluid mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Complaint Details
                        </h3>
                    </div>
                    <form action="#">
                        <div class="card-body">
                            <div class="p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputISD">ISD Code</label>
                                            <input type="text" class="form-control" id="inputISD"
                                                placeholder="Enter ISD Code">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSchoolName">School Name</label>
                                            <select class="form-control" name="inputSchoolName" id="inputSchoolName">
                                                <option value="null">-- Select School --</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSchoolCode">School Code</label>
                                            <select class="form-control" name="inputSchoolCode" id="inputSchoolCode"
                                                disabled>
                                                <option value="null">-- Select School --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputAssetModel">Asset Model</label>
                                            <input type="text" class="form-control" id="inputAssetModel"
                                                placeholder="Enter Asset Model">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTaggingNo">Tagging No.</label>
                                            <input type="text" class="form-control" id="inputTaggingNo"
                                                placeholder="Enter Tagging #">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSerialNo">Serial No.</label>
                                            <input type="text" class="form-control" id="inputSerialNo"
                                                placeholder="Enter Serial #">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputComplainantName">Complainant Name</label>
                                            <input type="text" class="form-control" id="inputComplainantName"
                                                placeholder="Enter Complainant Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputComplainantEmail">Complainant Email</label>
                                            <input type="email" class="form-control" id="inputComplainantEmail"
                                                placeholder="Enter Complainant Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputComplainantPhoneNo">Complainant Phone No</label>
                                            <input type="text" class="form-control" id="inputComplainantPhoneNo"
                                                placeholder="Enter Complainant Phone #">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex">
                                    <div class="form-group">
                                        <label for="complaintDetails" class="block mb-2">
                                            Details
                                        </label>
                                        <br>
                                        <textarea id="complaintDetails" rows="4" class="form-control" placeholder="Leave a comment..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">
                                <i class="fas fa-ban mr-2"></i>
                                Cancel
                            </a>
                            <button class="btn btn-primary float-right" type="submit">
                                <i class="fas fa-save mr-2"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
