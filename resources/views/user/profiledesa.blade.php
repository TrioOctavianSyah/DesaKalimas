@extends('userlayout.layout')

@section('content')
    <div id="page">
        <section class="image-head-wrapper" style="background-image: url({{ asset('temp/images/banner5.jpg') }}">
            <div class="inner-wrapper">
                <h1>Profile Desa</h1>
            </div>
        </section>
        <div class="clearfix"></div>

        <section class="service-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/potensi-desa.png">
                            </div>
                            <h4><a href="#sejarah-desa">Sejarah Desa</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/struktur-organisasi.png">
                            </div>
                            <h4><a href="#statistik-kependudukan">Statistik Kependudukan</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/berita-desa.png">
                            </div>
                            <h4><a href="#apbdes">APBDes 2022</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/user.png">
                            </div>
                            <h4><a href="/contactus">Hubungi kami</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog">
            <div class="container">
                <div class="row">

                    <aside class="col-md-3 col-sm-4 col-xs-12">
                        <div class="blog-list">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#sejarah-desa"><i class="fa fa-caret-right"> </i>Sejarah Desa</a></li>
                                <li><a href="#statistik-kependudukan"><i class="fa fa-caret-right"> </i>Statistik
                                        Kependudukan</a></li>
                                <li><a href="#apbdpel"><i class="fa fa-caret-right"> </i>APBDes 2022 Pelaksanaan</a></li>
                                <li><a href="#apbdpen"><i class="fa fa-caret-right"> </i>APBDes 2022 Pendapatan</a></li>
                                <li><a href="#apbdpem"><i class="fa fa-caret-right"> </i>APBDes 2022 Pembelanjaan</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="blog-list">
                            <h4>Archives List</h4>
                            <ul>
                                <li><a><i class="fa fa-caret-right"> </i>July (15)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>Oct (20)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>November (8)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>December (25)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>August (9)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>July (15)</a></li>
                                <li><a><i class="fa fa-caret-right"> </i>Mar (25)</a></li>
                            </ul>
                        </div>

                        <div class="blog-list1">
                            <h4>Popular Posts</h4>
                            <div class="blog-list-top">
                                <div class="blog-img">
                                    <a><img class="img-responsive" src="images/Home/img1.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                    <span class="link">
                                        Sep 14, 2022
                                    </span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="blog-list-top">
                                <div class="blog-img">
                                    <a><img class="img-responsive" src="images/Home/img3.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                    <span class="link">
                                        Sep 14, 2022
                                    </span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="blog-list-top">
                                <div class="blog-img">
                                    <a><img class="img-responsive" src="images/Home/img4.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                    <span class="link">
                                        Sep 14, 2022
                                    </span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="blog-list-top">
                                <div class="blog-img">
                                    <a><img class="img-responsive" src="images/Home/img5.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <p><a>Lorem ipsum dolor sit amet, consectetuer</a></p>
                                    <span class="link">
                                        Sep 14, 2022
                                    </span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                    </aside>

                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <h2 class=""><a id="sejarah-desa" href="#">Sejarah Desa</a></h2>
                        <br>
                        <p class="user-info">Posted by <a>Admin</a> in <a>General</a> | <a>10 Comments</a></p>
                        <div class="blog-image-single margin-top-small">
                            <img src="temp/images/banner2.png" class="img-responsive">
                        </div>
                        <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do </p>

                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <h2><a id="statistik-kependudukan">Statistik Kependdukan</a></h2>
                        <br>
                        <p class="user-info">Posted by <a>Admin</a> in <a>General</a> | <a>10 Comments</a></p>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Dusun</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>KK</th>
                                    <th>L+P</th>
                                    <th>l</th>
                                    <th>P</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <h2><a id="apbdes">APBDes 2022</a></h2>
                        <br>
                        <p class="user-info">Posted by <a>Admin</a> in <a>General</a> | <a>10 Comments</a></p>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="..." alt="...">
                                    <div class="caption">
                                        <h3>APBDes 2022 Pelaksanaan</h3>
                                        <br>
                                        <p class="user-info">Pendapatan</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped"
                                                role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
