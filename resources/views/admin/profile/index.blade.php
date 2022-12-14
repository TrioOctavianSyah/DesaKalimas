@extends('adminlayout.layout')
@section('title')
    Manajemen Profile Desa
@endsection
@section('header_title')
    <i class="nav-icon fas fa-users"></i> Manajemen Profile Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/profile">Manajemen Profile Desa</a></li>
    <li class="breadcrumb-item active"><a href="/admin/profile"></a>Index</li>
@endsection
@section('add_css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('add_js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xs-12 col-md-12">
                    <div class="card">
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{!! Session::get('error') !!}</div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check"></i> {{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">List Data Profile Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <span><a href="/admin/profile/create" class="btn btn-success mb-4"><i class="fas fa-plus"></i>
                                    Tambah Data Profile Desa</a></span>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Aparatur Desa</th>
                                        <th>Poto Aparatur</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profile as $k)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $k->nama_profile }}</td>
                                            <td><img src="{{ asset('img/' . $k->poto_aparatur) }}" alt="gambar aparatur"
                                                    style="width: 50%">
                                            </td>
                                            <td width="20%" align="center">
                                                <div class="d-flex align-items-center">
                                                    <a style="margin-right:7px" href="{{ route('profile.show', $k->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                                    <a style="margin-right:7px" class="btn btn-info btn-sm"
                                                        href="{{ route('profile.edit', $k->id) }}"><i
                                                            class="fas fa-pencil-alt"></i> Edit</a>
                                                    <form action="{{ route('profile.destroy', $k->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Delete entry?')"><i
                                                                class="fa fa-trash"></i> Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
