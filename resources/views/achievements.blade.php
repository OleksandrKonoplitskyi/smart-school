@include('layouts.header')
<body class="nav_page || achievements_page">

<div class="date_block_wrap || inner_banner">
    <div class="banner_wrap">
        <a href="#!" class="arrow_back">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
        </a>
    </div>
</div>

<div class="card_wrap achievements_stat">
    <div class="achievement_item">
        <div class="numbers_wrap">
            <p><span>10</span>/12</p>
            <p><small>балів</small></p>
        </div>
        <p>Оцінки</p>
    </div>
    <div class="achievement_item">
        <div class="numbers_wrap">
            <p><span>2</span>/3</p>
            <p><small>балів</small></p>
        </div>
        <p>Дисципліна</p>
    </div>
    <div class="achievement_item">
        <div class="numbers_wrap">
            <p><span>4</span>/5</p>
            <p><small>балів</small></p>
        </div>
        <p>Активність</p>
    </div>
</div>

<div class="pre_footer" style="background-image: url('/img/triangle_bg.png')"></div>


@include('layouts.footer_nav')
@include('layouts.script')
