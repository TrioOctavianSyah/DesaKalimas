@extends('adminlayout.layout')
@section('title')
Manajemen Potensi Desa
@endsection
@section('header_title')
<i class="nav-icon fas fa-th"></i> Manajemen Potensi Desa
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin/potensi/pasar"></a>Manajemen Pasar</li>
    <li class="breadcrumb-item active"><a href=""></a>Detail Pasar</li>
@endsection
@section('add_css')
<style>
    #map { height: 1085px; }
</style>
<link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
@endsection
@section('add_js')
<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#propic').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    $("#fotopasar").change(function() {
        readURL(this);
    });
</script>
<script>
    var lat = {!! json_encode($pasar->lat) !!};
    var lng = {!! json_encode($pasar->lng) !!};
    var cek = 0;
    let pathLine;

    var pasarIcon = L.icon({
        iconUrl: '/assets/marker/retail-stores.png',

        iconSize:     [20, 30], 
        iconAnchor:   [16, 32], 
        popupAnchor:  [0, -16] 
    });

    var mymap = L.map('map').setView([lat, lng], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: '&copy; SIG Desa 2021',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1Ijoid2h5dTkiLCJhIjoiY2tsYngwa3dzMWZueDJ3bXZ1OWt0NmN5ZSJ9.bofvis1MNPWTbjq-nIBjcg'
    }).addTo(mymap);

    L.Map.include({
        getMarkerById: function (id) {
            var marker = null;
            this.eachLayer(function (layer) {
                if (layer instanceof L.Marker) {
                    if (layer.options.id === id) {
                        marker = layer;
                    }
                }
            });
            return marker;
        }
    });

    mymap.pm.addControls({  
        position: 'topleft',
        drawCircle: false,
        drawMarker: false,
        drawCircleMarker:false,
        drawRectangle: false,
        drawPolyline: false,
        drawPolygon: false,
        dragMode:false,
        editMode: false,
        cutPolygon: false,
        removalMode: false,
    });

    function makePolygon(data){
        var c = [];
        for(i in data) {
            var x = data[i]['lat'];
            var y = data[i]['lng'];
            c.push([x, y]);
        }
        return c;
    }

        function loadDesa(){
            var myDesa = {!! json_encode($desa->toArray()) !!}
                myDesa.forEach(element => {
                    if($('#datadesa').val() == element['id']){
                        for(; Object.keys(mymap._layers).length > 1;) {
                            mymap.removeLayer(mymap._layers[Object.keys(mymap._layers)[1]]);
                        }
                        var koor = jQuery.parseJSON(element['batas_desa']);
                        var id = jQuery.parseJSON(element['id']);
                        var pathCoords = makePolygon(koor);
                        pathLine = L.polygon(pathCoords, {
                            id: element['id'],
                            color: element['warna_batas'],
                            fillColor: element['warna_batas'],
                            fillOpacity: 0.4,
                            nama: element['nama_desa'],
                        }).addTo(mymap);
                    }
            });            
        }
        loadDesa();

        function loadMarker(){
            var pasar = {!! json_encode($pasar) !!}
            var marker = L.marker([pasar.lat, pasar.lng],{icon: pasarIcon}).addTo(mymap);
            
            mymap.pm.addControls({
                editMode: false,
                drawMarker: false,
                removalMode: false,
            });
            marker.on('pm:edit', ({layer}) => {
                console.log(layer._latlng);
                $('#lat').val(layer._latlng.lat);
                $('#lng').val(layer._latlng.lng);
            });
            marker.on('pm:remove', ({layer}) => {
                $('#lat').val('');
                $('#lng').val('');
                mymap.pm.addControls({
                    editMode: false,
                    drawMarker: true,
                    removalMode: false,
                });
            });  
        }
        loadMarker();
</script>
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Map</h6>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pasar</h6>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="desa">Lokasi Desa</label>
                                <select class="form-control" data-live-search="true" id="datadesa" rows="3" name="desa" disabled>
                                  <option value="" >Pilih desa</option>
                                    @foreach ($desa as $d)
                                        <option value="{{$d->id}}" {{ $pasar->id_desa==$d->id ? 'selected' : '' }}>{{$d->nama_desa}}</option>
                                    @endforeach
                                </select>
                                <small style="color: red">
                                    @error('datadesa')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Foto Pasar</label>
                                <div>
                                    <div align="center" class='col'>
                                        <img src="{{asset('img/'.$pasar->foto)}}" class="mb-3" style="border:solid #000 3px;height:60%;width:80%;" id="propic">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pasar</label>
                                <input type="text" class="form-control" name="nama_pasar" placeholder="Masukkan nama Pasar" disabled value="{{$pasar->nama_pasar}}">
                                <small style="color: red">
                                    @error('nama_pasar')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Latitude</label>
                                <input type="text" class="form-control" name="lat" id="lat" readonly value="{{$pasar->lat}}">
                                <small style="color: red">
                                    @error('lat')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Longitude</label>
                                <input type="text" class="form-control" name="lng" id="lng" readonly value="{{$pasar->lng}}">
                                <small style="color: red">
                                    @error('lng')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div> 
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat pasar" disabled value="{{$pasar->alamat}}">
                                <small style="color: red">
                                    @error('alamat')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" class="form-control" name="telepon" placeholder="Masukkan telepon pasar" disabled value="{{$pasar->telepon}}">
                                <small style="color: red">
                                    @error('telepon')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea placeholder="Masukan Keterangan" name="keterangan" cols="30" rows="4" class="form-control" disabled>{{$pasar->keterangan}}</textarea>
                                <small style="color: red">
                                    @error('keterangan')
                                        {{$message}}
                                    @enderror
                                </small>
                            </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection