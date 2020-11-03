@include('layouts.header')
<body class="nav_page || news_inner_page">
<div class="date_block_wrap || inner_banner" style="background-image: url('{{ URL::asset('/img/news_bg.jpg') }}')">
    <div class="banner_wrap">
        <a href="#!" class="arrow_back">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
        </a>
    </div>
</div>

<div class="card_wrap">
    <div class="news_article">
        <div class="news_title">
            <h1 class="heading_line">Змагання з баскетболу</h1>
            <p class="date">24 вересня 2020 р.</p>
        </div>
        <div class="news_content || content">
            <p>Змагання з баскетболу серед 9 класів. Приймай участь або підтримай свій клас</p>
            <p>Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів Letraset, які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп'ютерного верстування на кшталт Aldus Pagemaker, які використовували різні версії Lorem Ipsum.</p>
        </div>
    </div>
</div>

@include('layouts.pre_footer')
@include('layouts.footer_nav')
@include('layouts.script')
