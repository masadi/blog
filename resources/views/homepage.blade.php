<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Homepage</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>

            <!-- Menu Homepage-->
            <menuhomepage> </menuhomepage>
            <main class="page-content">
                <div class="container-fluid">

                    <!-- Nested Routes -->
                    <router-view></router-view>

                </div>
                <section class="footers bg-light pb-3">
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 footers-one">
                                <div class="footers-logo">
                                    <p>Mas Adi</p>
                                </div>
                                <div class="footers-info">
                                    <p>Hanya blogger biasa. </p>
                                </div>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/achmadi.blogger/"><i id="social-fb" class="fab fa-facebook fa-2x social"></i></a>
                                    <a href="https://twitter.com/MasAdi_Bakid"><i id="social-tw" class="fab fa-twitter fa-2x social"></i></a>
                                    <a href="mailto:masadi.com@gmail.com"><i id="social-em" class="fas fa-envelope fa-2x social"></i></a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-2 footers-four">

                                <ul class="list-unstyled">
                                    <li><a href="#">Success item</a></li>
                                    <li><a href="#">Secondary item</a></li>
                                    <li><a href="#">Info item</a></li>
                                    <li><a href="#">Warning item</a></li>
                                    <li><a href="#">Danger item</a></li>
                                    <li><a href="#">Primary item</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2 footers-five">

                                <ul class="list-unstyled">
                                    <li><a href="#">Success item</a></li>
                                    <li><a href="#">Secondary item</a></li>
                                    <li><a href="#">Info item</a></li>
                                    <li><a href="#">Warning item</a></li>
                                    <li><a href="#">Danger item</a></li>
                                    <li><a href="#">Primary item</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>