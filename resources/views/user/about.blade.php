@extends('userlayout.layout')
@section('content')
    <div id="page">
        <section class="image-head-wrapper" style="background-image: url({{ asset('temp/images/banner3.jpg') }}">
            <div class="inner-wrapper">
                <h1>Tentang Desa</h1>
            </div>
        </section>
        <div class="clearfix"></div>


        <section class="about-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 about-left">
                        <p>Lorem <label>ipsum</label> dol <span>-sitamet</span></p>
                    </div>
                    <div class="col-md-7 about-right">
                        <h3>Lorem ipsum dolor sit amet, consec</h3>
                        <p>Donec bibendum massa metus, vel aliquet nunc varius eu. Curabitur nec scelerisque dui. Quisque
                            mattis libero et enim ultricies gravida. Nulla ut commodo massa, eget tincidunt ligula. Vivamus
                            eu ante tincidunt, fermentum risus nec, pharetra turpis. Donec rhoncus eros sed felis aliquet
                            tincidunt. In consectetur tempor quam</p>
                        <ul class="list-unstyled list-inline">
                            <li>Sed vitae facilisis nisi, in finibus lacus. Duis vel nulla orci.</li>
                            <li>fringilla, at ultrices felis dignissim. Integer ultricies posuere odio</li>
                            <li>Sed vestibulum mattis laoreet. Donec sollicitudin justo luctus nulla consectetur</li>
                            <li>Nam dolor tellus, dictum sit amet libero eu, semper placerat massa.</li>
                            <li>consectetur tempor quam, aliquam dignissim diam hendrerit nec. Cras sodales at nisl</li>
                        </ul>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>
    </div>

    {{-- <div class="container">
        <div class="jumbotron">
            <div class="container">
                <img style="display: block;margin-left: auto;margin-right: auto;width: 20%;border:solid #000 3px;"
                    src="{{ asset('img/untan.png') }}" class="mb-3" id="propic">
                <h1 align="center"><b>Sistem Informasi Potensi Desa Kalimas</b></h1>

                <p align="center">
                    Developed by Universitas Tanjungpura.
                </p>
                <p align="center">
                    <a style="background-color: black;color:white;" class="btn" href="https://github.com/Whyu9-9"
                        target="_blank"><i class="fab fa-github"></i> My Github</a>
                </p>
                <br>
                <div class="col-xs-12">
                    <div class="row point-info">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 align="center">Technology Used</h3>
                            </div>
                            <div class="panel-body">
                                <table align="center" style="width: 60%" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Technology</th>
                                            <th scope="col">Version</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Laravel (Backend Framework)</td>
                                            <td>9.32.0</td>
                                        </tr>
                                        <tr>
                                            <td>jQuery</td>
                                            <td>1.10.2</td>
                                        </tr>
                                        <tr>
                                            <td>Bootstrap</th>
                                            <td>4.0</td>
                                        </tr>
                                        <tr>
                                            <td>Mapbox</th>
                                            <td>2.2.0</td>
                                        </tr>
                                        <tr>
                                            <td>Geoman</th>
                                            <td>2.11.1</td>
                                        </tr>
                                        <tr>
                                            <td>Leaflet</th>
                                            <td>1.7.1</td>
                                        </tr>
                                        <tr>
                                            <td>Admin LTE(Admin Dashboard)</th>
                                            <td>3.0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
