@include('layouts.header')
<body class="nav_page || news_inner_page">
<div class="date_block_wrap || inner_banner" style="background-image: url('{{ URL::asset('/img/news_bg.jpg') }}')">
    <div class="banner_wrap">
        <a href="/news" class="arrow_back">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
        </a>
    </div>
</div>

<div class="card_wrap">
    <div class="news_article">
        <div class="news_title">
            <h1 class="heading_line">{{$post->name}}</h1>
            <p class="date">{{$post->created_at}}</p>
        </div>
        <div class="news_content || content">
            <p>{{$post->value}}</p>
        </div>
    </div>
</div>

@include('layouts.pre_footer')
@include('layouts.footer_nav')
@include('layouts.script')
