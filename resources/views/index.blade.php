@extends('layouts.layout')

@section('content')
  <!-- slider section -->
  <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
            <div class="slider-detail">
              <div class="slider_detail-heading">

                  <h1>
                      Прозводство нестандартного технологического оборудования
                  </h1>
              </div>

              <div class="slider_detail-btn">
                <a href="{{route('gallery')}}">
                  <span>
                    Наши работы
                  </span>
                  <img src="{{asset("storage/images/arrow.png")}}" alt="Перейти в галерею работ" class="ml-2" />
                </a>
              </div>
            </div>
              <div class="slider-img slider-img1"></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box slider_box2">
            <div class="slider-detail">
              <div class="slider_detail-heading">

                <h1>
                    Поставка комплетующих конвеерных цепей
                </h1>
              </div>
              <div class="slider_detail-text">
              </div>
              <div class="slider_detail-btn">
                <a href="{{route('gallery')}}">
                  <span>
                    Наши работы
                  </span>
                  <img src="{{asset("storage/images/arrow.png")}}" alt="Перейти в галерею работ" class="ml-2" />
                </a>
              </div>
            </div>
              <div class="slider-img slider-img2"></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_box slider_box3">

            <div class="slider-detail">
              <div class="slider_detail-heading">

                <h1>
                    Cпециализированная обратока металозаготовок
                </h1>
              </div>
              <div class="slider_detail-text">
              </div>
              <div class="slider_detail-btn">
                <a href="{{route('gallery')}}">
                  <span>
                    Наши работы
                  </span>
                  <img src="{{asset("storage/images/arrow.png")}}" alt="Перейти в галерею работ" class="ml-2" />
                </a>
              </div>
            </div>
              <div class="slider-img slider-img3"></div>
          </div>
        </div>
          <div class="carousel-item">
              <div class="slider_box">
                  <div class="slider-detail">
                      <div class="slider_detail-heading">

                          <h1>
                              Услуги по оргоннодуговой сварке
                          </h1>
                      </div>
                      <div class="slider_detail-text">

                      </div>
                      <div class="slider_detail-btn">
                          <a href="{{route('gallery')}}">
                  <span>
                    Наши работы
                  </span>
                              <img src="{{asset("storage/images/arrow.png")}}" alt="Перейти в галерею работ" class="ml-2" />
                          </a>
                      </div>
                  </div>
                  <div class="slider-img slider-img4"></div>
              </div>
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- end slider section -->

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{asset('storage/images/slider1/protvini.jpg')}}" alt="Протвини" />
          </div>
        </div>
        <div class=" col-md-6">
          <div class="welcome_detail">
            <h3>
              Добро пожаловать
            </h3>
            <h2>
              Рады приветствовать вас на сайте "РЕМТЕХСЕРВИС"
            </h2>
            <p>
                Мы производим - специальное технологическое оборудование, такое как: транспортеры, ванны, противня, фризеры, головорубы, телеги, производственные(технологические) столы. А также отдельные элементы механизмов производства технологической продукции.
                <br><br>В производстве используется нержавеющая сталь марки AISI 304 (ГОСТ 08Х18Н10), полиэтилен (PE, для производства направляющих, сборки модульных лент транспортеров и т.д.), полиацеталь (POM, для производства валиков, роликов и т.д.).
                <br><br>Соединение элементов конструкций осуществляется аргонодуговой сваркой. Крепеж элементов выполнен из нержавеющей стали А2.

            </p>
            <div class="welcome_detail-btn">
              <a href="{{route('gallery')}}">
                <span>
                  Посмотреть наши работы
                </span>
                <img src="{{asset('storage/images/arrow-black.png')}}" alt="Перейти в галерею работ" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h3>
          Наши
        </h3>
        <h2>
          Наши изделия
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href="{{route('gallery')}}"> Модульная лента</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="{{route('gallery')}}"> Ванны </a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="{{route('gallery')}}"> Руб </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href="{{route('gallery')}}"> Головоруб</a>
        </div>
      </div>
      <div class="service_btn">
        <a href="{{route('gallery')}}">
          <span>
            Смотреть больше
          </span>
          <img src="{{asset('storage/images/arrow-black.png')}}" alt="Перейти в галерею работ" class="ml-2" />
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-4">
            <div class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad98d77fa09da32c0cbc45229e2084c6c911adc028c54a4058dd2c4187b014990&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
        <div class="col-md-6 contact_form-container">
          <div class="contact_box">
              <h3>Связаться с вами?</h3>
              @include('alerts')
            <form action="{{route('send')}}" method="post">
                @csrf
              <input type="text" placeholder="Ваше имя" class="@error('name') is_invalid @enderror" value="{{old('name')}}" id="name" name="name" required>
                @error('name')
                <div class="invalid_feedback">{{ $message }}</div>
                @enderror
              <input class="@error('name') is_invalid @enderror" type="email" placeholder="Эл. почта" value="{{old('email')}}" id="email" name="email" required>
                @error('email')
                <div class="invalid_feedback">{{ $message }}</div>
                @enderror
              <input class="@error('message') is_invalid @enderror" type="tel" pattern="[8][0-9]{3}[0-9]{3}[0-9]{4}" placeholder="89998887766" id="phone" name="phone" required>
              <input class="@error('message') is_invalid @enderror" type="text" placeholder="Сообщение" value="{{old('message')}}" id="message" name="message" required>
                @error('message')
                <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                <div>
                                <span id="captcha-img">
                                    {!! captcha_img() !!}
                                </span>

                    <button id="reload"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                        </svg></button>
                    <input type="text"  @error('captcha') is_invalid @enderror" name="captcha" required placeholder="Введите результат">
                    @error('captcha')
                    <div class="invalid_feedback">{{ $message }}</div>
                    @enderror
                </div>
              <div>
                <button type="submit">
                  Отправить
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

  <!-- end contact section -->



@endsection
