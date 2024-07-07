@extends('layout')

@section('title', 'About Us')

@section('content')
    <style>
        #map {
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #map iframe {
            border-radius: 10px;
        }

        .text {
            display: block;
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            text-align: center;
            min-height: 180px;
        }
    </style>

    <main>
        <div id="map">
            <div style="text-align: center; margin-bottom: 20px;">
                <h2>About Us</h2>
                <p style="font-weight: 500">KATBAG adalah produsen tas yang merancang, memproduksi, dan mendistribusikan tas dari workshop kami kepada konsumen. Selain menjual tas secara retail dengan brand KATBAG, kami juga menerima pembuatan tas secara kustom untuk keperluan souvenir, merchandise, atau hampers.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hubungi Kami</h5>
                            <p class="card-text">Kami tersedia melalui WhatsApp untuk pertanyaan atau pesanan Anda.</p>
                            <a href="https://wa.me/6287783005612" target="_blank" class="btn btn-success">Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ikuti Kami</h5>
                            <p class="card-text">Ikuti akun Instagram kami untuk update terbaru dan inspirasi.</p>
                            <a href="https://www.instagram.com/katbagoficial" target="_blank" class="btn btn-primary">Follow on Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <h3 style="text-align: center; margin-bottom: 20px; margin-top: 20px;">Our Location</h3>
            <span class="text" style="text-align: center;">
                Jl. Rajawali D4/1 Griya Cinere 1
            </span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2571879852394!2d106.77939529999999!3d-6.3607497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eed85555554b%3A0x455e8775075f8a05!2sKATBAG!5e0!3m2!1sid!2sid!4v1719125440873!5m2!1sid!2sid" width="100%" height="450" style="margin-top: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
@endsection



