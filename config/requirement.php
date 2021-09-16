<?php

return [

    'phone' => [
        '10' => [
            'starts_with' => [
                '0' => [6, 7, 8, 9]
            ]
        ],
        '11' => [
            'starts_with' => [
                '0' => [0],
                '1' => [6, 7, 8, 9]
            ]
        ],
        '12' => [
            'starts_with' => [
                '0' => [9],
                '1' => [1],
                '2' => [6, 7, 8, 9]
            ]
        ]
    ],
    'group' => [
        'file' => [
            'extensionsList' => ['csv', 'txt', 'xls', 'xlsx', 'zip'],
            'size' => '10000' //10MB
        ],
        'groupNameSizeMin' =>'4',
        'groupNameSizeMax' =>'20',
        'showInvalidNumberListSize' => '10',

        /* For Request Form Validation we need to return string */

        'extensions' => 'csv,txt,xls,xlsx,zip',
        'fileSize' => '10000', //10MB
    ]


];
