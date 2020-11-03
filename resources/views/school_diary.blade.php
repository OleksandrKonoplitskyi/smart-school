@include('layouts.header')
<body class="nav_page">
<div class="date_block_wrap || " style="background-image: url('{{ URL::asset('/img/weather_bg.jpg') }}')"> <!-- class "urgent" for urgent block-->
    <div class="notification_block">
        <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconBell') }}"></use></svg>
        <p>Батькам</p>
    </div>
    <div class="date_block">
        <div class="prev_date date_arrow"></div>
        <h1 class="date_item">
            <span class="large">23</span>
            <span>вересня</span>
        </h1>
        <div class="next_date date_arrow"></div>
    </div>
    <div class="urgent_message">
        <div class="urgent_text">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconBell') }}"></use></svg>
            <p>Термінове повідомлення!</p>
        </div>
    </div>
</div>

<div class="card_wrap">
    <div class="card_heading">
        <div class="heading_item today_item">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconSearchRefresh') }}"></use></svg>
            <span>Сьогодні</span>
        </div>
        <div class="heading_item homeworks_item">
            <a href="#!" class="button">Домашні завдання</a>
        </div>
    </div>
    <div class="card">
        <div class="card_header">
            <span>Розклад</span>
            <span class="small">Оцінка</span>
        </div>
        <div class="card_items">
            <div class="card_item || active">
                <div class="card_item_name">
                    <p>Українська мова</p>
                </div>
                <div class="card_item_desc">
                    <div class="card_item_text">
                        <p>Сторінка 24, вправа 182</p>
                    </div>
                    <svg class="icon || schedule_task_icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg> <!-- class "completed" for completed icon-->
                </div>
            </div>
            <div class="card_item">
                <div class="card_item_name">
                    <p>Хрестоматія</p>
                </div>
                <div class="card_item_mark high_level">
                    <span>12</span>
                </div>
            </div>
            <div class="card_item">
                <div class="card_item_name">
                    <p>Фізика</p>
                </div>
                <div class="card_item_mark sufficient_level">
                    <span>8</span>
                </div>
            </div>
            <div class="card_item">
                <div class="card_item_name">
                    <p>Алгебра</p>
                </div>
                <div class="card_item_mark average_level">
                    <span>6</span>
                </div>
            </div>
            <div class="card_item">
                <div class="card_item_name">
                    <p>Хімія</p>
                </div>
                <div class="card_item_mark initial_level">
                    <span>3</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card_comments">
        <p class="comment_heading">Коментарі:</p>
        <p>24 вересня о 15:30 буде проведено змагання з баскетболу</p>
    </div>
</div>


@include('layouts.pre_footer')
@include('layouts.footer_nav')
@include('layouts.script')

