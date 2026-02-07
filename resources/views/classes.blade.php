<x-layouts.main title="About Us">
    <x-page-header :page_title="$page_title" :page_img="$page_img">
        {{$page_title}}
    </x-page-header>
    <div class="max-w-[1440px] p-10 pt-20 pb-20 text-xl">
        <div class="w-full h-full flex justify-center items-center flex-col ">
            <div class="xl:min-w-[60%] w-auto  p-10 text-white h-full bg-brand-primary-color rounded-lg mb-6 m-10">
                @foreach($allClasses as $className => $description )
                <div class="class-item mb-14">
                    <h3 class="font-bold uppercase text-2xl pb-4 border-b border-slate-100">{{ $className }}</h3>
                    <div class="p-4 mt-4 bg-slate-100 text-slate-900 rounded-lg">
                        <p>{{ $description}}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- join us --}}
    <x-join-us />
    {{-- join us --}}

</x-layouts.main>