@props(['img_link', 'alternative', 'card_title', 'btn_route', 'btn_title'])
{{-- card --}}
<div class="max-w-[355px] p-4 pb-0 bg-slate-700 rounded-lg border border-slate-500 shadow-xl  shadow-slate-700">
    <div class="w-full  rounded-lg">
        <div class="w-full h-[200px] overflow-hidden rounded-lg mb-2"><img class="w-full" src="{{asset($img_link)}}"
                alt="{{$alternative}}">
        </div>
    </div>
    <div class="p-5 border-b border-slate-500">
        <h2 class="font-anton-regular text-center text-2xl">{{$card_title}}
        </h2>
    </div>
    <div class="p-5 text-2lg border-b border-slate-500">
        <p>
            {{$slot}}
        </p>
    </div>
    <div class="p-5 text-lg">
        <x-button-link :href="route(trim($btn_route))">
            {{ __((string)$btn_title) }}
        </x-button-link>
    </div>
</div>
{{-- card --}}