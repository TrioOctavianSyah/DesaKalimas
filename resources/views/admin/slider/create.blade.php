@extends('adminlayout.layout')
@section('title')
    Manajemen Slider Desa
@endsection
@section('header_title')
    <i class="nav-icon fas fa-sliders-h"></i> Manajemen Slider Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/potensi/slider">Manajemen Slider Desa</a></li>
    <li class="breadcrumb-item active"><a href="/admin/slider"></a>Tambah Data Slider Desa</li>
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
                            <h3 class="card-title">Form Data Slider Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('slider.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Masukkan Title"
                                        required value="{{ $errors->any() ? old('title') : '' }}">
                                    <small style="color: red">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Desc</label>
                                    <textarea placeholder="Masukan Desc" name="description" cols="30" rows="4" class="form-control" required>{{ $errors->any() ? old('description') : '' }}</textarea>
                                    <small style="color: red">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Slder</label>
                                    <div>
                                        <div align="center" class='col'>
                                            <img src="{{ asset('img/sekolah.jpg') }}" class="mb-3"
                                                style="border:solid #000 3px;height:60%;width:30%;" id="propic">
                                        </div>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="poto_slider" name="poto_slider"
                                            onchange="this.nextElementSibling.innerText = this.files[0].name">
                                        <label for="poto_slider" class="custom-file-label foto">.jpg/.png</label>
                                        <small style="color: red">
                                            @error('poto_slider')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" class="form-control" name="status" placeholder="status" required
                                        value="{{ $errors->any() ? old('status') : '' }}">
                                    <small style="color: red">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <span><button style="margin-right:4px" type="submit" class="btn btn-success float-left"><i
                                            class="fas fa-save"></i> Tambah Slider </button></span>
                                <a href="/admin/slider"><button type="button" class="btn btn-danger float-left mr-2"><i
                                            class="fas fa-times"></i> Kembali</button></a>
                            </form>
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
