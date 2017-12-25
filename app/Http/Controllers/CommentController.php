<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;

class CommentController extends Controller
{

    public function store($movieId)
    {

        $this->validate(request(), ['content' => 'required']);

        $comment = new Comment;

        $comment->movie_id = $movieId;
        $comment->content = request('content');

        $comment->save();

        return redirect()->route('single-muvies', ['id'=>$movieId]);
    }
}

