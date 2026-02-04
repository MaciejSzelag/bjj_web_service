<x-layouts.main title="About Us">
    <x-page-header :page_title="$page_title" :page_img="$page_img">
        {{$page_title}}
    </x-page-header>
    <div class="max-w-[1440px] p-10 pt-20 pb-20 text-xl">
        <div class="w-full h-full flex justify-center items-center flex-col ">
            <div class="w-full mb-20 flex justify-center items-center flex-col ">

                <div
                    class="w-full mb-20 mt-10 pb-10 flex justify-center items-center flex-col  bg-slate-600 rounded-xl">
                    <div class="w-[80%]  p-10 text-slate-200 space-y-6">
                        <p class="text-center font-anton-regular text-6xl">BJJ Plymouth Founder and instructors </p>
                    </div>
                    <div
                        class="w-[80%] flex justify-evenly items-start flex-wrap  rounded-lg shadow-lg p-10 text-slate-900 ">
                        <div
                            class="w-2/5  bg-gray-100 flex justify-center items-center flex-col space-y-4 mb-6 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            <p class="font-anton-regular text-xl">Ian Harrop</p>
                            <p class="text-lg">Lead Instructor Ian Harrop has been immersed in martial arts from a young
                                age, exploring various disciplines before discovering Brazilian Jiu-Jitsu (BJJ) in 2007.
                                Instantly captivated by the sport, Ian dedicated himself fully to mastering BJJ,
                                traveling the globe to compete, train, and learn from some of the greatest names in the
                                sport. His relentless pursuit of excellence and his passion for continuous improvement
                                have defined his journey in BJJ..</p>
                        </div>
                        <div
                            class="w-2/5 bg-gray-100 flex justify-center items-center flex-col space-y-4 mb-6 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            <p class="font-anton-regular text-xl">Instruction and Training Philosophy</p>
                            <div>
                                <img src="{{asset('images/bjj_person_3d_1.PNG')}}"
                                    alt="Ian Harrop - Founder and Lead Instructor at Checkmat Plymouth (bjjplymouth)">
                            </div>
                        </div>
                        <div
                            class="w-2/5 bg-gray-100 flex justify-center items-center flex-col space-y-4 mb-6 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            {{-- <p class="font-anton-regular text-xl">Instruction and Training Philosophy</p> --}}
                            <p class="text-lg">Ian continues to compete sporadically, however has chosen to focus more
                                on his students & coaching. He holds a BSc in Strength, Conditioning & Sports Coaching,
                                Ian has a holistic approach to athletic development. His background in physical
                                preparation complements his BJJ coaching, equipping his students with a well-rounded
                                approach to training that enhances their performance on the mat.

                                Whether he’s coaching a beginner or a seasoned competitor, Ian's passion for the sport
                                and his commitment to his students’ growth are at the heart of everything he does. At
                                Checkmat Plymouth, Ian continues to inspire, mentor, and shape the next generation of
                                martial artists.
                            </p>
                        </div>
                        <div
                            class="w-2/5 bg-gray-100 flex justify-center items-center flex-col space-y-4 mb-6 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            {{-- <p class="font-anton-regular text-xl">Instruction and Training Philosophy</p> --}}
                            <p class="text-lg">Checkmat Plymouth offers classes for various skill levels, from beginners
                                to advanced
                                practitioners, and often includes specialized classes for children and adults. Their
                                training typically emphasizes both the self-defense aspects of Brazilian Jiu-Jitsu and
                                the sport's competitive elements. The academy may also host seminars featuring prominent
                                Checkmat black belts and world champions, providing members with opportunities to learn
                                from some of the best in the world.</p>
                        </div>

                    </div>
                </div>


            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div class="w-[80%]  rounded-lg  p-10 text-slate-900 ">
                    <h1 class="text-center font-anton-regular text-6xl">History of Checkamt Plymouth</h1>

                </div>
                <div
                    class="w-[80%] h-full flex justify-center items-center flex-col bg-slate-900 rounded-lg shadow-lg p-10 text-slate-100 space-y-6">
                    <p class="text-center font-anton-regular text-4xl pb-6 mb-4 border-b border-slate-100 pl-10 pr-10">
                        Welcome</p>
                    <div class="w-[90%]  space-y-6 pb-6">
                        <p>Checkmat Plymouth your premier destination for Brazilian Jiu-Jitsu (BJJ) and
                            martial arts training in
                            the
                            heart of Plymouth. Established in 2018, we are proud to be an official affiliate of Checkmat
                            (founded by
                            Leo Vieira in 2008), one of the most respected affiliations in the BJJ world. Since our
                            founding,
                            we've
                            dedicated ourselves to providing top-tier instruction in BJJ, fostering a welcoming and
                            supportive
                            environment for practitioners of all levels—from complete beginners to advanced competitors.
                        </p>
                        <p>In response to the growing demand for a comprehensive martial arts experience, we've recently
                            expanded
                            our curriculum to include Judo and Wrestling. This evolution allows us to offer a broader
                            range
                            of
                            skills and techniques, creating well-rounded martial artists who are equipped to excel in
                            multiple
                            disciplines. Whether you're looking to improve your ground game, master throws, or enhance
                            your
                            wrestling skills, Checkmat Plymouth has something for everyone.</p>
                    </div>

                </div>
            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div
                    class="w-[60%]  bg-slate-100 rounded-lg shadow-lg shadow-slate-400 p-10 text-slate-100 border border-slate-300 space-y-6">
                    <div class="w-full  overflow-hidden rounded-lg ">

                        <img src="{{asset('/images/Checkmat-team.png')}}" alt="" class="w-full h-full object-cover">

                    </div>
                </div>
            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div class="w-[80%]  p-10 text-slate-900 space-y-6">
                    <p class="text-center font-anton-regular text-6xl">Our Goal</p>
                </div>
                <div class="w-[80%] bg-slate-900 rounded-lg shadow-lg p-10 text-slate-100 space-y-6">
                    <p>Our goal is to cultivate a strong sense of community and personal growth, both on and off the
                        mat.
                        With
                        our world-class coaching, modern facilities, and a commitment to excellence, we're here to help
                        you
                        achieve your full potential—no matter your martial arts goals. Join us and become part of the
                        Checkmat
                        family!</p>
                </div>
            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div class="w-[20%]  bg-white mt-20">
                    <div class="w-full h-full  overflow-hidden rounded-lg ">

                        <img src="{{asset('/images/Checkmat_logo_3D.png')}}" alt="" class="object-cover">

                    </div>
                </div>
            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div class="w-[80%]  p-10 text-slate-900 space-y-6">
                    <p class="text-center font-anton-regular text-6xl">Affiliation with Checkmat</p>
                </div>
                <div class="w-[80%] bg-slate-600 rounded-lg shadow-lg p-10 text-slate-100 space-y-6">
                    <p>Bjjplymouth is an affiliate of the Checkmat team, which has branches worldwide. This affiliation
                        connects the Plymouth academy to a broader network of practitioners and competitors, giving its
                        members access to top-level instruction, seminars, and competition training. The Checkmat
                        network is
                        known for its emphasis on technique, competition, and the sharing of knowledge across its global
                        academies.</p>
                </div>
            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div
                    class="w-[30%]  mb-10 bg-slate-100 rounded-lg shadow-lg shadow-slate-400 p-10 text-slate-100 border border-slate-300 space-y-6">
                    <div class=" w-full h-full overflow-hidden rounded-lg ">

                        <img src=" {{asset('/images/bjj_person_3d.PNG')}}" alt="" class="object-cover">

                    </div>
                </div>
                <div class="w-full mb-20 mt-10 flex justify-center items-center flex-col bg-slate-600 rounded-xl">
                    <div class="w-[80%]  p-10 text-slate-200 space-y-6">
                        <p class="text-center font-anton-regular text-6xl">Foundation and Growth</p>
                    </div>
                    <div class="w-[80%] bg-slate-50 rounded-lg shadow-lg p-10 text-slate-900 space-y-6 translate-y-10">
                        <p>The specific history of Checkmat Plymouth is closely tied to its founders and instructors,
                            who
                            have
                            brought their own experience and dedication to the art of Brazilian Jiu-Jitsu to the
                            academy.
                            While
                            detailed founding dates and individual histories of instructors might not be widely
                            publicized,
                            local BJJ communities often know the reputation of these individuals, particularly those who
                            have
                            trained and competed extensively.</p>
                    </div>
                </div>
                <div class="w-full mb-20 mt-10 flex justify-center items-center flex-col bg-slate-600 rounded-xl ">
                    <div class="w-[80%]  p-10 text-slate-200 space-y-6">
                        <p class="text-center font-anton-regular text-6xl pb-5 border-b border-slate-400">Checkmat
                            organization</p>
                    </div>
                    <div class="w-[80%] bg-slate-50 rounded-lg shadow-lg p-10  text-slate-900 space-y-6 translate-y-10">
                        <p>Checkmat Plymouth is a Brazilian Jiu-Jitsu (BJJ) academy located in Plymouth, United Kingdom.
                            It
                            is a part of the larger Checkmat organization, which is a globally recognized Brazilian
                            Jiu-Jitsu team founded in 2008 by Leo Vieira, a multiple-time BJJ world champion. Checkmat
                            has a
                            reputation for producing high-level competitors and is known for its competitive success in
                            international tournaments.</p>
                    </div>
                </div>

            </div>
            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div
                    class="w-[100%]  bg-slate-100 rounded-lg shadow-lg shadow-slate-400 p-10 text-slate-100 border border-slate-300 space-y-6">
                    <div class="w-full h-[500px] overflow-hidden rounded-lg ">

                        <img src="{{asset('/images/Checkmat-team.png')}}" alt="" class="w-full -translate-y-60 ">

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- join us --}}
    <x-join-us />
    {{-- join us --}}
    <div class="max-w-[1440px] p-10 pt-20 pb-20 text-xl">
        <div class="w-full h-full flex justify-center items-center flex-col ">
            <div class="w-full mb-20 flex justify-center items-center flex-col ">

                <div class="w-full mb-20 mt-10 pb-10 flex justify-center items-center flex-col bg-slate-600 rounded-xl">
                    <div class="w-[80%]  p-10 text-slate-200 space-y-6">
                        <p class="text-center font-anton-regular text-6xl">Instruction and Training Philosophy</p>
                    </div>
                    <div
                        class="w-[80%] flex justify-evenly items-start bg-slate-50 rounded-lg shadow-lg p-10 text-slate-900 ">
                        <div
                            class="w-2/5 bg-gray-100 flex justify-center items-center flex-col space-y-4 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            <p class="font-anton-regular text-xl">Instruction and Training Philosophy</p>
                            <p class="text-lg">Checkmat Plymouth offers classes for various skill levels, from beginners
                                to advanced
                                practitioners, and often includes specialized classes for children and adults. Their
                                training typically emphasizes both the self-defense aspects of Brazilian Jiu-Jitsu and
                                the sport's competitive elements. The academy may also host seminars featuring prominent
                                Checkmat black belts and world champions, providing members with opportunities to learn
                                from some of the best in the world.</p>
                        </div>
                        <div
                            class="w-2/5 bg-gray-100 flex justify-center items-center flex-col space-y-4 border border-slate-300 rounded-xl p-10 shadow-xl shadow-gray-400">
                            <p class="font-anton-regular text-xl">Community and Competitions</p>
                            <p class="text-lg">Like many BJJ academies, Checkmat Plymouth likely fosters a strong
                                community spirit among its members, encouraging participation in local, national, and
                                international competitions. The success of the academy's competitors in tournaments is a
                                point of pride and a reflection of the quality of instruction they receive.</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="w-full mb-20 flex justify-center items-center flex-col ">
                <div class="w-[80%]  rounded-lg  p-10 text-slate-900 ">
                    <h1 class="text-center font-anton-regular text-6xl">Conclusion</h1>

                </div>
                <div
                    class="w-[80%] h-full flex justify-center items-center flex-col bg-slate-900 rounded-lg shadow-lg p-10 text-slate-100 space-y-6">

                    <div class="w-[90%]  space-y-6 pb-6">
                        <p><span class="text-2xl text-slate-200 font-bold">Checkmat Plymouth </span>plays a vital role
                            in the broader
                            Checkmat network, offering its students
                            access to world-class training and a rich competitive heritage. The influence of top
                            competitors like Marcus "Buchecha" Almeida, Leo Vieira, Lucas Leite, and others helps shape
                            the training and competitive environment at Checkmat academies worldwide. Checkmat Plymouth
                            benefits from this strong network, fostering both a sense of community and excellence among
                            its practitioners. Whether training for self-defense, personal development, or competition,
                            students at Checkmat Plymouth are part of a storied legacy of Brazilian Jiu-Jitsu.
                        </p>

                    </div>

                </div>
            </div>



        </div>
    </div>
</x-layouts.main>