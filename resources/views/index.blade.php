@extends('layouts.layout')

@push('css')
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    sdsd
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('/') }}plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


    <script src="{{ asset('/') }}plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="{{ asset('/') }}plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('/') }}plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}plugins/daterangepicker/daterangepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            $('#reservation').daterangepicker();
            $('#customCheckbox1').click(function() {
                $('#last-mount-date-input').prop("disabled", this.checked).val("156289");
            });

            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    role: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Tidak Boleh Kosong",
                    },
                    email: {
                        required: "Tidak Boleh Kosong",
                    },
                    role: {
                        required: "Tidak Boleh Kosong",
                    },
                    password: {
                        required: "Tidak Boleh Kosong",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endpush
