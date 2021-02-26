@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container pt-5" id="contact">
            <div class="header-section text-center">
                <h2>Kontak</h2>
                <p class="mt-3 mb-0">Halo, Kami tersedia 24/7 melalui email atau telepon. Kirimkan kami antrean agar kami dapat membicarakannya lebih lanjut.</p>
            </div>
        </div>
    <!-- contact-form -->
    <section class="w3l-contact">
        <div class="contact-infubd py-5">
        <div class="container py-lg-3">
            <div class="contact-grids row">
            <div class="col-lg-6 contact-left">
                <div class="partners">
                <div class="cont-details">
                    <h6 class="mb-4">Untuk info lebih lanjut atau pertanyaan tentang kami jangan ragu untuk menghubungi kami</h6>
                </div>
                <div class="hours">
                    <h6 class="mt-4">Email:</h6>
                    <p> <a href="mailto:example@mail.com">
                    example@mail.com</a></p>
                    <!-- <p> <a href="mailto:support@mail.com">
                    support@mail.com</a></p> -->
                    <h6 class="mt-4">Alamat:</h6>
                    <p>Jl. Pendidikan, Sudiang, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan, 90242, Indonesia</p>
                    <h6 class="mt-4">Telepon:</h6>
                    <p class="margin-top"><a href="tel:(0411) 554833">
                        (0411) 554833 </a></p>
                    <p class="margin-top"><a href="08**********">
                        08********** </a></p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                <div class="input-grids">
                    <div class="form-group">
                    <input type="text" name="w3lName" id="w3lName" placeholder="Nama*" class="contact-input" />
                    </div>
                    <div class="form-group">
                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" class="contact-input" required="" />
                    </div>
                    <div class="form-group">
                    <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subjek*" class="contact-input" />
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="w3lMessage" id="w3lMessage" placeholder="Isi Pesan Disini*" required=""></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary theme-button">Kirim</button>
                </div>
                </form>
            </div>
    
            </div>
            <div class="map mt-5 pt-md-5">
            <h5>Lokasi Kami</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31793.010104107034!2d119.50813531779612!3d-5.083273263875573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefb931bffd341%3A0xd264db2e43f3808c!2sSudiang%2C%20Kec.%20Biringkanaya%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1606310356968!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <!-- /contact-form -->
    </div>
</section>
<!-- //features -->
@endsection