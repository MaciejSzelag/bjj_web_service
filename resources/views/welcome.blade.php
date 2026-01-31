<x-layouts.main title="Home Page">
    <header class=" w-full h-[100vh] flex justify-center items-center flex-col pb-20 text-brand-primary-color">

        <div class=" w-[30%]  flex justify-center items-center ">
            <div class="w-[35%] h-auto flex justify-center items-center">
                <img src=" {{asset('images/checkmat_logo_3D.PNG')}}" alt="">

            </div>
        </div>
        <div class="w-full h-auto flex justify-center items-center flex-col-reverse  ">
            <div class="w-[80%] flex justify-center items-center flex-col translate-y-20 ">
                <h1 class="text-8xl font-anton-regular uppercase">Checkmat Plymouth</h1>
                <h2 class="font-anton-regular mt-5 text-4xl">Start Your BJJ Journey in Plymouth</h2>
                {{-- <p class="font-anton-regular mt-10 text-2xl">Build your self-confidence, fitness and learn real
                    self-defense under the guidance of black belts.</p> --}}
                {{-- <a class="font-anton-regular">MORE</a> --}}
                <x-button-link href="#more">
                    Read more
                </x-button-link>
            </div>

        </div>
    </header>
    <div id="more" class="w-full h-auto flex justify-center items-center bg-slate-200">

        <div
            class="w-[60%] h-auto p-10 bg-brand-primary-color rounded-xl mb-20 mt-20 text-slate-700 shadow-lg shadow-slate-700">

            <div class="w-full flex justify-center items-center flex-col text-blue-50">
                <div class="w-[80%]">
                    <p class="text-5xl text-center mb-10 font-anton-regular">Are you looking for <br /> Brazilian
                        Jiu-Jitsu in
                        Plymouth?</p>
                </div>
                <div class="w-[80%] text-xl">
                    <p>Looking for the best Brazilian Jiu-Jitsu (BJJ) training in Plymouth?
                        Checkmat Plymouth offers top-tier instruction in a welcoming and inclusive environment.
                        Whether you're new to BJJ or an experienced practitioner, our Plymouth-based BJJ academy is the
                        perfect
                        place to improve your skills, fitness, and confidence.</p>
                </div>
                <div class="w-[80%] flex justify-between mt-4">
                    <div>
                        <x-button-link :href="route('page.about')">
                            {{ __('About Us') }}
                        </x-button-link>
                    </div>
                    <div>
                        <x-button-link :href="route('page.contact')">
                            {{ __('Contact') }}
                        </x-button-link>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="more" class="w-full h-auto p-10 pt-20 pb-20 flex justify-center items-center bg-slate-800 ">


        <div class="w-[90%] h-[80vh] bg-no-repeat bg-center bg-cover rounded-lg"
            style="background-image: url(/images/Checkmat-team.png)">
            <div class="w-full h-full bg-slate-950/70 flex justify-center items-center p-60">
                <figure class="font-anton-regular text-white">
                    <blockquote>
                        <p class="text-6xl font-anton-regular">You don’t need to be in shape to start Jiu-Jitsu. You
                            start Jiu-Jitsu to get
                            in shape.</p>
                    </blockquote>
                    <figcaption class="mt-6 text-4xl text-gray-300">— <i>Joe Rogan</i></figcaption>
                </figure>
            </div>

        </div>
    </div>
    <div id="why-checkmat" class="w-full h-auto flex justify-center items-center bg-slate-300">

        <div
            class="w-[80%] h-auto p-10 bg-slate-600 rounded-xl mb-20 mt-20   text-slate-700 shadow-lg shadow-slate-700">

            <div class="w-full flex justify-center items-center flex-col text-blue-50">
                <div class="w-[80%] border-b border-slate-500 pb-10 mb-10 mt-10 ">
                    <p class="text-5xl text-center font-anton-regular ">
                        Why train BJJ at Checkmat in Plymouth?</p>
                </div>
                <div class="w-[95%] text-xl flex justify-between">

                    @foreach ($img_cards as $card)
                    <x-img-cards :img_link="$card['img-link']" :alternative="$card['alternative']"
                        :card_title="$card['card-title']" :btn_route="$card['btn-route']"
                        :btn_title="$card['btn-title']">
                        {{ $card['card-content'] }}
                    </x-img-cards>

                    @endforeach


                </div>
            </div>

        </div>
    </div>
    {{-- join us --}}
    <x-join-us />
    {{-- join us --}}
    <div id="Programs" class="w-full h-auto flex justify-center items-center bg-slate-300">

        <div
            class="w-[80%] h-auto p-10 bg-slate-600 rounded-xl mb-20 mt-20   text-slate-700 shadow-lg shadow-slate-700">

            <div class="w-full flex justify-center items-center flex-col text-blue-50">
                <div class="w-[80%] border-b border-slate-500 pb-10 mb-10 mt-10 ">
                    <p class="text-5xl text-center font-anton-regular ">
                        Our BJJ Programs in Plymouth</p>
                </div>
                <div class="w-[95%] text-xl flex justify-evenly items-center flex-wrap text-brand-primary-color">

                    {{-- cards --}}
                    @foreach ($small_cards as $card )
                    <x-small-card :btn_route="$card['btn-route']">
                        <x-slot:title>
                            {{$card['title']}}
                        </x-slot:title>
                        {{$card['content']}}
                    </x-small-card>
                    @endforeach
                    {{-- cards --}}


                </div>
                {{-- <div class=" w-[80%] flex justify-between mt-4">
                    <div>
                        <x-button-link :href="route('page.about')">
                            {{ __('About Us') }}
                        </x-button-link>
                    </div>
                    <div>
                        <x-button-link :href="route('page.contact')">
                            {{ __('Contact') }}
                        </x-button-link>
                    </div>
                    <div>
                        <x-button-link :href="route('page.contact')">
                            {{ __('Contact') }}
                        </x-button-link>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>

</x-layouts.main>