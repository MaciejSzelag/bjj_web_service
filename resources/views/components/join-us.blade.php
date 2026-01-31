<div id="join-us" class="w-full h-auto flex justify-center items-center bg-slate-50 mb-10">

    <div class="w-[80%] h-auto p-10">

        <div class="w-full flex justify-center items-center flex-col ">

            <div class="w-[95%] text-xl flex justify-center rounded-lg overflow-hidden border border-slate-300">

                <div class="w-full  flex justify-center  bg-slate-800   shadow-xl  shadow-slate-700">
                    <div class="max-w-[40%] h-full ">
                        <div class="w-full  h-full bg-gray-300 rounded-lg">
                            <div class="w-full h-full overflow-hidden  "><img class="w-full scale-150"
                                    src="{{asset('images/Winner-Euro-2025.png')}}"
                                    alt="Aesme - winner nogi 2025 IBJJF - 2025">
                            </div>



                        </div>
                    </div>

                    <div class="w-auto p-4 pl-20 pr-20 text-slate-200 flex flex-col justify-center items-center">
                        <div class="p-5 pb-0 text-lg flex flex-col  items-center">
                            <div class="w-[80%] border-b border-slate-500 pb-10 mb-10 mt-10 ">
                                <h2 class="text-5xl text-center font-anton-regular ">
                                    Join Us</h2>
                            </div>
                            <p class="w-[80%]">
                                Ready to join the best Brazilian Jiu-Jitsu club in Plymouth? Contact Checkmat today
                                to schedule a free trial class. Whether you're interested in fitness, competition
                                our Plymouth BJJ academy is the perfect place to start.
                        </div>
                        <div class="w-full p-5 pt-0 text-lg  flex justify-evenly items-center">
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