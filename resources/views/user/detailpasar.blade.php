@extends('userlayout.layout')
@section('add_css')
    <style>
        #map {
            height: 400px;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
@endsection

@section('add_js')
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script>
        var lat = {!! json_encode($pasar->lat) !!};
        var lng = {!! json_encode($pasar->lng) !!};
        var cek = 0;
        let pathLine;

        var pasarIcon = L.icon({
            iconUrl: '/assets/marker/retail-stores.png',

            iconSize: [20, 30],
            iconAnchor: [16, 32],
            popupAnchor: [0, -16]
        });

        var mymap = L.map('map').setView([lat, lng], 14);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: '&copy; Desa Kalimas 2022',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2h5dTkiLCJhIjoiY2tsYngwa3dzMWZueDJ3bXZ1OWt0NmN5ZSJ9.bofvis1MNPWTbjq-nIBjcg'
        }).addTo(mymap);

        L.Map.include({
            getMarkerById: function(id) {
                var marker = null;
                this.eachLayer(function(layer) {
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
            drawCircleMarker: false,
            drawRectangle: false,
            drawPolyline: false,
            drawPolygon: false,
            dragMode: false,
            editMode: false,
            cutPolygon: false,
            removalMode: false,
        });

        function makePolygon(data) {
            var c = [];
            for (i in data) {
                var x = data[i]['lat'];
                var y = data[i]['lng'];
                c.push([x, y]);
            }
            return c;
        }

        function loadDesa() {
            var myDesa = {!! json_encode($desa->toArray()) !!}
            myDesa.forEach(element => {
                if (({!! json_encode($pasar->id_desa) !!}) == element['id']) {
                    for (; Object.keys(mymap._layers).length > 1;) {
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

        function loadMarker() {
            var pasar = {!! json_encode($pasar) !!}
            var marker = L.marker([pasar.lat, pasar.lng], {
                icon: pasarIcon
            }).addTo(mymap);

            mymap.pm.addControls({
                editMode: false,
                drawMarker: false,
                removalMode: false,
            });
            marker.on('pm:edit', ({
                layer
            }) => {
                console.log(layer._latlng);
                $('#lat').val(layer._latlng.lat);
                $('#lng').val(layer._latlng.lng);
            });
            marker.on('pm:remove', ({
                layer
            }) => {
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
    <div class="page">
        <div class="container">
            <div class="col-xs-12 col-md-3">
                <div class="well">
                    <div class="divider10"></div>
                    <div class="hidden-xs hidden-sm">
                        <h4 style="margin-top: -10px" align="center">Pasar lainnya</h4>
                        <br>
                        <div class="tab-content">
                            <div class="tab-pane active" id="other">
                                <div class="list-group">
                                    @forelse($list as $l)
                                        @if ($l->id == $pasar->id)
                                        @else
                                            <a href="/loadDataPasar/{{ $l->id }}" data-toggle="modal"
                                                class="list-group-item ">
                                                <h4 class="list-group-item-heading"><i class="fas fa-balance-scale"></i>
                                                    {{ $l->nama_pasar }}</h4>
                                                <p class="list-group-item-text">
                                                    Alamat: {{ $l->alamat }}
                                                </p>
                                            </a>
                                        @endif
                                    @empty
                                        <a href="#point-info-modal" data-toggle="modal" class="list-group-item ">
                                            <h4 class="list-group-item-heading">Another Place #1</h4>
                                            <p class="list-group-item-text">
                                                Tidak Ada Data
                                            </p>
                                        </a>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-9">
                <div class="row point-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 align="center">{{ $pasar->nama_pasar }}</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="row point-info">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <img src="{{ asset('img/' . $pasar->foto) }}" class="mb-3"
                                                    style="border:solid #000 3px;width:100%;" id="propic">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="row point-info">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div id="map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row point-info">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>
                                                <strong>Keterangan</strong>
                                                <br>
                                                {{ $pasar->keterangan }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row point-info">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <address>
                                                <strong>Alamat</strong>
                                                <br>
                                                {{ $pasar->alamat }}
                                            </address>
                                            <address>
                                                <strong>Telepon</strong>
                                                <br>
                                                {{ $pasar->telepon }}
                                            </address>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
