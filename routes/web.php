<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => [
            [
                'id' => 1,
                'title' => 'judul 1',
                'slug' => 'judul-1',
                'author' => 'Nanda Nur Ikhsan',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem blanditiis quidem facere atque, inventore ad. Odio sint, maxime sunt nam cumque earum inventore ad aliquid? Molestias amet ipsam eos sequi exercitationem culpa perspiciatis iste? Necessitatibus, iste atque. Nulla necessitatibus, reiciendis, vitae quos veniam expedita placeat eveniet voluptatum perferendis libero voluptate.'
            ],
            [
                'id' => 2,
                'title' => 'judul 2',
                'slug' => 'judul-2',
                'author' => 'Nanda Nur Ikhsan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident accusantium voluptates totam quo dolore dolor, necessitatibus a ipsum veniam cum nostrum voluptate quasi velit blanditiis. Animi cupiditate doloremque nulla quia officia nam repellat fugiat facilis reiciendis deserunt? Eligendi facilis esse aliquam eveniet labore iusto voluptatum impedit, fugiat laboriosam excepturi vel.'
            ]
        ]

    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'judul 1',
            'slug' => 'judul-1',
            'author' => 'Nanda Nur Ikhsan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem blanditiis quidem facere atque, inventore ad. Odio sint, maxime sunt nam cumque earum inventore ad aliquid? Molestias amet ipsam eos sequi exercitationem culpa perspiciatis iste? Necessitatibus, iste atque. Nulla necessitatibus, reiciendis, vitae quos veniam expedita placeat eveniet voluptatum perferendis libero voluptate.'
        ],
        [
            'id' => 2,
            'title' => 'judul 2',
            'slug' => 'judul-2',
            'author' => 'Nanda Nur Ikhsan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident accusantium voluptates totam quo dolore dolor, necessitatibus a ipsum veniam cum nostrum voluptate quasi velit blanditiis. Animi cupiditate doloremque nulla quia officia nam repellat fugiat facilis reiciendis deserunt? Eligendi facilis esse aliquam eveniet labore iusto voluptatum impedit, fugiat laboriosam excepturi vel.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
