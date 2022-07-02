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
                            <a href="tel:+79217247351">
                                <img src="{{asset('storage/images/phone.png')}}" alt="Телефон директора ООО «РЕМТЕХСЕРВИС»">
                                <span> <b>Директор (Сергей Алексеевич):</b> +7 (921) 724-73-51</span>
                            </a>
                            <a href="tel:+79512975469">
                                <img src="{{asset('storage/images/phone.png')}}" alt="Телефон зам.директора ООО «РЕМТЕХСЕРВИС»">
                                <span> <b>Зам.директора (Станислав Викторович):</b> +7 (951) 297-54-69</span>
                            </a>
                            <a href="tel:881552539676">
                                <img src="{{asset('storage/images/phone.png')}}" alt="Телефон бухгалтера ООО «РЕМТЕХСЕРВИС»">
                                <span> <b>Бухгалтер (Анастасия Васильевна):</b> 8 (81552) 53-96-76</span>
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
                <div class=" col-md-6 contact_form-container">
                    <div class="contact_box">
                        <h3>Связаться с вами?</h3>
                        <form action="">
                            <input type="text" placeholder="Ваше имя" required>
                            <input type="email" placeholder="Эл. почта" required>
                            <input type="text" placeholder="Номер телефона" required>
                            <input type="text" placeholder="Сообщение" required>
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





