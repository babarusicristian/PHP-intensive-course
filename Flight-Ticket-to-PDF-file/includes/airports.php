<?php

//https://www.world-airport-codes.com/world-top-30-airports.html

$airportsList = [
    [
        'name' => 'Hartsfield-Jackson Atlanta International Airport',
        'code' => '(ATL/KATL)',
        'timezone' => 'America/New_York (GMT -4:00)'
    ],
    [
        'name' => 'Beijing Capital International Airport',
        'code' => '(PEK/ZBAA)',
        'timezone' => 'Asia/Harbin (GMT +8:00)'
    ],
    [
        'name' => 'Dubai International Airport',
        'code' => '(DXB/OMDB)',
        'timezone' => 'Asia/Dubai (GMT +4:00)'
    ],
    [
        'name' => 'Los Angeles International Airport',
        'code' => '(LAX/KLAX)',
        'timezone' => 'America/Los_Angeles (GMT -7:00)'
    ],
    [
        'name' => 'Tokyo Haneda Airport',
        'code' => '(HND/RJTT)',
        'timezone' => 'Asia/Tokyo (GMT +9:00)'
    ],
    [
        'name' => 'O\'Hare International Airport',
        'code' => '(ORD/KORD)',
        'timezone' => 'America/Chicago (GMT -5:00)'
    ],
];

asort($airportsList);