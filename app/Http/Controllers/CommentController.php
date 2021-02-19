<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function recordComment()
    {
        $arrComment = request()->all();
        $objComment = new Comment();
        $objComment->comment = $arrComment['comment'];
        $objComment->movie_id = $arrComment['movieId'];
        if ($objComment->save()) {
            return json_encode(['status' => true]);
        }
        return json_encode(['status' => false]);
    }

    public function getComment($movieId)
    {
        $objComment = Comment::where('movie_id', (int)$movieId)->get();
        if($objComment->count() > 0){
            return json_encode([
                'status' => true,
                'objComment' => $objComment
            ]);
        }

        return json_encode(['status' => false]);
    }

    public function getCommentById($id){
        $objComment = Comment::find($id);
        return json_encode([
            'status' => true,
            'objComment' => $objComment
        ]);
    }

    public function updateComment(){
        $arrComment = request()->all();
        $objComment = Comment::find($arrComment['commentId']);
        $objComment->comment = $arrComment['editComment'];

        if($objComment->save()){
            return json_encode([
                'status' => true
            ]);
        }

        return json_encode([
            'status' => false
        ]);
    }
}
