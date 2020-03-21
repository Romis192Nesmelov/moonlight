<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Mar 21 2018 11:43:04 GMT+0000 (UTC)  -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $data['seo']['title'] }}</title>
    @foreach($metas as $meta => $params)
        @if ($data['seo'][$meta])
            <meta {{ $params['name'] ? 'name='.$params['name'] : 'property='.$params['property'] }} content="{{ $data['seo'][$meta] }}">
        @endif
    @endforeach

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-switch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/main.controls.js') }}"></script>
    <!-- /core JS files -->

    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/media/fancybox.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/perfect-scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/feedback.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body>

@include('layouts._modal_block',[
    'id' => 'message',
    'message' => Session::has('message') ? Session::get('message') : trans('content.thanx')
])

@yield('content')

</body>
</html>
