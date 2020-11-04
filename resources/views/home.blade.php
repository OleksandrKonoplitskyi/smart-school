@include('layouts.header')
<body class="nav_page_example">
{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Dashboard') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--{{ __('You are logged in!') }}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

<div class="navigation_home">
    <div class="card_wrapper">
        <h1>Навігація</h1>
        <ul class="navigation">
            <li>
                <a href="{{ url('school-diary') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconHomeLearning') }}"></use></svg>
                    <span>Головна</span>
                </a>
            </li>
            <li>
                <a href="{{ url('school-diary-timeline') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconHomeLearning') }}"></use></svg>
                    <span>Домашні завдання</span>
                </a>
            </li>
            <li>
                <a href="{{ url('parents-timeline') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconHomeLearning') }}"></use></svg>
                    <span>Відомості батькам</span>
                </a>
            </li>
            <li>
                <a href="{{ url('news') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconList') }}"></use></svg>
                    <span>Новини</span>
                </a>
            </li>
            <li>
                <a href="{{ url('news-inner') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconList') }}"></use></svg>
                    <span>Стаття</span>
                </a>
            </li>
            <li>
                <a href="{{ url('achievements') }}">
                    <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconStar') }}"></use></svg>
                    <span>Досягнення</span>
                </a>
            </li>
        </ul>
    </div>
</div>


@include('layouts.script')
