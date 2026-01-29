{{-- <footer class="w-full bg-slate-950 p-4">


</footer> --}}
<footer class="w-full bg-brand-primary-color text-slate-100 border-t border-slate-200">
    <div class="w-full">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="flex justify-between">

                <div class="col-span-1 md:col-span-1">
                    <a href="/" class="flex items-center mb-4">
                        <span class="max-w-[60px] text-2xl font-anton-regular tracking-wider text-white"><img
                                src="{{asset('images/Checkmat-plymouth-logo.jpg')}}" alt=""></span>
                    </a>
                    <p class="text-sm leading-relaxed text-slate-400 max-w-[355px]">
                        Ready to join the best Brazilian Jiu-Jitsu club in Plymouth? Contact Checkmat today
                        to schedule a free trial class. Whether you're interested in fitness, competition
                        our Plymouth BJJ academy is the perfect place to start.
                    </p>
                    <div class="flex mt-6 space-x-4">
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Navigation</h3>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('page.home') }}" class="hover:text-blue-400 transition-colors"> {{
                                __('Home Page') }}</a>
                        </li>
                        <li><a href="{{ route('page.about') }}" class="hover:text-blue-400 transition-colors"> {{
                                __('About Us') }}</a>
                        </li>
                        <li><a href="{{ route('page.contact') }}" class="hover:text-blue-400 transition-colors"> {{
                                __('Contact')}}</a>
                        </li>
                        <li><a href="{{ route('login')}}" class="hover:text-blue-400 transition-colors"> {{
                                __('Log in') }}</a>
                        </li>
                        <li><a href="{{ route('register')}}" class="hover:text-blue-400 transition-colors"> {{
                                __('Register') }}</a>
                        </li>

                    </ul>
                </div>



                <div>
                    <h3 class="text-white font-bold mb-6 uppercase text-sm tracking-widest">Stay up to date</h3>
                    <form class="mt-4">
                        <div class="flex flex-col space-y-2">
                            <input type="email" placeholder="TYour e-mail"
                                class="bg-slate-800 border border-slate-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:border-blue-500 transition-all">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-lg transition-colors">
                                Sign up
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="mt-12 pt-8 border-t border-slate-500 text-center text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} bjjplymouth - Ian Harrop</p>
            </div>
        </div>
    </div>
</footer>