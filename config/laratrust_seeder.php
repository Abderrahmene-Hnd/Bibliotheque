<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'owner' => [
            'user' => 'c,r,u,d',
            'book' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'author' => 'c,r,u,d',
            'profile' => 'r,u',
            'comment' => 'c'
        ],
        'admin' => [
            'book' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'author' => 'c,r,u,d',
            'profile' => 'r,u',
            'comment' => 'c'
        ],
        'manager' => [
            'book' => 'c,r',
            'category' => 'c,r',
            'author' => 'c,r',
            'profile' => 'r,u',
            'comment' => 'c'
        ],
        'client' => [
            'profile' => 'r,u',
            'comment' => 'c'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],

];
