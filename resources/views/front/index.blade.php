<!DOCTYPE html>
<html lang="en">
<head>
    <title>Стоматология - Алматы</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{asset('front/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">


    <link rel="stylesheet" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link href="{{asset('css/fonts.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/select2.min.css"/>
    <link rel="stylesheet"
          href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet"
          href="{{asset('css/jquery.dataTables.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('css/select.dataTables.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('css/buttons.dataTables.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('css/jquery-ui-timepicker-addon.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('css/bootstrap-datepicker.standalone.min.css')}}"/>
    <style>
        html {
            scroll-behavior: smooth;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="site-wrap">

    {{--<div class="site-mobile-menu">--}}
    {{--<div class="site-mobile-menu-header">--}}
    {{--<div class="site-mobile-menu-close mt-3">--}}
    {{--<span class="icon-close2 js-menu-toggle"></span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="site-mobile-menu-body"></div>--}}
    {{--</div> <!-- .site-mobile-menu -->--}}

    <div class="my-slider">
        <div class="site-blocks-cover item"
             style="background-image: url({{asset('front/images/hero_bg_1_gradient.jpg')}})"
             data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center" style="text-align: center">
                    <div class="col-md-12">
                        <span class="sub-text">Мы работаем ради вашей услуги</span>
                        <h1>Спасибо<strong> за доверие. </strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover item" style="background-image: url({{asset('front/images/hero_bg_1.jpg')}})"
             data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center" style="text-align: center">
                    <div class="col-md-12">
                        <span class="sub-text">Мы работаем ради вашей услуги</span>
                        <h1>Спасибо<strong> за доверие. </strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover item" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}})"
             data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center" style="text-align: center">
                    <div class="col-md-12">
                        <span class="sub-text">Мы работаем ради вашей услуги</span>
                        <h1>Спасибо<strong> за доверие. </strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="promo py-3 bg-white">
        <div class="container text-center">
            <div class="col-md-3">
                <h2 class="site-heading text-white"><a href="#price_list" class="btn btn-primary btn-circle"><i
                                class="fa fa-info"
                                aria-hidden="true"></i>
                        Прайс лист</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="site-heading text-white"><a href="#reviews" class="btn btn-primary"><i class="fa fa-comments"
                                                                                                  aria-hidden="true"></i>
                        Оставить отзыв</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="site-heading text-white"><a href="#zapis" class="btn btn-primary"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i> Записаться</a></h2>
            </div>
            <div class="col-md-3">
                <h2 class="site-heading text-white"><a href="#contact" class="btn btn-primary btn-circle"><i
                                class="fa fa-info"
                                aria-hidden="true"></i>
                        Контакты</a></h2>
            </div>
        </div>
    </div>
    <div class="site-section site-block-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center  align-self-stretch">
                    <h2 class="site-heading text-black mb-5 " style="text-align:left"> О <br><strong>Нас</strong></h2>
                    <h3 style="text-align:left">Новейшее оборудование, опытные доктора, система внутреннего контроля
                        качества услуг все это позволяет нам гарантировать высокий уровень.</h3>
                </div>
                <div class="col-md-4 text-center align-self-stretch">
                    <h2 class="site-heading text-black mb-5 " style="text-align:left"> Современное
                        <strong>оборудование</strong></h2>
                    <h3 style="text-align:left">В нашей клинике используется новейшее немецкое стоматологическое
                        оборудование, имеющее все необходимые сертификаты и лицензии.</h3>
                </div>
                <div class="col-md-4 text-center align-items-stretch">
                    <h2 class="site-heading text-black mb-5 " style="text-align:left"> Квалифицированные <strong>стоматологи</strong>
                    </h2>
                    <h3 style="text-align:left">Наши стоматологи имеют высшее профессиональное образование, и высокую
                        квалификацию. Для нас важно, чтобы качественная стоматология была доступна каждому.</h3>
                </div>
            </div>
            <br>
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5 "> Наши <strong>Услуги</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{asset('front/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="row row-items">

                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center feature active p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-whitening display-3"></span>
                    </span>
                    <h3>Отбеливание зубов</h3>
                  </span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-stethoscope display-3"></span>
                    </span>
                    <h3>Лечение десен</h3>
                  </span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-pliers display-3"></span>
                    </span>
                    <h3>Профессиональная чистка зубов</h3>
                  </span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center active feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-pliers display-3"></span>
                    </span>
                    <h3>Лечение кариеса</h3>
                  </span>
                            </a>
                        </div>
                    </div>
                    <div class="row row-items last">
                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center active feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-first-aid-kit display-3"></span>
                    </span>
                    <h3>Протезирование</h3>
                  </span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#price_list" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-pliers display-3"></span>
                    </span>
                    <h3>Диагностика</h3>
                  </span>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="#price_list" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-pliers display-3"></span>
                    </span>
                    <h3>Удаление зубов</h3>
                  </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-block-appointment" id="zapis">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 pl-lg-5 order-1 order-lg-2">
                    <div class="pl-lg-5 ml-lg-5">
                        <h2 class="site-heading text-black">Онлайн <strong>Запись</strong> К Врачу</h2>
                        <p class="text-black-opacity-3" style="font-size:20px">Запишитесь к нам, не выходя из дома! У
                            вас теперь есть возможность выбрать нужную услугу, предпочитаемого стоматолога в удобное вам
                            время! Оставьте свои данные и дождитесь SMS подтверждения.</p>
                        <h2 class="site-heading text-black text-right"><strong>Рабочие</strong> дни</h2>
                        <table class="table table-light">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Пн</th>
                                <th scope="col">Вт</th>
                                <th scope="col">Ср</th>
                                <th scope="col">Чт</th>
                                <th scope="col">Пт</th>
                                <th scope="col">Сб</th>
                                <th scope="col">Вс</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09-00</td>
                                <td>09-00</td>
                                <td>09-00</td>
                                <td>09-00</td>
                                <td>09-00</td>
                                <td>10-00</td>
                                <td>----</td>
                            </tr>
                            <tr>
                                <td>18-00</td>
                                <td>18-00</td>
                                <td>18-00</td>
                                <td>18-00</td>
                                <td>16-00</td>
                                <td>13-30</td>
                                <td>----</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-lg-6 order-2 order-lg-1">


                    {!! Form::open(['method' => 'POST', 'route' => ['front.appoint.save'], 'autocomplete' =>'off']) !!}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Создать
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            {!! Form::label('first_name', 'Имя', ['class' => 'control-label']) !!}
                                            {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                            <p class="help-block"></p>
                                            @if($errors->has('first_name'))
                                                <p class="help-block">
                                                    {{ $errors->first('first_name') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            {!! Form::label('last_name', 'Фамилия', ['class' => 'control-label']) !!}
                                            {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                            <p class="help-block"></p>
                                            @if($errors->has('last_name'))
                                                <p class="help-block">
                                                    {{ $errors->first('last_name') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            {!! Form::label('phone', 'Номер телефона', ['class' => 'control-label']) !!}
                                            <span>Пример: +77071122334</span>
                                            {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'pattern' => '^\+77(\d{9})$']) !!}
                                            <p class="help-block"></p>
                                            @if($errors->has('phone'))
                                                <p class="help-block">
                                                    {{ $errors->first('phone') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                            {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                            <p class="help-block"></p>
                                            @if($errors->has('email'))
                                                <p class="help-block">
                                                    {{ $errors->first('email') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('service_id', 'Услуга', ['class' => 'control-label']) !!}
                                    <select id="service_id" name="service_id" class="form-control select2" required>
                                        <option value="">Список услуг</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                                    data-price="{{ $service->price }}" {{ (old("service_id") == $service->id ? "selected":"") }}>{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="help-block"></p>
                                    @if($errors->has('service_id'))
                                        <p class="help-block">
                                            {{ $errors->first('service_id') }}
                                        </p>
                                    @endif
                                    <input type="hidden" id="price" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('date', 'Выберите дату', ['class' => 'control-label']) !!}
                                    {!! Form::text('date', old('date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->has('date'))
                                        <p class="help-block">
                                            {{ $errors->first('date') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row" id="start_time" style="display: none;">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('start_time', 'Начало', ['class' => 'control-label']) !!}
                                    <div class="form-inline">
                                        <select name="starting_hour" id="starting_hour" class="form-control" required
                                                style="max-width: 85px;">
                                            <option value="-1" selected>Час</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                        </select>
                                        :
                                        <select name="starting_minute" id="starting_minute" class="form-control"
                                                required style="max-width: 85px;">
                                            <option value="-1">Мин</option>
                                            <option value="00" selected>00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="finish_time" style="display: none;">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('finish_time', 'Конец', ['class' => 'control-label']) !!}
                                    <div class="form-inline">
                                        <select name="finish_hour"  style="pointer-events:none;" readonly="readonly" id="finish_hour" class="form-control"
                                                required
                                                style="max-width: 85px;">
                                            <option value="-1" selected>Час</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                        :
                                        <select name="finish_minute" style="pointer-events:none;" readonly="readonly" id="finish_minute" class="form-control"
                                                required
                                                style="max-width: 85px;">
                                            <option value="-1" >Мин</option>
                                            <option value="00" selected>00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div id="results" style="display: none;">
                                <p class="total_time"><strong>Время: <span id="time">0</span> час(ов)</strong></p>
                                <p class="total_price"><strong>К оплате: <span id="price_total">0</span>₸</strong>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    {!! Form::label('comments', 'Комментарии', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                                    <p class="help-block"></p>
                                    @if($errors->any())

                                        @foreach ($errors->all() as $error)
                                            <p class="help-block">
                                            <div>{{$error}}</div>
                                            </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            {!! Form::submit('Сохранить', ['class' => 'btn btn-danger']) !!}
                        </div>
                    </div>


                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    <div class="site-section bg-light" id="price_list">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5"> Наши <strong>Услуги</strong> и <strong>Цены</strong></h2>
                </div>
            </div>
            <p class="text-center">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria- controls="collapseExample">
                    Посмотреть цены
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="columns download">
                        <p>

                            <a href="{{asset('files/Services.pdf')}}" class="button" download><i
                                        class="fa fa-download"></i>Скачать прайс-лист</a>
                        </p>

                        <table class="table table-bordered table-hover table-striped table-light">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Наименования услуг</th>
                                <th scope="col">Стоимость</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allServices as $service)
                                <tr>
                                    <td>{{$service->name}}</td>
                                    <td>{{$service->price}} ₸</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="promo py-5 bg-primary" id="reviews">
        <div class="container text-center">
            <h2 class="site-heading text-black">Отзывы <strong>клиентов</strong></h2>
            <div id="date-countdown" class="mt-0"></div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($comments as $comment)
                    <div class="col-lg-4">
                        <div class="site-block-testimony p-4 text-center active">
                            <div>
                                <p>{{$comment->text}}</p>
                                <p><strong class="font-weight-bold">{{$comment->name}}</strong></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Оставьте свой отзыв
                        </div>
                        <div class="panel-body">

                            {!! Form::open(['method' => 'POST', 'route' => ['front.comment.store']]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Имя', ['class' => 'control-label']) !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('text', 'Отзыв', ['class' => 'control-label']) !!}
                                {!! Form::text('text', old('text'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                            </div>
                            {!! Form::submit('Оставить', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?	pb=!1m18!1m12!1m3!1d2907.2854274938127!2d76.89447525116877!3d43.22447497903597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388368de4a95b5ff%3A0x5fb9b8caf93345fe!2z0L_RgNC-0YHQv9C10LrRgiDQk9Cw0LPQsNGA0LjQvdCwIDE5MCwg0JDQu9C80LDRgtGLIDA1MDA2MA!5e0!3m2!1sru!2skz!4v1559497761207!5m2!1sru!2skz"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <footer class="site-footer" id = "contact">
        <div class="container">
            <div class="row  text-center">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <br>
                    <p>
                        <a class="btn btn-info text-white " href="/login">Войти</a>
                    </p>
                    <hr>
                    <h3 class="site-heading text-white" style="text-align: center">Наши <strong>контакты</strong>
                    </h3>
                    <hr>
                    <p class="lead text-white" style="text-align: center">Номер: +7(727)274-00-02<br>     +7(705)705-55-41</p>
                    <p class="lead text-white" style="text-align: center">Почта: ansar.khafizov@gmail.com</p>
                    <p class="lead text-white" style="text-align: center">Адрес: Гагарина, 190</p>
                    <hr>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
        <div class="text-center">
            <p>
                Done by: Khafizov Ansar<br>
                Zhakashbayev Sanzhar<br>
                Zhunisov Mukhammed
            </p>
        </div>
        <div class="footer-copyright text-center text-white py-3">© 2019 Copyright:
            <a href="http://www.almatydent.kz"> AlmatyDent.kz</a>
        </div>
    </footer>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Наверх</button>
<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
@include('partials.javascripts')

<script src="{{asset('front/js/main.js')}}"></script>
<script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script>
    $('.datetime').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('app.date_format_js') }}",
        timeFormat: "HH:mm:ss"
    });
</script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "{{ config('app.date_format_js') }}"
    }).datepicker("setDate", "0");
</script>
<script>
    $("#service_id").on("change", function () {
        $("#price").val($('option:selected', this).attr('data-price'));
        var date = $("#date").val();
        var service_id = $("#service_id").val();
        UpdateEmployees(service_id, date);
    });

    $("#date").change(function () {
        var service_id = $("#service_id").val();
        var date = $("#date").val();
        UpdateEmployees(service_id, date);
    });

    $("#starting_hour, #finish_hour, #starting_minute, #finish_minute").on("change", function () {
        CountPrice();
    });

    $('body').on("change", "input[type=radio][name=employee_id]", function () {
        var employee_id = $(this).val();
        var starting_hour = parseInt($(".starting_hour_" + employee_id).text());
        var starting_minute = $(".starting_minute_" + employee_id).text();
        var finish_hour = starting_hour + 1;
        if (finish_hour < 10) {
            finish_hour = "0" + finish_hour;
        }
        if (starting_hour < 10) {
            starting_hour = "0" + starting_hour;
        }
        $('#starting_hour option[value=' + starting_hour + ']').prop('selected', 'true');
        $('#starting_minute option[value=' + starting_minute + ']').prop('selected', 'true');
        $('#finish_hour option[value=' + finish_hour + ']').prop('selected', 'true');
        $('#finish_minute option[value=' + starting_minute + ']').prop('selected', 'true');
        $("#start_time, #finish_time").show();
        CountPrice();
    });

    function CountPrice() {
        var start_hour = parseInt($("#starting_hour").val());
        var start_minutes = parseInt($("#starting_minute").val());
        var finish_hour = parseInt($("#finish_hour").val());
        var finish_minutes = parseInt($("#finish_minute").val());
        var total_hours = 1;
        var price = parseFloat($("#price").val());
        $("#price_total").html(price * total_hours);
        $("#time").html(total_hours);
        if (start_hour != -1 && start_minutes != -1 && finish_hour != -1 && finish_minutes != -1) {
            $("#results").show();
        }
    }

    $('#starting_hour').on('change', function () {
        $('#finish_hour').val(parseInt($('#starting_hour').val()) + 1);
    })
    $('#starting_minute').on('change', function () {
        $('#finish_minute').val(parseInt($('#starting_minute').val()));
    })

    function UpdateEmployees(service_id, date) {
        if (service_id != "" && date != "") {
            $.ajax({
                url: '{{ url("admin/get-employees") }}',
                type: 'GET',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {service_id: service_id, date: date},
                success: function (option) {
                    //alert(option);
                    $(".employees").remove();
                    $("#date").closest(".row").after(option);
                    $("#start_time, #finish_time").hide();
                    $("#results").hide();
                }
            });
        }
    }
</script>
<script type="module">
    var slider = tns({
        container: '.my-slider',
        items: 3,
        autoplay: true,
        autoWidth: true,
        autoHeight: true,
        center: true,
        controls: false,
        nav: false,
        navContainer: false,
        autoplayButton: false,
        autoplayButtonOutput: false,
        autoplayResetOnVisibility: false,
        controlsContainer: false,
        controlsPosition: false,
    });
</script>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>