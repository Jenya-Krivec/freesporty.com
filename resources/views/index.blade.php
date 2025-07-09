@extends('app')

@section('title', trans('index.title').' '.date('Y'))

@section('description', trans('index.description'))

@section('keywords', trans('index.keywords'))

@section('content')
    <main>
        <div class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
            <div class="relative">
                <div class="absolute -top-1 left-4 w-10 h-10 rounded-full bg-violet-500 text-white font-bold flex items-center justify-center">{{substr(trans('index.Bookmakers'), 0, 1)}}</div>
                <h1 class="text-lg sm:text-2xl pl-16 font-bold">@lang('index.Bookmakers')</h1>
            </div>
            <div class="text-justify my-4">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph1')</p>
            </div>
        </div>
        <hr class="border-t-2 border-violet-500 md:!border-gray-200">
        <div class="xl:px-20 m-auto bg-gray-100">
            @foreach($bookmakers as $bookmaker)
                @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => false])
            @endforeach
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph2')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph3')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph4')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph5')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph6')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph7')</p>
            </div>
            <div class="text-justify my-4 xl:px-20 px-3">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.Paragraph8')</p>
            </div>
            <div class="relative">
                <div class="absolute -top-1 left-4 w-10 h-10 rounded-full bg-violet-500 text-white font-bold flex items-center justify-center">{{substr(trans('index.Paragraph9'), 0, 1)}}</div>
                <h2 class="text-lg pl-16 sm:text-2xl font-bold">@lang('index.Paragraph9')</h2>
            </div>
            <div class="list-disc pl-5 py-1">
                <ol class="list-disc pl-5 my-4">
                    <li class="text-base text-gray-700">@lang('index.Paragraph10')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph11')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph12')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph13')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph14')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph15')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph16')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph17')</li>
                    <li class="text-base text-gray-700">@lang('index.Paragraph18')</li>
                </ol>
           </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
@endsection
