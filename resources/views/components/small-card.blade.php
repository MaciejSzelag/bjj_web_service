@props(['btn_route'])
{{-- card --}}
<div
    class="max-w-[455px]  m-6 p-8 bg-slate-100 rounded-lg border border-slate-500 shadow-xl shadow-slate-700 duration-300 hover:scale-110">
    <div class="p-5 border-b border-slate-500">
        <h2 class="font-anton-regular text-center text-2xl">
            {{$title}}
        </h2>
    </div>
    <div class="p-5 text-lg border-b border-slate-500">
        <p>
            {{$slot}}
        </p>
    </div>
    <div class="p-5 text-lg">
        <x-button-link :href="route(trim($btn_route))">
            {{ __('Read More') }}
        </x-button-link>
    </div>
</div>
{{-- card --}}