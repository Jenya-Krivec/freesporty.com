@extends('app')

@section('title', trans('mobileapp.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('mobileapp.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('mobileapp.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-20">

    </main>
    <script defer type="text/javascript" src="{{ asset('js/mobileapp/rate.js').'?v='.filemtime('js/mobileapp/rate.js') }}"></script>
@endsection
