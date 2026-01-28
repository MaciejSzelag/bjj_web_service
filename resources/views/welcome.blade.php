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
    <div id="m" class="w-full h-auto flex justify-center items-center bg-slate-300">

        <div
            class="w-[80%] h-auto p-10 bg-slate-600 rounded-xl mb-20 mt-20   text-slate-700 shadow-lg shadow-slate-700">

            <div class="w-full flex justify-center items-center flex-col text-blue-50">
                <div class="w-[80%] border-b border-slate-500 pb-10 mb-10 mt-10 ">
                    <p class="text-5xl text-center font-anton-regular ">
                        Why train BJJ at Checkmat in Plymouth?</p>
                </div>
                <div class="w-[95%] text-xl flex justify-between">

                    {{-- card --}}
                    <div
                        class="max-w-[355px] p-4 pb-0 bg-slate-700 rounded-lg border border-slate-500 shadow-xl  shadow-slate-700">

                        <div class="w-full  rounded-lg">
                            <div class="w-full h-[200px] overflow-hidden rounded-lg mb-2"><img class="w-full"
                                    src="{{asset('images/bjj_person_3d.png')}}" alt="">
                            </div>



                        </div>
                        <div class="p-5 border-b border-slate-500">
                            <h2 class="font-anton-regular text-center text-2xl">Professional BJJ Instructors in Plymouth
                            </h2>
                        </div>
                        <div class="p-5 text-lg border-b border-slate-500">
                            <p>
                                Our instructors are experienced BJJ practitioners with a deep understanding of the art.
                                They are dedicated to helping you progress in your Brazilian Jiu-Jitsu journey, whether
                                you’re a beginner or advanced student. Learn from the best in Plymouth!
                            </p>
                        </div>
                        <div class="p-5 text-lg  ">
                            <x-button-link :href="route('page.about')">
                                {{ __('About Us') }}
                            </x-button-link>
                        </div>

                    </div>
                    {{-- card --}}
                    {{-- card --}}
                    <div
                        class="max-w-[355px] p-4 pb-0 bg-slate-700 rounded-lg border border-slate-500 shadow-xl  shadow-slate-700">

                        <div class="w-full  rounded-lg">
                            <div class="w-full h-[200px] overflow-hidden rounded-lg mb-2"><img class="w-full"
                                    src="{{asset('images/bjj_person_3d.png')}}" alt="">
                            </div>



                        </div>
                        <div class="p-5 border-b border-slate-500">
                            <h2 class="font-anton-regular text-center text-2xl">Inclusive and Friendly BJJ Community
                            </h2>
                        </div>
                        <div class="p-5 text-lg border-b border-slate-500">
                            <p>
                                BJJ Community
                                At Checkmat in Plymouth, we believe that Brazilian Jiu-Jitsu is for everyone. Our gym is
                                a friendly and inclusive space where you can train BJJ, make new friends, and be part of
                                a supportive community.
                            </p>
                        </div>
                        <div class="p-5 text-lg  ">
                            <x-button-link :href="route('page.about')">
                                {{ __('About Us') }}
                            </x-button-link>
                        </div>

                    </div>
                    {{-- card --}}
                    {{-- card --}}
                    <div
                        class="max-w-[355px] p-4 pb-0 bg-slate-700 rounded-lg border border-slate-500 shadow-xl  shadow-slate-700">

                        <div class="w-full  rounded-lg">
                            <div class="w-full h-[200px] overflow-hidden rounded-lg mb-2"><img class="w-full"
                                    src="{{asset('images/bjj_person_3d.png')}}" alt="">
                            </div>



                        </div>
                        <div class="p-5 border-b border-slate-500">
                            <h2 class="font-anton-regular text-center text-2xl">Comprehensive Brazilian Jiu-Jitsu
                                Programs
                            </h2>
                        </div>
                        <div class="p-5 text-lg border-b border-slate-500">
                            <p>
                                We offer a wide range of BJJ classes in Plymouth to suit all ages and skill levels.
                                Whether you’re interested in beginner BJJ classes, advanced training, or children’s BJJ
                                programs, we have something for everyone.
                            </p>
                        </div>
                        <div class="p-5 text-lg  ">
                            <x-button-link :href="route('page.about')">
                                {{ __('About Us') }}
                            </x-button-link>
                        </div>

                    </div>
                    {{-- card --}}

                </div>
            </div>

        </div>
    </div>
    {{-- join us --}}
    <x-join-us />
    {{-- join us --}}
</x-layouts.main>