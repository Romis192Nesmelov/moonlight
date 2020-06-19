@extends('layouts.main')

@section('content')
    <div id="video-container" data-scroll="home">
        <video autoplay="autoplay" preload="auto" muted loop="loop" poster="{{ asset('video/poster.jpg') }}"><source src="{{ asset('video/particles.mp4') }}"></video>
    </div>
    @include('_logo_block', ['addClass' => 'left'])
    <div id="right-side">
        <div id="right-side-container">
            @include('_logo_block', ['addClass' => 'right'])
            {{--<h1>Запись на  курс раскрытие<br>женского ресурса <span>«Moonlight»</span> 2 дня</h1>--}}
            <h1>Moonligt - проект, созданный специально для женщин</h1>
            @include('_image_block',[
                'image' => 'images/foto2.jpg',
                'subscribe' => 'Нейрокоуч, сертифицированный коуч ICI, специалист в области психологии, игропрактик женских трансформационных игр',
                'email' => 1
            ])

            @include('_image_block',[
                'image' => 'images/foto1.jpg',
                'subscribe' => 'Нейрокоуч, сертифицированный коуч ICI, специалист в области психологии',
                'email' => 1
            ])

            <h2>Раскройте свои самые сокровенные ресурсы через игропрактику.</h2>
            <p>Игра «Гейша» - это самая откровенная трансформационная игра для женщин.<br>Представьте, что вы погружаетесь в мир возможностей, в котором вы прокладываете путь к вашей мечте.<br>С помощью трансформационной игры каждый участник может раскрыть свой внутренний потенциал, пройдя через все четыре уровня игры: физический, эмоциональный, ментальный, духовный.<br>В начале игры каждая из участниц формирует свой личный запрос.
            <p>Что вы получаете в процессе игры:</p>
            <ol>
                <li>вы проходите необычную и увлекательную диагностику «исходного состояния».
                    <ul>
                        <li>проверку на женственность и силу духа одновременно.</li>
                        <li>открываете свои самые сокровенные ресурсы.</li>
                        <li>в каждой из нас подсознание хранит ресурсы, способные изменить ход событий и достичь желаемого.</li>
                    </ul>
                </li>
                <li>встречаетесь со своими «тенями» и сильными сторонами.
                    <ul>
                        <li>наполняетесь женской энергией - энергией любви и исполнения желаний.</li>
                    </ul>
                </li>
                <li>практикуете свои навыки общения с противоположным полом с позиции женского состояния.</li>
            </ol>
            {{--<div class="square-block">--}}
                {{--<p>В игре так же принимает участие один мужчина - император, который в ее процессе увеличивает свой энергетический потенциал за счёт взаимодействия с участницами. Количество мест ограничено.</p>--}}
            {{--</div>--}}
            <p>💫💫 В игре принимают участие 5-7 участниц</p>
            <hr>
            <p class="record">Записаться на игру</p>
            @include('_feedback_block',['email' => 1])
        </div>
    </div>
@endsection