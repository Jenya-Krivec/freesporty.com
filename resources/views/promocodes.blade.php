@extends('app')

@section('title', trans('promocode.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('promocode.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('promocode.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-20">

    </main>
    <script defer type="text/javascript" src="{{ asset('js/promo/rate.js').'?v='.filemtime('js/promo/rate.js') }}"></script>
@endsection
