@include('layouts.header')
<body class="nav_page || timeline_page || parents_timeline_page">
<div class="timeline_block || white_page || parents_timeline">
    <div class="timeline_wrap">
        <a href="#!" class="arrow_back">
            <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
        </a>
        <ul class="timeline_list">
            <li>
                <h1 class="timeline_title || heading_line">Відомості батькам</h1>
                <ul class="timeline_desc">
                    <li class="timeline_item">
                       <span class="icons_wrap">
                            <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                            <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                       </span>
                        <p class="timeline_subtitle">23 вересня</p>
                        <p>Учень регулярно порушує дисципліну! терміново приймыть міри!</p>
                    </li>
                    <li class="timeline_item">
                       <span class="icons_wrap">
                            <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                            <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                       </span>
                        <p class="timeline_subtitle">26 вересня</p>
                        <p>26 вересня о 18:00</p>
                        <p>Батьківськи збори. Явка обов’язкова</p>
                    </li>
                    <li class="timeline_item">
                       <span class="icons_wrap">
                            <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                            <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                       </span>
                        <p class="timeline_subtitle">Ви</p>
                        <p>27 вересня. Іванка буде відсутня.</p>
                        <p>Ідемо лікувати зуби</p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

@include('layouts.footer_nav')
@include('layouts.script')
