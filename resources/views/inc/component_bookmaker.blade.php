<div class="border-b-2 flex justify-between flex-col relative border-violet-500 md:!border-gray-200 bg-white md:h-32">
    @if($authorized)
    <a href="{{route('admin.editBookmaker', $bookmaker['key'])}}" title="edit" class="absolute bottom-0 right-0 text-xs bg-gray-300 rounded-br-md rounded-tl-md w-5 h-5 flex justify-center items-center">&#x270F;</a>
    @endif
    <div class="justify-start flex md:hidden border-b-2 border-gray-200">
        <a href="{{$bookmaker['url']}}" target="_blank" class="flex md:hidden m-2 w-28 flex-shrink-0">
            <div class="w-28 h-28 rounded-full flex justify-center items-center my-auto" style="background-color: {{$bookmaker['logo_color']}}">
                <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" width="100" height="100">
            </div>
        </a>
        <div class="flex-col justify-around self-center flex w-full md:hidden">
            <div class="font-bold text-xs sm:text-base text-center">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
            <div class="flex bg-gray-300 rounded w-min pr-2 mx-auto">
                <p class="p-1 font-bold text-sm sm:text-base">{{$bookmaker['promo_code']}}</p>
                <a href="{{$bookmaker['url']}}" target="_blank" class="cope-promo-code" aria-label="Get promo code"></a>
            </div>
            <div class="text-xs sm:text-base text-center text-gray-500">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
        </div>
    </div>
    <div class="flex justify-center md:justify-between mb-2 md:my-auto">
        <div class="md:flex justify-center items-center mx-6 hidden">
            <p class="text-base font-bold">{{$iteration}}</p>
        </div>
        <a href="{{$bookmaker['url']}}" target="_blank" class="hidden md:flex">
            <div class="w-28 h-28 rounded-full flex justify-center items-center my-auto" style="background-color: {{$bookmaker['logo_color']}}">
                <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" width="100" height="100">
            </div>
        </a>
        <div class="flex-col px-2 justify-around self-center hidden xl:flex">
            <div class="text-violet-500 font-bold hidden md:block w-28">
                <a href="{{$bookmaker['url']}}" target="_blank" class="flex">{{$bookmaker['name']}}</a>
            </div>
        </div>
        <div class="flex flex-col justify-around self-center ml-2">
            <a href="{{route('review', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline text-center">@lang('index.Read Review')</a>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline text-center">@lang('index.Read Promo Code Review')</a>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline text-center">@lang('index.Read Mobile App Review')</a>
        </div>
        <div class="flex-col justify-around self-center hidden md:flex">
            <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
            <div class="text-center flex mx-auto">
                <p class="text-xs xl:text-base">@lang('index.Rate it')! (</p>
                <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                <p class="text-xs xl:text-base">)</p>
            </div>
            <div class="rate flex mx-auto justify-between lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                <input name="rate" value="1" type="checkbox" aria-label="One star">
                <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                <input name="rate" value="5" type="checkbox" aria-label="Five stars">
            </div>
        </div>
        <div class="flex-col justify-around self-center w-1/3 md:flex hidden">
            <div class="font-bold text-xs sm:text-base text-center">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
            <div class="flex bg-gray-300 rounded w-min pr-2 mx-auto">
                <p class="p-1 font-bold text-sm sm:text-base">{{$bookmaker['promo_code']}}</p>
                <a href="{{$bookmaker['url']}}" target="_blank" class="cope-promo-code" aria-label="Get promo code"></a>
            </div>
            <div class="text-xs sm:text-base text-center text-gray-500">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
        </div>
    </div>
</div>
