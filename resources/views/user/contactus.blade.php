@extends('userlayout.layout')

@section('content')
    <div id="page">
        <section class="image-head-wrapper" style="background-image: url({{ asset('temp/images/banner4.jpg') }}">
            <div class="inner-wrapper">
                <h1>Hubungi Kami</h1>
            </div>
        </section>
        <div class="clearfix"></div>

        <section class="contact-block">
            <div class="container">
                <div class="col-md-6 contact-left-block">
                    <h3><span>Hubungi </span>Kami</h3>
                    <p class="text-left">Nulla pharetra eleifend tellus in molestie. In vel neque sit amet urna gravida
                        blandit
                        nec id massa. Phasellus eu aliquet augue. Quisque fringilla urna quam.</p>
                    <p class="text-right">701 Old York Drive Richmond USA. <i class="fa fa-map-marker fa-lg"></i></p>
                    <p class="text-right"><a href="tel:+1-202-555-0100"> +1-202-555-0100 <i
                                class="fa fa-phone fa-lg"></i></a>
                    </p>
                    <p class="text-right"><a href="mailto:demo@info.com"> demo@info.com <i class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <div class="col-md-6 contact-form">
                    <h3>Kirim <span>Pesan</span></h3>
                    <form action="#" method="post">
                        <input type="text" class="form-control" name="Name" placeholder="Nama" required="">
                        <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                        <textarea class="form-control" name="Message" placeholder="Tuliskan Pesan Disini...." required=""></textarea>
                        <input type="submit" class="submit-btn" value="Kirim Pesan">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
    </div>
@endsection
