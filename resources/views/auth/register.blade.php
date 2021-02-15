@extends('layouts.app')
@section('style')
    <style>
        .form-group span {

            margin-right: 6px;
            display: flex;
            color: #4a4a4a;
            font-size:10px
        }
        .content_box {

            margin: 14px auto 20px auto;

        }

        .center-items{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        footer{
            display: none;
        }
        .path1{
            height:100%;
            width: auto;
            position: absolute;
            left: 0;
            filter: hue-rotate(45deg) drop-shadow(2px 4px 6px #ccc);
            z-index:-1;
        }
        .signUpImg{
            left: 1px;
            filter: hue-rotate(945deg);
            position: absolute;
            height: auto;
            width: 98%;
            z-index: -1;
            opacity: .1;
            top: 20%;
         }
        .mr-6{
            margin-right:4rem
        }
    </style>
    @endsection
@section('page')
ثبت نام
@endsection
@section('content')
    <div class="container center-items position-relative">
        <div class="row position-relative content_box w-100">
            <div style="z-index:0" class="col-md-6   d-sm-flex position-relative pl-0 pr-0 pr-sm-3 ">

                <img class="path1 d-none d-sm-block"  src="{{url('img/method-draw-image.svg')}}" alt="">

                <img   class="signUpImg" src="{{url('img/sign-up.png')}}" alt="">
                <div class="register-box">
                        <p class="rtl welcome-login">
                          سامانه مسئولیت اجتماعی مردم ما
                        </p>
                        <p class="rtl text-right">سامانه مردم ما در راستای مسئولیت اجتماعی خود می‌کوشد تا به ساده‌ترین راه ممکن ارتباط مردم با نمایندگان را تسهیل کند و زمینه اطلاع‌رسانی، ارائه گزارش‌ها، همفکری و تعامل را تسهیل کند. در صورت انتخاب شما گزارش‌ها، درخواست‌ها، پیشنهادات و انتقادات به صورت کاملا ناشناس در اختیار نمایندگان قرار خواهد گرفت. تیم ما برای دریافت سریع پاسخ از سمت نمایندگان نهایت سعی خود را بکار خواهد گرفت.

                        </p>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item">
                                شفافیت
                            </li>

                            <li class="list-group-item">
                               پیگیری سریع
                            </li>

                            <li class="list-group-item">
                                گزارش ناشناس
                            </li>


                        </ul>
                    </div>
            </div>
            <div class="col-md-6 pt-3 ">
                <div class="register_form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="name" class="col-md-8 col-form-label text-md-right">نام کاربری</label>

                            <div class="col-md-10 ">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="email"
                                   class="col-md-8 col-form-label text-md-right">ایمیل</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="job" class="col-md-8 col-form-label d-flex align-items-center text-md-right"> شغل <span
                                    class="optional_field_registeration">(اختیاری)</span></label>

                            <div class="col-md-10">
                                <input id="job" type="text" class="form-control @error('job') is-invalid @enderror"
                                       name="job" value="{{ old('job') }}" autocomplete="job" autofocus>

                                @error('job')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="degreeEducation" class="col-md-8 col-form-label d-flex align-items-center text-md-right"> مدرک تحصیلی
                                <span class="optional_field_registeration">(اختیاری)</span></label>

                            <div class="col-md-10">
                                <input id="degreeEducation" type="text"
                                       class="form-control @error('degreeEducation') is-invalid @enderror"
                                       name="degreeEducation" value="{{ old('degreeEducation') }}"  
                                       autocomplete="degreeEducation" autofocus>

                                @error('degreeEducation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="city" class="col-md-8 col-form-label d-flex align-items-center text-md-right">شهر<span
                                    class="optional_field_registeration">(اختیاری)</span></label>

                            <div class="col-md-10">
                                <input id="city" type="text"
                                       class="form-control @error('degreeEducation') is-invalid @enderror" name="city"
                                       value="{{ old('city') }}"   autocomplete="city" autofocus>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="phone_number" class="col-md-8 col-form-label d-flex align-items-center text-md-right">شماره تماس<span
                                    class="optional_field_registeration">(اختیاری)</span></label>

                            <div class="col-md-10">
                                <input id="phone_number" type="text"
                                       class="form-control @error('phone_number') is-invalid @enderror"
                                       name="phone_number" value="{{ old('phone_number') }}"  
                                       autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="password"
                                   class="col-md-8 col-form-label text-md-right">رمز عبور</label>

                            <div class="col-md-10">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group pr-0 pr-sm-4 row">
                            <label for="password-confirm"
                                   class="col-md-10 col-form-label text-md-right">تایید رمز عبور</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mr-0 mr-sm-2  row mb-0">
                            <div class="col-md-6 text-right pr-0 ">
                                <button type="submit" class="btn mr-0 mr-sm-3 px-5 btn-primary">
                                    ثبت نام
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
