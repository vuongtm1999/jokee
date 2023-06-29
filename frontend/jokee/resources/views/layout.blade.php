<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Styles Normali -->
    <style href="{{ asset('/asset/normalize.css') }}"></style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        :root {
            --bs-success-rgb: 41, 179, 99;
        }

        .btn-success {
            --bs-btn-bg: #29B363;
            --bs-btn-border-color: #29B363;
        }

        .btn-primary {
            --bs-btn-bg: #2C7EDB;
            --bs-btn-border-color: #2C7EDB;
        }

        .bg-joke {
            background-color: #FCFCFC;
        }

        .separate::after {
            content: "";
            height: 1px;
            width: 65%;
            background-color: #f1eded;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
        }

        .px-6 {
            padding-right: 1vw;
            padding-left: 1vw;
        }

        @media (min-width: 768px) {
            .px-6 {
                padding-right: 7vw;
                padding-left: 7vw;
            }
        }

        @media (min-width: 1400px) {
            .px-6 {
                padding-right: 12vw;
                padding-left: 12vw;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row px-6 bg-white">
            <div class="col-6">
                <img src="{{ asset('/image/logo.png') }}" alt="lo go">
            </div>
            <div class="col-6">
                <div class="d-flex align-items-center justify-content-end">
                    <div>
                        <div class="fst-italic fw-lighter">Handcrafted by</div>
                        <div class="fw-bold">Jim HLS</div>
                    </div>
                    <div>
                        <img src="{{ asset('/image/avatar.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-success text-center">
            <div class="py-5 my-4">
                <h3 class="text-white fw-bold">A joke a day keeps the doctor away</h3>
                <span class="text-white">If you joke wrong way, your teeth have to pay. (Serious)</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @yield('content')
    </div>
    <div class="container-fluid border-top">
        <div class="row px-6 py-5">
            <p class="text-center text-black-50">
                This website is created as part of Hlsolutions program. The materials contained on this website are
                provided for general
                information only and do not constitute any form of advice. HLS assumes no responsibility for the
                accuracy of any particular statement and
                accepts no liability for any loss or damage which may arise from reliance on the information contained
                on this site.
            </p>
            <p class="text-center fw-bold text-black-50">
                Copyright 2021 HLS
            </p>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>
