require('./bootstrap');
require('admin-lte');
require('jquery');
require("datatables.net-bs4");
require("datatables.net-buttons-bs4");
require("datatables.net-fixedheader-bs4");
require("datatables.net-responsive-bs4");
require("datatables.net-rowgroup-bs4");
require("datatables.net-rowreorder-bs4");

// JS
$(document).ready(function() {
    
});

// JQuery
jQuery(document).ready(function($) {
    $(function () {
        var table = $(".complaints-datatable").DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            order: [[0, "desc"]],
            rowReorder: {
                selector: "td:nth-child(2)",
            },
            ajax: route("complaints.list"),
            columns: [
                {
                    data: "created_at",
                    name: "created_at",
                },
                {
                    data: "updated_at",
                    name: "updated_at",
                },
                {
                    data: "status",
                    name: "status",
                },
                {
                    data: "complaint_isd_code",
                    name: "complaint_isd_code",
                },
                {
                    data: "school.school_code",
                    name: "school.school_code",
                },
                {
                    data: "school.school_name",
                    name: "school.school_name",
                },
                {
                    data: "asset_model",
                    name: "asset_model",
                },
                {
                    data: "tagging_no",
                    name: "tagging_no",
                },
                {
                    data: "serial_no",
                    name: "serial_no",
                },
                {
                    data: "complainant_name",
                    name: "complainant_name",
                },
                {
                    data: "complainant_email",
                    name: "complainant_email",
                },
                {
                    data: "complainant_phone",
                    name: "complainant_phone",
                },
                {
                    data: "complaint_details",
                    name: "complaint_details",
                },
                {
                    data: "action",
                    name: "action",
                    orderable: true,
                    searchable: true,
                },
            ],
            language: {
                lengthMenu: "Papar _MENU_ rekod setiap muka surat",
                zeroRecords: "Tiada maklumat dijumpai",
                info: "Memapar muka surat _PAGE_ / _PAGES_",
                infoEmpty: "Tiada rekod dijumpai",
                infoFiltered: "(ditapis daripada _MAX_ jumlah rekod)",
                paginate: {
                    first: "Pertama",
                    last: "Akhir",
                    next: "Seterus",
                    previous: "Sebelum",
                },
            },
        });
    });

    $(function () {
        var table = $(".schools-datatable").DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: route("schools.list"),
            columns: [
                {
                    data: "id",
                    name: "id",
                },
                {
                    data: "school_name",
                    name: "school_name",
                },
                {
                    data: "school_code",
                    name: "school_code",
                },
                {
                    data: "action",
                    name: "action",
                    orderable: true,
                    searchable: true,
                },
            ],
            language: {
                lengthMenu: "Papar _MENU_ rekod setiap muka surat",
                zeroRecords: "Tiada maklumat dijumpai",
                info: "Memapar muka surat _PAGE_ / _PAGES_",
                infoEmpty: "Tiada rekod dijumpai",
                infoFiltered: "(ditapis daripada _MAX_ jumlah rekod)",
                paginate: {
                    first: "Pertama",
                    last: "Akhir",
                    next: "Seterus",
                    previous: "Sebelum",
                },
            },
        });
    });
});