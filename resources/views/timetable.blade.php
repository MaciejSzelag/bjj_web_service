<x-layouts.main title="Timetable">
    <x-page-header :page_title="$page_title" :page_img="$page_img">
        {{$page_title}}
    </x-page-header>

    <div class="w-full">
        <div class="w-full p-10 border-b border-t border-slate-400 shadow-lg shadow-slate-600">
            <div class="w-full flex justify-center items-center ">
                <h1 class="text-4xl font-anton-regular">Clasess for {{ date('l - d M Y')}}</h1>
            </div>
        </div>
        <div class="w-full p-10">
            <div class="w-full flex justify-center items-start flex-wrap">
                @php $today = date('l'); @endphp

                @foreach($schedule_data as $dayName => $dayClasses)
                @if($dayName === $today)
                <x-schedule-day :dayName="$dayName" :classes="$dayClasses" />
                @endif
                @endforeach
            </div>

        </div>
        <div class="w-full p-10 bg-slate-100 border-b border-t border-slate-400 shadow-lg shadow-slate-500">
            <div class="w-full flex justify-center items-center ">
                <h1 class="text-4xl font-anton-regular ">Timetable for rest of the week</h1>
            </div>
        </div>
        <div class="w-full p-10">
            <div class="w-full flex justify-center items-start flex-wrap">
                {{-- card --}}
                @foreach($schedule_data as $dayName => $dayClasses)
                <x-schedule-day :dayName="$dayName" :classes="$dayClasses" />
                @endforeach
                {{-- card --}}
            </div>

        </div>
    </div>
</x-layouts.main>