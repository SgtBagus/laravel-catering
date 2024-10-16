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
                    Disini Dashboard nya Customer
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
@endpush
