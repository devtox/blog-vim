<?php

return [
    'production' => true,
    'baseUrl' => 'https://vim.monster',
    'site' => [
        'title' => 'Vim.monster',
        'description' => 'Blog of a vim fan.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'vim.monster',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/johndoe',
        'github' => 'https://github.com/johndoe',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
