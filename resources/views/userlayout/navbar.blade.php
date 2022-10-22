<<<<<<< HEAD
<div id="page">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="social-grid">
                        <ul class="list-unstyled text-right">
                            <li><a><i class="fa fa-facebook"></i></a></li>
                            <li><a><i class="fa fa-twitter"></i></a></li>
                            <li><a><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-container">
        <div class="container">
            <div class="top-row">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div id="logo">
                            <img src="{{ asset('img/logo-kuburaya.png') }}" class="media-object" style="width: 21% ">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header page-scroll">
                                <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle"
                                    type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                <ul class="list-unstyled nav1 cl-effect-10">
                                    <li><a href="/" data-hover="Home"><span>Home</span></a></li>
                                    <li><a data-hover="Profile Desa" href="/profiledesa"><span>Profile Desa</span></a>
                                    </li>
                                    <li><a data-hover="Pemerintahan" href="/pemerintahan"><span>Pemerintahan</span></a>
                                    </li>
                                    <li><a data-hover="Peta" href="/peta"><span>Peta</span></a></li>
                                    <li><a data-hover="Tentang Desa" href="/about"><span>Tentang Desa</span></a></li>
                                    <li><a data-hover="Hubungi Kami" href="/contactus"><span>Hubungi Kami</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

{{-- <nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar">
     <div class="collapse navbar-collapse navbar-ex1-collapse">

         <ul class="nav navbar-nav">

             <li class="{{ Request::is('/') ? 'active' : '' }}">
                 <a href="/">Home</a>
             </li>

             <li class="{{ Request::is('profiledesa') ? 'active' : '' }}">
                 <a href="/profiledesa">Profile Desa</a>
             </li>

             <li class="{{ Request::is('pemerintahan') ? 'active' : '' }}">
                 <a href="/pemerintahan">Pemerintahan</a>
             </li>

             <li class="{{ Request::is('peta') ? 'active' : '' }}">
                 <a href="/peta">Peta</a>
             </li>

             <li class="{{ Request::is('about') ? 'active' : '' }}">
                 <a href="/about">About</a>
             </li>

         </ul>
     </div>
     <!-- /.navbar-collapse -->
 </nav> --}}
=======
<nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Sistem Informasi Geografi Potensi Desaa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
          <a href="/">Home</a>
        </li>
        <li class="{{ Request::is('about') ? 'active' : '' }}">
          <a href="/about">About</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
>>>>>>> 80f48fbd207e09a1822d319d93b78d15f0aa365f
