<div id="join-us" class="w-full h-auto flex justify-center items-center bg-slate-50">

    <div class="w-[80%] h-auto p-10 bg-slate-900 rounded-xl mb-20 mt-20   text-slate-700 shadow-lg shadow-slate-700">

        <div class="w-full flex justify-center items-center flex-col text-blue-50">
            <div class="w-[80%] border-b border-slate-500 pb-10 mb-10 mt-10 ">
                <h2 class="text-5xl text-center font-anton-regular ">
                    Join Us</h2>
            </div>
            <div class="w-[95%] text-xl flex justify-center">

                <div
                    class="w-full flex justify-center p-4 pb-0 bg-slate-50 rounded-lg border border-slate-500 shadow-xl  shadow-slate-700">
                    <div class="max-w-[40%]">
                        <div class="w-full  rounded-lg">
                            <div class="w-full h-full overflow-hidden rounded-lg mb-2"><img class="w-full"
                                    src="{{asset('images/Winner-Euro-2025.png')}}"
                                    alt="Aesme - winner nogi 2025 IBJJF - 2025">
                            </div>



                        </div>
                    </div>

                    <div class="w-auto pl-20 pr-20 text-slate-950 flex flex-col justify-center">
                        <div class="p-5 pb-0 text-lg ">
                            {{-- <div class="p-5 border-b border-slate-500">
                                <h2 class="font-anton-regular text-center text-4xl">Join Us
                                </h2>
                            </div> --}}
                            <p>
                                Ready to join the best Brazilian Jiu-Jitsu club in Plymouth? Contact Checkmat today
                                to schedule a free trial class. Whether you're interested in fitness, competition
                                our Plymouth BJJ academy is the perfect place to start.
                        </div>
                        <div class="p-5 pt-0 text-lg  flex justify-evenly">
                            <x-button-link :href="route('page.contact')">
                                {{ __('Conatct Us') }}
                            </x-button-link>
                            <x-button-link :href="route('page.contact')">
                                {{ __('Memberships') }}
                            </x-button-link>
                        </div>
                    </div>


                </div>
                {{-- card --}}


            </div>
        </div>

    </div>
</div>