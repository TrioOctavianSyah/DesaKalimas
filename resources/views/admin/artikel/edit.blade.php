@extends('adminlayout.layout')
@section('title')
    Manajemen Artikel Desa
@endsection
@section('header_title')
    <i class="nav-icon fas fa-newspaper"></i> Manajemen Artikel Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/artikel">Manajemen Artikel Desa</a></li>
    <li class="breadcrumb-item active"><a href="/admin/artikel"></a>Edit Data Artikel Desa</li>
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
                            <h3 class="card-title">Form Data Artikel Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('artikel.update', $artikel->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="">Nama Artikel</label>
                                    <input type="text" class="form-control" name="nama_artikel"
                                        placeholder="Masukkan nama artikel" required value="{{ $artikel->nama_artikel }}">
                                    <small style="color: red">
                                        @error('nama_artikel')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Artikel</label>
                                    <textarea placeholder="Masukan Artikel" name="isi_artikel" cols="30" rows="4" class="form-control" required>{{ $errors->any() ? old('isi_artikel') : '' }}</textarea>
                                    <small style="color: red">
                                        @error('isi_artikel')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Artikel</label>
                                    <div>
                                        <div align="center" class='col'>
                                            <img src="{{ asset('img/sekolah.jpg') }}" class="mb-3"
                                                style="border:solid #000 3px;height:60%;width:30%;" id="propic">
                                        </div>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="poto_artikel"
                                            name="poto_artikel"
                                            onchange="this.nextElementSibling.innerText = this.files[0].name">
                                        <label for="poto_artikel" class="custom-file-label foto">.jpg/.png</label>
                                        <small style="color: red">
                                            @error('poto_artikel')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="Author" required
                                        value="{{ $errors->any() ? old('author') : '' }}">
                                    <small style="color: red">
                                        @error('author')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <span><button style="margin-right:4px" type="submit" class="btn btn-primary float-left"><i
                                            class="fas fa-save"></i> Edit Artikel</button></span>
                                <a href="/admin/artikel"><button type="button" class="btn btn-danger float-left mr-2"><i
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
