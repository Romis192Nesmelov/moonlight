@extends('layouts.main')

@section('content')
    <div id="video-container" data-scroll="home">
        <video autoplay="autoplay" preload="auto" muted loop="loop" poster="{{ asset('video/poster.jpg') }}"><source src="{{ asset('video/particles.mp4') }}"></video>
    </div>
    <div id="right-side">
        <div>
            <h1>Запись на  курс раскрытие<br>женского ресурса <span>«Moonlight»</span> 2 дня</h1>
            @include('_image_block',['image' => 'images/foto1.jpg', 'subscribe' => 'Нейрокоуч, сертифицированный кокс ICI, специалист в области психологии'])
            @include('_image_block',['image' => 'images/foto2.jpg', 'subscribe' => 'Нейрокоуч, сертифицированный коуч ICI, специалист в области психологии, игропрактик женских трансформационных игр'])
            <ul>
                <li>Трансформационная игра,направленная  на повышение женского  ресурсного состояния и раскрытие потенциала</li>
                <li>Индивидуальная консультация. Женские практики и искусство эмоционального баланса</li>
            </ul>
            @include('_feedback_block')
        </div>
    </div>
@endsection