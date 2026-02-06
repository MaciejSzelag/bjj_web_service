<?php
// coaches bjj
$head_coach = 'Ian Harrop';
$coach_a = 'Elias Freeman';
$coach_b = 'Paul Roach';

//coaches wresling
$wresling_head_coach = 'Darrel Allen';

//coaches judo
$judo_head_coach = 'Paul Roach';

//Locations
$main_gym = 'Main Mat';

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
                    'class_name' => 'Gi BJJ - Adults',
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
                    'class_start' => '07:00',
                    'class_end' => '08:30',
                    'class_name' => 'No-Gi Advanced',
                    'class_coach' => 'Sarah Johnson',
                    'class_location' => 'Mat Room 1',
                ],
                'class_b' => [
                    'class_start' => '17:00',
                    'class_end' => '18:30',
                    'class_name' => 'Kids BJJ',
                    'class_coach' => 'Mike Chen',
                    'class_location' => 'Kids Area',
                ],
            ],
            
            'Wednesday' => [
                'class_a' => [
                    'class_start' => '09:00',
                    'class_end' => '10:30',
                    'class_name' => 'Morning Yoga',
                    'class_coach' => 'Lisa Wong',
                    'class_location' => 'Yoga Studio',
                ],
                'class_b' => [
                    'class_start' => '19:00',
                    'class_end' => '20:30',
                    'class_name' => 'Competition Training',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
            ],
            'Thursday' => [
                'class_a' => [
                    'class_start' => '09:00',
                    'class_end' => '10:30',
                    'class_name' => 'Morning Yoga',
                    'class_coach' => 'Lisa Wong',
                    'class_location' => 'Yoga Studio',
                ],
                'class_b' => [
                    'class_start' => '19:00',
                    'class_end' => '20:30',
                    'class_name' => 'Competition Training',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
            ],
            'Friday' => [
                'class_a' => [
                    'class_start' => '09:00',
                    'class_end' => '10:30',
                    'class_name' => 'Morning Yoga',
                    'class_coach' => 'Lisa Wong',
                    'class_location' => 'Yoga Studio',
                ],
                'class_b' => [
                    'class_start' => '19:00',
                    'class_end' => '20:30',
                    'class_name' => 'Competition Training',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
            ],
            'Saturday' => [
                'class_a' => [
                    'class_start' => '09:00',
                    'class_end' => '10:30',
                    'class_name' => 'Morning Yoga',
                    'class_coach' => 'Lisa Wong',
                    'class_location' => 'Yoga Studio',
                ],
                'class_b' => [
                    'class_start' => '19:00',
                    'class_end' => '20:30',
                    'class_name' => 'Competition Training',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
            ],
            'Sunday' => [
                'class_a' => [
                    'class_start' => '09:00',
                    'class_end' => '10:30',
                    'class_name' => 'Open Mat - Everyone is Welcome',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
                'class_b' => [
                    'class_start' => '19:00',
                    'class_end' => '20:30',
                    'class_name' => 'Competition Training',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
            ],
        ],

];