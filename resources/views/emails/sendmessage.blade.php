@extends('layouts.mail')

@section('content')
    <h3>{{ trans('content.message_from_user', ['name' => $name]) }}</h3>
    <h5>{{ trans('content.with_email', ['email' => $email]) }}</h5>
    <h5>{{ trans('content.with_phone', ['phone' => $phone]) }}</h5>
    <h5>{{ trans('content.with_phone', ['phone' => $phone]) }}</h5>
    <h5>{{ trans('content.message') }}:</h5>
    <p>{{ $content }}</p>
@endsection