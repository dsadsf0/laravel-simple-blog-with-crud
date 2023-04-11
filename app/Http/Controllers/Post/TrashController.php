<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class TrashController extends BaseController
{
    public function __invoke(Post $post)
    {
        $posts = Post::onlyTrashed()->paginate(10);

        return view('post.restore', compact('posts'));
    }
}
