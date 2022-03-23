<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}

<script type="text/javascript">
    $(function() {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('complaints.list') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'complaint_isd_code',
                    name: 'complaint_isd_code'
                },
                {
                    data: 'school.school_code',
                    name: 'school.school_code'
                },
                {
                    data: 'school.school_name',
                    name: 'school.school_name'
                },
                {
                    data: 'asset_model',
                    name: 'asset_model'
                },
                {
                    data: 'tagging_no',
                    name: 'tagging_no'
                },
                {
                    data: 'serial_no',
                    name: 'serial_no'
                },
                {
                    data: 'complainant_name',
                    name: 'complainant_name'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
    });
</script>
