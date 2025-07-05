@extends('app')

@section('title', trans('review.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('review.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('review.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-20">

    </main>
    <script defer type="text/javascript" src="{{ asset('js/review/rate.js').'?v='.filemtime('js/review/rate.js') }}"></script>
@endsection
