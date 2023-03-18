<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request,Post $post)
    {
        // Like::create([
        //     'user_id' => $request->user()->id,
        //     'post_id' => $post->id
        // ]);

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Request $request,Post $post)
    {
        $request->user()->likes()->wherePostId($post->id)->delete();

        return back();
    }
}
