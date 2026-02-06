@props(['dayName', 'classes'])

@php
// Sortowanie klas według godziny rozpoczęcia
$sortedClasses = collect($classes)->sortBy('class_start')->toArray();
@endphp

<div class="w-auto h-full bg-brand-primary-color rounded-lg mb-6 m-10">
    <div class="w-full p-4">
        <div class="bg-slate-50 rounded-md">
            <div class="w-full">
                <h1 class="text-center font-anton-regular text-xl p-2">{{ $dayName }}</h1>
            </div>
        </div>
        <div class="w-full h-full mt-4 bg-slate-50 rounded-md p-2">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-brand-primary-color text-white rounded-lg">
                        <th class="p-3 text-start">Time</th>
                        <th class="p-3 text-start">Class Name</th>
                        <th class="p-3 text-start hidden lg:table-cell">Coach</th>
                        <th class="p-3 text-start hidden lg:table-cell">Location</th>
                        <th class="p-3 text-start">More</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sortedClasses as $class)
                    <tr
                        class="border-b border-slate-500 rounded-xl duration-150 hover:bg-slate-300 hover:border-slate-50">
                        <td class="p-2 font-bold">{{ $class['class_start'] }} - {{ $class['class_end'] }}</td>
                        <td class="p-2">{{ $class['class_name'] }}</td>
                        <td class="p-2 hidden lg:table-cell">{{ $class['class_coach'] }}</td>
                        <td class="p-2 hidden lg:table-cell">{{ $class['class_location'] }}</td>
                        <td class="p-2"><a href=""
                                class="block text-center rounded-md w-full h-full bg-slate-700 text-slate-100">More</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>