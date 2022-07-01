<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="{{ $description }}" />
    <meta name="author" content="" />

    <title>РЕМТЕХСЕРВИС :: {{ $title }}</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
          rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
</head>

<body>
<!-- header section strats -->
<header class="header_section sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('home')}}">
                <div class="logo_box">
                    <div class="div_logo">
                        <img src="{{asset('storage/images/logo_white.png')}}" alt="РЕМТЕХСЕРВИС" />
                    </div>
                    <div class="div_mh">
                        <span class="company_name">РЕМТЕХСЕРВИС</span><br><span class="middle_header">Технологическое оборудование</span>
                    </div>

                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-2">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gallery')}}">Галерея</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</header>
<!-- end header section -->

@yield('content')
<!-- info section -->
<section class="info_section layout_padding">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 info_detail">
                <div>
                    <p>
                        Производим специальное технологическое оборудование, такое как: транспортеры, ванны, противня, фризеры, головорубы, телеги, производственные(технологические) столы. А также отдельные элементы механизмов производства технологической продукции.
                    </p>
                </div>
            </div>
            <div class=" col-md-4 address_container">
                <div>
                    <h3>
                        Адрес:
                    </h3>
                    <div class="address_link-container">
                        <a href="https://yandex.ru/maps/20154/kola/?from=api-maps&ll=33.083103%2C68.883029&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Ad98d77fa09da32c0cbc45229e2084c6c911adc028c54a4058dd2c4187b014990&z=16">
                            <img src="{{asset('storage/images/location.png')}}" alt="Адрес ООО «РЕМТЕХСЕРВИС»">
                            <span> Кола, Кильдинское шоссе 18б
                </span>
                        </a>
                        <a href="tel:+79217247351">
                            <img src="{{asset('storage/images/phone.png')}}" alt="Телефон ООО «РЕМТЕХСЕРВИС»">
                            <span> Тел: +7 (921) 724-73-51
                </span>
                        </a>
                        <a href="mailto:rts-murmansk@rambler.ru">
                            <img src="{{asset('storage/images/mail.png')}}" alt="Эл. почта ООО «РЕМТЕХСЕРВИС»">
                            <span>
                  Эл. почта: rts-murmansk@rambler.ru
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-md-4 news_container">
                <div>
                    <div>
                        <h3>
                            Написать вам:

                        </h3>
                        <form action="">
                            <input type="email" placeholder="Введите свою почту">
                            <div>
                                <button type="submit">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="social_container">
                        <div>
                            <a href="https://wa.me/79512975469">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                        <div>
                            <a href="https://t.me/mazurkonacoco">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </div>
                        <div>
                            <a href="viber://chat?number=%2B79512975469">
                                <i class="fa-brands fa-viber"></i>
                            </a>
                        </div>
                        <div>

                        </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->
<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        Copyright &copy; 2022 ООО «РЕМТЕХСЕРВИС»
    </p>
</section>
<!-- footer section -->






</body>

</html>

