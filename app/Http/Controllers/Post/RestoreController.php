<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class RestoreController extends BaseController
{
    public function __invoke(Post $post)
    {
        Post::withTrashed()->find($post)->restore();

        return redirect()->route('post.index');
    }
}
