<x-layouts.main title="Timetable">
    <x-page-header :page_title="$page_title" :page_img="$page_img">
        {{$page_title}}
    </x-page-header>

    <div class="w-full flex justify-center items-center">
        <div class="w-full xl:max-w-[1920px] p-10 ">
            <div class="w-full p-10 flex justify-center items-center flex-col  bg-slate-100 shadow-lg shadow-slate-900">
                <h1 class="text-4xl font-anton-regular text-center text-red-600 "><span
                        class="uppercase text-slate-900">Today's
                        Classes
                    </span><br> {{ date('l - d M Y')}}</h1>


            </div>
            <div class="w-full  p-10 pb-12 bg-white">


                @php
                $today = date('l');
                $currentTime = now()->format('H:i');

                @endphp


                @foreach($schedule_data as $dayName => $dayClasses)
                @if($dayName === $today)
                @foreach($dayClasses as $class)
                @if($currentTime < $class['class_start']) <div class="f-full flex justify-center items-center mb-8">
                    <p class="p-4 pr-12 pl-12 rounded-lg bg-teal-50 border border-teal-600 text-teal-600 text-3xl ">
                        <span class="font-bold">Next Class:</span> {{ $class['class_name'] }} | <span
                            class="font-bold">{{
                            $class['class_start']
                            }}</span> | {{$class['class_coach'] }} {{ $class['class_location'] }}
                    </p>
            </div>
            @break
            @endif
            @endforeach
            @endif
            @endforeach




            @if($isBankHoliday)
            {{-- holiday info --}}
            <div class="bg-red-100 border border-red-400 text-center text-red-700 px-4 py-3 rounded relative mb-6">
                <strong class="font-bold">Warning!</strong>
                <span class="block sm:inline">Today is {{ $holidayName }}, so today's Open Mat will run from 10:00
                    AM to
                    12:00 PM.
                    For more details, please check our chat group or call us <a href="tel:07111254365"
                        class="underline font-bold">07111
                        254365</a></span>
            </div>
            @endif



            <div class="w-full flex justify-center items-start flex-wrap">
                @php
                $today = date('l');
                @endphp

                @foreach($schedule_data as $dayName => $dayClasses)
                @if($dayName === $today)
                <x-schedule-day :dayName="$dayName" :classes="$dayClasses" />
                @endif
                @endforeach
            </div>

        </div>
        <div class="w-full p-10 bg-slate-100 border-b border-t border-slate-400 shadow-lg shadow-slate-500">
            <div class="w-full flex justify-center items-center ">
                <h1 class="text-4xl font-anton-regular ">Rest of the week schedule</h1>
            </div>
        </div>
        {{-- full timetable --}}
        <div class="w-full p-5">
            <div class="w-full flex justify-center items-start flex-wrap">
                {{-- card --}}
                @foreach($schedule_data as $dayName => $dayClasses)
                <x-schedule-day :dayName="$dayName" :classes="$dayClasses" />
                @endforeach
                {{-- card --}}
            </div>

        </div>
        {{-- full timetable --}}
        {{-- join us --}}
        <div class="">
            <x-join-us />
        </div>
        {{-- join us --}}
    </div>
</x-layouts.main>