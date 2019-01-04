<?php
return [
    'name' => 'Laravel',
    'title' => 'Laravel',
    'subtitle' => 'http://h1ml.com',
    'description' => 'h1ml个人博客',
    'author' => 'ZCG',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads'
    ],
    'contact_email' => env('MAIL_FROM')
];