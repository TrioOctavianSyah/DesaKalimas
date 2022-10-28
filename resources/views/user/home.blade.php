@extends('userlayout.layout')

@section('content')
    <div id="page">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"> <img src="temp/images/banner5.jpg" style="width:100%; height: 500px"
                        alt="First slide">
                    <div class="carousel-caption">
                        <h1>Text 1 <br> Text 2</h1>
                    </div>
                </div>
                <div class="item"> <img src="temp/images/banner5.jpg" style="width:100%; height: 500px"
                        alt="Second slide">
                    <div class="carousel-caption">
                        <h1>Text 1<br> Text 2</h1>
                    </div>
                </div>
                <div class="item"> <img src="temp/images/banner5.jpg" style="width:100%; height: 500px" alt="Third slide">
                    <div class="carousel-caption">
                        <h1>Text 1<br> Text 2</h1>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img
                    src="temp/images/icons/left-arrow.png" onmouseover="this.src = 'temp/images/icons/left-arrow-hover.png'"
                    onmouseout="this.src = 'temp/images/icons/left-arrow.png'" alt="left"></a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img
                    src="temp/images/icons/right-arrow.png"
                    onmouseover="this.src = 'temp/images/icons/right-arrow-hover.png'"
                    onmouseout="this.src = 'temp/images/icons/right-arrow.png'" alt="right"></a>

        </div>
        <div class="clearfix"></div>

        <section class="service-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/potensi-desa.png">
                            </div>
                            <h4><a href="#tentang-desa">Potensi Desa</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/struktur-organisasi.png">
                            </div>
                            <h4><a href="#struktur-organisasi">Struktur Organisasi</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="temp/images/icons/berita-desa.png">
                            </div>
                            <h4><a href="#berita-desa">Berita desa</a></h4>
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

        <section class="vacation-offer-block">
            <div class="product-desc-side">
                <h3><a id="tentang-desa" href=""></a>Potensi Desa</h3>
            </div>
            <div class="vacation-offer-bgbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="vacation-offer-details">
                                <h1>Peta Desa</h1>
                                <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                                <a href="/peta"><button type="button" class="btn btn-default">lihat peta</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="resort-overview-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a><img src="temp/images/banner5.jpg" class="img-responsive" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <h3><a>SDM dan SDA Desa</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus
                                    non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a><img alt="image" class="img-responsive" src="temp/images/banner5.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <h3><a>Ekonomi Desa</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus
                                    non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Rumah Ibadah</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus
                                    non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb">
                                <div class="image txt-rgt">
                                    <a class="arrow-left"><img src="temp/images/banner5.jpg" class="img-responsive"
                                            alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Sarana Pendidikan</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus
                                    non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="temp/images/banner5.jpg" class="img-responsive"
                                            alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </section>

        <section class="blog-block-slider">
            <div class="product-desc-side">
                <h3><a id="struktur-organisasi" href=""></a>Struktur Organisasi</h3>
            </div>
            <div class="blog-block-slider-fix-image">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <div class="container">
                        <!-- Wrapper for slides -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="blog-box">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only</p>
                                </div>
                                <div class="blog-view-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/logo-kuburaya.png" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title">Nama</h3>
                                            <h5 class="blog-rev">Kepala Desa Kalimas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-box">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry's standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only</p>
                                </div>
                                <div class="blog-view-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/logo-kuburaya.png" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title">Nama</h3>
                                            <h5 class="blog-rev">Sekretaris Desa Kalimas</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>

        <section class="gallery-block gallery-front">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="temp/images/banner5.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="temp/images/banner5.jpg"
                                    data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Aparatur Desa</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="temp/images/banner5.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="temp/images/banner5.jpg"
                                    data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Badan Permusyawaratan Desa</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="temp/images/banner5.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="temp/images/banner5.jpg"
                                    data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Pemberdayaan Kesejahteraan Keluarga</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="temp/images/banner5.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="temp/images/banner5.jpg"
                                    data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>puskesdes</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-block">
            <div class="product-desc-side">
                <h3><a id="berita-desa" href=""></a>Berita Desa</h3>
            </div>

            <div class="container">

                @forelse ($artikel as $artikel)
                    <div class="row offspace-45">
                        <div class="view-set-block">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-blog-image">
                                    <img alt="image" class="img-responsive" src="img/{{ $artikel->gambar_artikel }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                                <div class="event-blog-details">
                                    <h4><a href="#berita-desa">{{ $artikel->nama_artikel }}</a></h4>
                                    <h5>Author : {{ $artikel->author }} &nbsp; &nbsp;
                                        {{ date('d-m-Y', strtotime($artikel->created_at)) }}</h5>
                                    <p>{{ $artikel->isi_artikel }}</p>
                                    <a class="btn btn-default" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>Proses Maintanance</h2>
                @endforelse


            </div>
        </section>
    </div>
@endsection
