<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $img_cards = [
            ['img-link'=>'images/bjj_person_3d.png',
            'alternative'=>'',
            'card-title'=>'Professional BJJ Instructors in Plymouth',
            'card-content'=> ' Our instructors are experienced BJJ practitioners with a deep understanding of the art.
            They are dedicated to helping you progress in your Brazilian Jiu-Jitsu journey, whether
            you\'re a beginner or advanced student. Learn from the best in Plymouth!',
            'btn-title'=>'About',
            'btn-route'=>'page.about'
            ],
            ['img-link'=>'images/bjj_person_3d.png',
            'alternative'=>'',
            'card-title'=>'Inclusive and Friendly BJJ Community',
            'card-content'=> 'BJJ Community At Checkmat in Plymouth, we believe that Brazilian Jiu-Jitsu is for everyone. Our gym is a friendly and inclusive space where you can train BJJ, make new friends, and be part of a supportive community.',
            'btn-title'=>'About',
            'btn-route'=>'page.about'
            ],
            ['img-link'=>'images/bjj_person_3d.png',
            'alternative'=>'',
                'card-title'=>'Comprehensive Brazilian Jiu-Jitsu Programs',
                'card-content'=> 'We offer a wide range of BJJ classes in Plymouth to suit all ages and skill levels. Whether you\'re interested in beginner BJJ classes, advanced training, or children\'s BJJ programs, we have something for everyone.',
                'btn-title'=>'About',
                'btn-route'=>'page.about'
            ],
        ];

        $small_cards = [
            ['title'=> 'Beginner Brazilian Jiu-Jitsu Classes in Plymouth', 
            'content'=>'New to Brazilian Jiu-Jitsu? Our beginner BJJ classes in Plymouth focus on the fundamentals of BJJ, including basic techniques, positioning, and grappling principles.',
            'btn-route'=>'page.about'
            ],
            ['title'=> 'Kids\' BJJ Classes in Plymouth', 
            'content'=>'Looking for Brazilian Jiu-Jitsu classes for kids in Plymouth? Our kids\' program teaches discipline, respect, and teamwork in a fun and engaging way.',
            'btn-route'=>'page.about'
            ],
            ['title'=> 'Advanced BJJ Training in Plymouth', 
            'content'=>'For experienced BJJ students in Plymouth, our advanced classes offer rigorous drills, sparring sessions, and competition-focused training.',
            'btn-route'=>'page.about'
            ],
    
            ['title'=> 'Wrestling for Brazilian Jiu-Jitsu', 
            'content'=>'Enhance your grappling skills with our Wrestling for Jiu-Jitsu classes in Plymouth. Wrestling techniques are essential for improving your takedowns, control, and overall effectiveness in Brazilian Jiu-Jitsu. Perfect for BJJ practitioners looking to gain a competitive edge.',
            'btn-route'=>'page.about'
            ],
            ['title'=> 'Judo for Jiu-Jitsu in Plymouth', 
            'content'=>'Master the art of throws and takedowns with our Judo for Jiu-Jitsu sessions in Plymouth. Judo complements BJJ by teaching effective standing techniques and grip fighting, crucial for gaining dominant positions and initiating ground control. Our dedicated Judo class helps BJJ practitioners refine their ability to transition smoothly from standing to the ground, enhancing their overall grappling game.',
            'btn-route'=>'page.about'],
        ];

        return view('welcome', compact('small_cards','img_cards'));
    }
    public function about(){
        $data = [
                    'page_title' => 'About Us - The Story Behind Checkmat Plymouth',
                    'page_img' => 'images/Checkmat-wallpaper.jpg',
                 
                ];

        return view('about', $data);
    }
    public function timetable(){

        $data = [
                'page_title' => 'Timetable',
                'page_img' => 'images/Checkmat-wallpaper.jpg',
        ];
        $schedule_data = [
            'Monday' => [
                'class_a' => [
                    'class_start' => '06:00',
                    'class_end' => '07:00',
                    'class_name' => 'GI Adults',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
                'class_b' => [
                    'class_start' => '10:00',
                    'class_end' => '11:00',
                    'class_name' => 'GI Adults',
                    'class_coach' => 'Ian Harrop',
                    'class_location' => 'Main Gym',
                ],
                'class_c' => [
                    'class_start' => '18:30',
                    'class_end' => '20:00',
                    'class_name' => 'GI Adults - Fundamentals',
                    'class_coach' => 'Elias Freeman',
                    'class_location' => 'Main Gym',
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
        ];
          return view('timetable', ['page_title' => $data['page_title'],
                                    'page_img'   => $data['page_img'],
                                    'schedule_data' => $schedule_data]);
    }
    public function contact(){
        $data = [
                        'page_title' => 'Conatct us',
                        'page_img' => 'images/Checkmat-team.png',
                    
                    ];
            return view('contact',$data);
        }
}
