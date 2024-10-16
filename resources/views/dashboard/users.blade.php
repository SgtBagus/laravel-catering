@extends('dashboard.layouts.layout')
{{-- @include('sweetalert::alert') --}}

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
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Usaha</th>
                        <th>Alamat</th>
                        <th>Telphone</th>
                        <th>Deskripsi</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Dibuat</th>
                        <th>Diupdate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->index+1}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->company_name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->desc }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                @if ($data->role == 'admin')
                                    <span class="badge bg-primary">Admin</span>
                                @else
                                    <span class="badge bg-success">Customer</span>
                                @endif
                            </td>
                            <td>{{ date_format(date_create($data->created_at), 'd M Y H:i:s') }}</td>
                            <td>{{ date_format(date_create($data->updated_at), 'd M Y H:i:s') }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-{{ $data->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-id={{ $data->id }}>
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>

                                <div class="modal fade" id="modal-{{ $data->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit - {{{ $data->name }}}</h4>
                                            </div>
                                            <form action="{{ route('users.update', $data->id) }}" id="quickForm" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" name="name" class="form-control" placeholder="Nama Pengguna" value="{{ $data->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Name Usaha</label>
                                                                <input type="text" name="company_name" class="form-control" placeholder="Nama Usaha" value="{{ $data->company_name }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <textarea
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Alamat"
                                                                    name="address"
                                                                    class="form-control"
                                                                    rows="6"
                                                                >{{ $data->address }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Telephone</label>
                                                                <input type="text" name="contact" class="form-control" placeholder="Telephone" value="{{ $data->contact }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Deskripsi</label>
                                                                <textarea
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Deskripsi"
                                                                    name="desc"
                                                                    class="form-control"
                                                                    rows="6"
                                                                >{{ $data->desc }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Role :</label>
                                                            <select class="form-control select2bs4" name="role" style="width: 100%;">
                                                                <option value="admin"
                                                                    {{ $data->role === 'admin' ? 'selected' : '' }}> Admin
                                                                </option>
                                                                <option value="customer"
                                                                    {{ $data->role === 'customer' ? 'selected' : '' }}> Customer
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
    <script src="{{ asset('/') }}plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('/') }}plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.print.min.js"></script>


    <script src="{{ asset('/') }}plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="{{ asset('/') }}plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('/') }}plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}plugins/daterangepicker/daterangepicker.js"></script>

    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

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
                    company_name: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    contact: {
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
                    company_name: {
                        required: "Tidak Boleh Kosong",
                    },
                    address: {
                        required: "Tidak Boleh Kosong",
                    },
                    contact: {
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

            $('.btn-delete').click(function() {
                Swal.fire({
                    title: 'Anda Yakin Ingin menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).attr('data-id');

                        $.ajax({
                            type: 'DELETE',
                            url: "{{ url('/admin/users/delete/') }}" + id,
                            dataType: 'JSON',
                            data: {
                                'id': id,
                                '_token': '{{ csrf_token() }}',
                            },
                            success: function(data) {
                                if (data.success) {
                                    swal.fire({
                                        title: "Terhapus!",
                                        text: "Data Tersebut Berhasil di Hapus!",
                                        icon: "success",
                                    }).then(function() {
                                        location.reload();
                                    });
                                }
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'GAGAL!',
                                    'Terjadi Kesalahan',
                                    'error'
                                )
                            }
                        });
                    }
                })
            });
        });
    </script>
@endpush
