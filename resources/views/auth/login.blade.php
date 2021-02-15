@extends('layouts.app')
@section('page')
    ورود به سایت
@endsection
@section('content')
    <div class="container">
        <div class="row content_box justify-content-center">


            <div class="col-md-7   d-sm-block position-relative login-bg pl-0   pr-lg-5 ">
                <div class="d-flex flex-column h-100 align-items-center justify-content-center">
                    <div class="login-box">
                        <p class="rtl welcome-login">
                            به سامانه مسئولیت اجتماعی ارتباط خوش آمدید
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
                <p style="position: absolute;bottom: 20%;width: 100%;text-align: center;color: white;font-size: 15pt ; margin-right: 10px ">
                </p>
            </div>
            <div class="col-md-5 d-flex justify-content-center flex-column align-items-center ">
                <p>ورود به سامانه مردم ما</p>
                <form method="POST" class="w-100" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-8 col-form-label text-md-right">ایمیل</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-8 col-form-label text-md-right">رمز عبور</label>

                        <div class="col-md-12">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label mr-4" for="remember">
                                    مرا به خاطر بسپار
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn pl-5 pr-5 btn-primary">
                                ورود
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    بازیابی رمز عبور
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
