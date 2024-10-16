@extends('dashboard.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>15</h3>

                    <p>Total Pengajuan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-table"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>12</h3>

                    <p>Total Kendaraan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-car"></i>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>
@endpush
