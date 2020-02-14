<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Ad;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showComment(Comment $comment){
        return view('skelbimai.pages.komentaras', compact('comment'));
    }
    public function addComment(Ad $ad){
        Comment::create([
            'name' => request('name'),
            'comment' => request('comment'),
            'ad_id' => $ad->id,
            'user_id' => Auth()->id()

        ]);
        return back();
    }
}
