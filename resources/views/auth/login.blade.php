@include('layouts.header')
<body class="login_page" style="background-image: url('{{ URL::to('/img/triangle_bg.png') }}')">
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="login_wrap">
    <div class="logos_wrap">
        <img src="{{ URL::asset('/img/logo_img.png') }}" alt="Розумна школа" class="logo_img">
        <img src="{{ URL::asset('/img/logo_text.png') }}" alt="Розумна школа" class="logo_text">
    </div>
    <div class="login_form_wrap">
        <div class="top_text tc">
            <p><span>Будь ласка, авторизуйтесь</span></p>
        </div>
        <form action="" method="POST" class="login_form || validate_form" autocomplete="off">
            <label for="username" class="label_icon">
                <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconManUser') }}"></use></svg>
                <input type="text" class="input || validate" name="username" id="username" autocomplete="off" placeholder="Логін">
            </label>

            <div class="password_block">
                <label for="password" class="label_icon">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconLock') }}"></use></svg>
                    <input type="password" class="input || validate_pass" name="password" id="password" autocomplete="off" placeholder="Пароль">
                </label>
                <span class="show_pass_block">
                    <svg class="icon eye_showing"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconEye2') }}"></use></svg>
                    <svg class="icon eye_hidden"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconEyeHidden') }}"></use></svg>
                </span>
            </div>
            <div class="tr bottom_link">
                <a href="#!">Забули пароль?</a>
            </div>
            <div class="tc">
                <button class="button || tc" type="submit">
                    <span>Увійти</span>
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
                </button>
            </div>
        </form>
        <div class="no_account tc">
            <a href="#!">Немає аккаунту?</a>
            <a href="#!" class="instruction_link">Інструкція</a>
        </div>
    </div>
</div>
@include('layouts.script')
