<?php

namespace App\Http\Controllers;


class PostsController
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'first blog post',
            'my-second-post' => 'second blog post'
        ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'sorry that post was not found');
        }

        return view('posts', [
            'post' => $posts[$post]
        ]);

    }

}
