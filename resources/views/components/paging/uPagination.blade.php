@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
    <link rel="stylesheet" href="{{ asset('css/theme/SmartDevTable.css') }}" type="text/css" />
    {!! $smartTable; !!}
    <script src="{{ URL::asset('js/theme/SmartDevTable.js') }}"></script>
@endsection
