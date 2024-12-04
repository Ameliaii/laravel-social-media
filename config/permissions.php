<?php

return [
    'dynamic_policies' => [
        
        'App\Models\Post' => 'App\Policies\PostPolicy',
        'App\Models\Comment' => 'App\Policies\CommentPolicy',
    ],
];
