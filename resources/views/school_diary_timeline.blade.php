@include('layouts.header')
<body class="nav_page || timeline_page">
    <div class="timeline_block || white_page">
        <div class="timeline_wrap">
            <a href="#!" class="arrow_back">
                <svg class="icon"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconRightArrow') }}"></use></svg>
            </a>
            <ul class="timeline_list">
                <li>
                    <h2 class="timeline_title || heading_line">23 вересня</h2>
                    <ul class="timeline_desc">
                        <li class="timeline_item">
                           <span class="icons_wrap">
                                <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                                <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                           </span>
                            <p class="timeline_subtitle">Українська мова</p>
                            <p>Сторінка 24, вправа 182</p>
                            <p>Написати оповідання на тему вправи</p>
                        </li>
                        <li class="timeline_item">
                           <span class="icons_wrap">
                                <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                                <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                           </span>
                            <p class="timeline_subtitle">Хрестоматія</p>
                            <p>ст. 14 <br> Вивичти вірш М. Коцюбинського «Наша хатка»</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2 class="timeline_title || heading_line">24 вересня</h2>
                    <ul class="timeline_desc">
                        <li class="timeline_item">
                           <span class="icons_wrap">
                                <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                                <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                           </span>
                            <p class="timeline_subtitle">Фізика</p>
                            <p>урок 9/15: § 17, завдання 12</p>
                        </li>
                        <li class="timeline_item">
                           <span class="icons_wrap">
                                <svg class="icon || task_icon || icon_completed"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMark') }}"></use></svg>
                                <svg class="icon || task_icon || icon_uncompleted"><use xlink:href="{{ URL::asset('/img/svgdefs.svg#iconCheckMarkEmpty') }}"></use></svg>
                           </span>
                            <p class="timeline_subtitle">Геометрія</p>
                            <p>11. Теорема Фалеса - § 2. Подібність трикутників</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

@include('layouts.footer_nav')
@include('layouts.script')
