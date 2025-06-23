<?php

return [
    'feeds' => [
        'main' => [
            'items' => [App\Models\Post::class, 'getFeedItems'],
            'url' => '/feed',
            'title' => 'Il Blog di MIG Consulting',
            'description' => 'Ultimi articoli pubblicati sul nostro sito.',
            'language' => 'it-IT',
            'image' => '', // se vuoi, puoi aggiungere un logo assoluto tipo 'https://mig-consulting.it/logo.png'
            'format' => 'rss',
            'view' => 'feed::rss',
            'type' => 'application/rss+xml',
            'contentType' => 'application/rss+xml',
        ],
    ],
];
