<?php

return [
    'hotels' => [
        'table' => 'hotels',
        'fields' => ['id', 'name', 'address', 'city', 'country'],
    ],
    'reservations' => [
        'table' => 'reservations',
        'fields' => ['id', 'hotel_id', 'room_type', 'check_in_date', 'check_out_date', 'guest_name', 'guest_email', 'status'],
    ],

    // 'usuario' =>[
    //     'table' => 'hotels',
    //     'fields' => ['id', 'user','password'],
    // ]
];