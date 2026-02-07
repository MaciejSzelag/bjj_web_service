<?php
// coaches bjj
$head_coach = 'Ian Harrop';
$coach_a = 'Elias Freeman';
$coach_b = 'Paul Roach';
$coach_c = 'Nathan Haynes';

//coaches wresling
$wrestling_head_coach = 'Darrel Allen';

//coaches judo
$judo_head_coach = 'Paul Roach';

//locations
$main_gym = 'Main Mat';
$gym_a = 'MARJON UNIVERSITY';
$small_gym = 'Small Gym';

return [
        'timetable_header' => [
                'page_title' => 'Timetable',
                'page_img' => 'images/Checkmat-wallpaper.jpg',
        ],
        'schedule' => [
            'Monday' => [
                'class_a' => [
                    'class_start' => '06:00',
                    'class_end' => '07:00',
                    'class_name' => 'Gi BJJ Adults',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'Gi BJJ Adults',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_c' => [
                    'class_start' => '11:00',
                    'class_end' => '12:00',
                    'class_name' => 'Gi BJJ Pro Training - Adults',
                    'class_coach' => $head_coach,
                    'class_location' =>$main_gym,
                ],
                'class_d' => [
                    'class_start' => '17:30',
                    'class_end' => '18:15',
                    'class_name' => 'Judo with Gi BJJ (kids)',
                    'class_coach' => $coach_b,
                    'class_location' =>$main_gym,
                ],
                'class_e' => [
                    'class_start' => '18:30',
                    'class_end' => '19:15',
                    'class_name' => 'Gi Findamentals',
                    'class_coach' => $coach_a .'/'. $coach_b,
                    'class_location' =>$main_gym,
                ],
                'class_f' => [
                    'class_start' => '19:15',
                    'class_end' => '20:00',
                    'class_name' => 'Positional Sparring',
                    'class_coach' => $coach_a .'/'. $coach_b,
                    'class_location' =>$main_gym,
                ],
            ],
            
            'Tuesday' => [
                'class_a' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'NoGi Advanced',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '11:00',
                    'class_end' => '12:00',
                    'class_name' => 'NoGi Pro Training',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_c' => [
                    'class_start' => '12:00',
                    'class_end' => '13:00',
                    'class_name' => 'Wrestling (Adults)',
                    'class_coach' => $wrestling_head_coach,
                    'class_location' => $main_gym,
                ],
                'class_d' => [
                    'class_start' => '17:00',
                    'class_end' => '18:00',
                    'class_name' => 'KIDS & YOUTH CLASS',
                    'class_coach' => $head_coach,
                    'class_location' => $gym_a,
                ],
                'class_e' => [
                    'class_start' => '18:30',
                    'class_end' => '19:30',
                    'class_name' => 'NoGi BJJ (Adults, Juniors & Kids over 8 y/o)',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_f' => [
                    'class_start' => '19:30',
                    'class_end' => '20:30',
                    'class_name' => 'NoGi Positional Sparrings (Adults)',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
            ],
            
            'Wednesday' => [
                'class_a' => [
                    'class_start' => '06:00',
                    'class_end' => '07:00',
                    'class_name' => 'Gi BJJ Adults',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'Open Mat',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_c' => [
                    'class_start' => '19:00',
                    'class_end' => '20:00',
                    'class_name' => 'Gi BJJ',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_d' => [
                    'class_start' => '20:00',
                    'class_end' => '20:30',
                    'class_name' => 'Gi BJJ - Pro Training',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
            ],
            'Thursday' => [
                'class_a' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'NoGi BJJ',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '11:00',
                    'class_end' => '12:00',
                    'class_name' => 'NoGi Pro Training',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_c' => [
                    'class_start' => '18:30',
                    'class_end' => '20:00',
                    'class_name' => 'Gi Comp',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
            ],
            'Friday' => [
                'class_a' => [
                    'class_start' => '06:00',
                    'class_end' => '07:00',
                    'class_name' => 'NoGi BJJ',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '07:00',
                    'class_end' => '08:00',
                    'class_name' => 'Grappling Hour (Aduts & Juniors)',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_c' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'Gi BJJ',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
                'class_d' => [
                    'class_start' => '11:00',
                    'class_end' => '12:00',
                    'class_name' => 'Gi Pro Training',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
            
                'class_e' => [
                    'class_start' => '19:00',
                    'class_end' => '20:00',
                    'class_name' => 'Judo / Take Downs',
                    'class_coach' => $coach_b,
                    'class_location' => $main_gym,
                ],
            ],
            'Saturday' => [
                'class_a' => [
                    'class_start' => '07:00',
                    'class_end' => '08:30',
                    'class_name' => 'Gi BJJ (Adults)',
                    'class_coach' => $coach_c,
                    'class_location' => $main_gym,
                ],
                'class_b' => [
                    'class_start' => '14:30',
                    'class_end' => '15:30',
                    'class_name' => 'NoGi/Wrestling - KIDS ONLY',
                    'class_coach' => $wrestling_head_coach,
                    'class_location' => $main_gym,
                ],
           
            ],
            'Sunday' => [
                'class_a' => [
                    'class_start' => '09:30',
                    'class_end' => '10:15',
                    'class_name' => 'Gi BJJ (Kids)',
                    'class_coach' => $head_coach,
                    'class_location' => $small_gym ,
                ],
                'class_b' => [
                    'class_start' => '10:30',
                    'class_end' => '11:15',
                    'class_name' => 'Gi & NoGi BJJ - Kids Sparrings',
                    'class_coach' => $head_coach,
                    'class_location' => $small_gym,
                ],
           
                'class_c' => [
                    'class_start' => '10:30',
                    'class_end' => '12:30',
                    'class_name' => 'Open Mat (Adults & Juniors)',
                    'class_coach' => $head_coach,
                    'class_location' => $main_gym,
                ],
            ],
        ],  
     


    'classes' => [
        'Gi BJJ Adults (All Levels)' => 'Our core program for adults. A structured class providing a complete BJJ education: learning new techniques, specific training drills, positional strategy, and live sparring (rolling) in a controlled, respectful environment. Perfect for building a strong foundation and progressing at your own pace.',
        'Gi BJJ Pro Training - Adults' => 'An intense, high-paced session designed for ambitious practitioners and competitors. This class is heavily focused on extensive, challenging live sparring to push physical and technical limits, build elite-level stamina, and sharpen the competitive mindset. Recommended for experienced students.',
        'Gi Fundamentals' => 'The essential foundation for your Jiu-Jitsu journey. This class focuses exclusively on the fundamental principles, core movements, and key techniques that form the bedrock of the art. Ideal for beginners and invaluable for all belts to reinforce proper mechanics and concepts.',
        'Gi Competition Class ("Gi Comp")' => 'Specialized training for athletes preparing for tournaments. This session delves deep into competition rules, strategic points scoring, efficient match pacing, and game plan development. Focuses on the specific demands and intensity of the competition environment.',
        'NoGi BJJ (Adults, Juniors & Kids 8+)' => 'Dynamic training without the traditional kimono (Gi). This class focuses on control, submissions, and speed using holds on the body and legs. It incorporates techniques from modern submission grappling and is open to a wide range of ages (8+) and experience levels.',
        'NoGi Advanced' => 'Designed for experienced practitioners, this class explores complex techniques, advanced transitions, and the nuanced meta-game of high-level submission grappling. A deep understanding of fundamental NoGi concepts is required to get the most out of this detail-oriented session.',
        'Wrestling (Adults)' => 'Focuses on takedowns, body control, and relentless pressure from top positions. This class builds explosive power, dramatically improves your stand-up game for both Gi and NoGi, and enhances overall athleticism, toughness, and grappling fluency.',
        'Judo / Take Downs (Gi)' => 'A hybrid class dedicated to the standing phase of combat. Learn essential Judo throws and wrestling takedowns, with a focus on safe application, grip fighting, and control tailored for the BJJ ruleset. A must for developing a complete and effective grappling game.',
        'Positional Sparring (Gi)' => 'A highly effective, focused training method. Sessions start from a specific position (e.g., side control, back mount, guard). This allows for repetitive drilling of escapes, attacks, and transitions in a live but controlled context, accelerating skill development and problem-solving.',
        'NoGi Positional Sparring (Adults)' => 'The NoGi counterpart to our focused training method. Start from specific positions without the gi to work on speed, leverage, and submissions unique to the NoGi environment. Excellent for refining transitions and dealing with slippery, dynamic scenarios.',
        'Open Mat' => 'The student-led laboratory of the gym. No formal instruction—this time is yours. Drill techniques you\'re working on, ask partners for help, engage in specific situational sparring, or have friendly live rolls. Essential for personalizing your Jiu-Jitsu, recovering from injuries with specific drills, or preparing for competition.',
        'Kids & Youth Class' => 'Our foundational program for children and teenagers. We focus on building coordination, confidence, discipline, and fundamental grappling movements in a fun, safe, and supportive environment. Bullying prevention, respect, and positive social skills are core elements of every class.',
        'Judo with Gi BJJ (Kids)' => 'A fantastic blend for young grapplers. Children learn the dynamic throwing techniques of Judo, developing balance, posture, and spatial awareness, combined with the ground control and submissions of BJJ. Provides a well-rounded, athletic, and fun start to martial arts.',
        'NoGi / Wrestling - KIDS ONLY' => 'A high-energy, fun class where kids learn the fundamentals of NoGi grappling and wrestling. Emphasis is on movement, basic takedowns, positional control, and body awareness. Designed to build a solid athletic base, burn energy, and instill a love for grappling in a safe, playful setting.',
    ],
  
];