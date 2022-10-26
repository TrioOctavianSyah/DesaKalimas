@extends('adminlayout.layout')
@section('title')
    Manajemen Profile Desa
@endsection
@section('header_title')
    <i class="nav-icon fas fa-users"></i> Manajemen Profile Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/profile">Manajemen Profile Desa</a></li>
    <li class="breadcrumb-item active"><a href="/admin/profile"></a>Detail Profile Desa</li>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Profile Desa</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_profile">Nama Aparatur</label>
                                <input type="text" class="form-control" name="nama_profile"
                                    placeholder="Masukkan nama aparatur" readonly value="{{ $profile->nama_profile }}">
                            </div>
                            <div class="form-group">
                                <label for="">NIP Aparatur</label>
                                <input type="text" class="form-control" name="nip_aparatur"
                                    placeholder="Masukkan NIP Aparatur" readonly value="{{ $profile->nip_aparatur }}">
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan Aparatur</label>
                                <input type="text" class="form-control" name="jabatan_aparatur"
                                    placeholder="Masukkan jabatan aparatur" readonly
                                    value="{{ $profile->jabatan_aparatur }}">
                            </div>
                            <div class="form-group">
                                <label for="">Poto Aparatur</label>
                                <div>
                                    <div class='col'>
                                        <img src="{{ asset('img/' . $profile->poto_aparatur) }}" class="mb-3"
                                            style="border:solid #000 3px;height:60%;width:30%;" id="propic">
                                    </div>
                                </div>
                                <a href="/admin/profile"><button type="button"
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
