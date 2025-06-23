<?php

return [
    'feeds' => [
        'main' => [
            // Recupera i post dal model Post
            'items' => [App\Models\Post::class, 'getFeedItems'],

            // URL dove sarà disponibile il feed RSS
            'url' => '/feed',

            // Titolo e descrizione del feed
            'title' => 'Il Blog di MIG Consulting',
            'description' => 'Ultimi articoli pubblicati sul nostro sito.',
            'language' => 'it-IT',

            // (Opzionale) URL di un'immagine da mostrare nel feed
            'image' => '',

            // Formato del feed (può essere anche 'rss')
            'format' => 'rss',

            // View utilizzata per rendere il feed
            'view' => 'feed::rss',

            // MIME type
            'type' => '',

            // Content-Type dell'header HTTP
            'contentType' => '',
        ],
    ],
];
