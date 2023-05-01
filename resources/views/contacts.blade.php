@extends('layouts.layout')
@section('content')

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-4">
                    <div class="map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad98d77fa09da32c0cbc45229e2084c6c911adc028c54a4058dd2c4187b014990&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-md-4 address_container">
                    <div class="contacts">
                        <h3>
                            Адрес:
                        </h3>
                        <div class="address_link-container">
                            <a href="https://yandex.ru/maps/20154/kola/?from=api-maps&ll=33.083103%2C68.883029&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Ad98d77fa09da32c0cbc45229e2084c6c911adc028c54a4058dd2c4187b014990&z=16">
                                <img src="{{asset('storage/images/location.png')}}" alt="Адрес ООО «РЕМТЕХСЕРВИС»">
                                <span><b>Цех:</b> г.Кола, ул.Кильдинское шоссе 18б</span>
                            </a>
                            <a href="https://yandex.ru/maps/23/murmansk/house/ulitsa_shevchenko_1a/Z0oYdg5kS0cEQFhifXVxcnllYQ==/?ll=33.094223%2C68.903565&z=17">
                                <img src="{{asset('storage/images/location.png')}}" alt="Адрес ООО «РЕМТЕХСЕРВИС»">
                                <span><b>Бухгалтер:</b> г.Мурманск, ул.Шевченко 1а</span>
                            </a>
                            <a href="tel:+79512975469">
                                <img src="{{asset('storage/images/phone.png')}}" alt="Телефон директора ООО «РЕМТЕХСЕРВИС»">
                                <span> <b>Директор:</b> +7 (951) 297-54-69</span>
                            </a>
                            <a href="tel:881552539676">
                                <img src="{{asset('storage/images/phone.png')}}" alt="Телефон бухгалтера ООО «РЕМТЕХСЕРВИС»">
                                <span> <b>Бухгалтер:</b> 8 (81552) 53-96-76</span>
                            </a>
                            <a href="mailto:rts-murmansk@rambler.ru">
                                <img src="{{asset('storage/images/mail.png')}}" alt="Эл. почта ООО «РЕМТЕХСЕРВИС»">
                                <span><b>Эл. почта:</b> rts-murmansk@rambler.ru</span>
                            </a>
                            <a href="mailto:OfficeShevcenko@yandex.ru">
                                <img src="{{asset('storage/images/mail.png')}}" alt="Эл. почта ООО «РЕМТЕХСЕРВИС»">
                                <span><b>Эл. почта бухгалтера:</b> officeShevcenko@yandex.ru</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contact_form-container">
                    <div class="contact_box">
                        <h3>Связаться с вами?</h3>
                        @include('alerts')
                        <form action="{{route('send')}}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="contacts" id="contacts">
                            <input type="text" placeholder="Ваше имя" class="@error('name') is_invalid @enderror" value="{{old('name')}}" id="name" name="name" required>
                            @error('name')
                            <div class="invalid_feedback">{{ $message }}</div>
                            @enderror
                            <input class="@error('email') is_invalid @enderror" type="email" placeholder="Эл. почта" value="{{old('email')}}" id="email" name="email" required>
                            @error('email')
                            <div class="invalid_feedback">{{ $message }}</div>
                            @enderror
                            <input class="@error('phone') is_invalid @enderror" type="tel" pattern="[8][0-9]{3}[0-9]{3}[0-9]{4}" placeholder="89998887766" id="phone" name="phone" required>
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





