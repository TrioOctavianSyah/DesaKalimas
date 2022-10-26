@extends('adminlayout.layout')
@section('title')
    Manajemen Artikel Desa
@endsection
@section('header_title')
    <i class="nav-icon fas fa-newspaper"></i> Manajemen Artikel Desa Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/desa">Manajemen Artikel Desa</a></li>
    <li class="breadcrumb-item active"><a href="/admin/desa"></a>Detail Artikel Desa</li>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-15 col-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Data Artikel Desa</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_artikel">Judul Artikel</label>
                                <input type="text" class="form-control" name="nama_artikel"
                                    placeholder="Masukkan judul artikel" readonly value="{{ $artikel->nama_artikel }}">
                            </div>
                            <div class="form-group">
                                <label for="">Isi Artikel</label>
                                <textarea placeholder="Masukan isi artikel" name="isi_artikel" cols="30" rows="4" class="form-control"
                                    readonly>{{ $artikel->isi_artikel }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Masukkan nama author"
                                    readonly value="{{ $artikel->author }}">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar Artikel</label>
                                <div>
                                    <div class='col'>
                                        <img src="{{ asset('img/' . $artikel->gambar_artikel) }}" class="mb-3"
                                            style="border:solid #000 3px;height:60%;width:80%;" id="propic">
                                    </div>
                                </div>
                                <a href="/admin/artikel"><button type="button"
                                        class="btn btn-outline-success float-left mr-2"><i class="fas fa-backspace"></i>
                                        Kembali</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
