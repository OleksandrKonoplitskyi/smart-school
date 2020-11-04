@include('layouts.header')
<body class="nav_page || news_page">
<div class="date_block_wrap || inner_banner" style="background-image: url('{{ URL::asset('/img/weather_bg.jpg') }}')">
    <div class="banner_wrap">
        <a href="#!" class="arrow_back">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
        </a>
        <h1 class="heading_line">Новини</h1>
    </div>
</div>
<div class="card_wrap">
    <div class="card">
        <div class="card_items">
            @foreach ($news as $item)
            <div class="card_item || news_item">
                <div class="news_header">
                    <p>{{$item->created_at}}</p>
                </div>
                <div class="news_desc">
                    <p><a href="/news/{{$item->id}}">{{$item->name}}</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.pre_footer')
@include('layouts.footer_nav')
@include('layouts.script')
