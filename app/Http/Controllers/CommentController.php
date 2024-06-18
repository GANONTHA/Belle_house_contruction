<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Exception;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // list of all comments

    public function store(Request $request)
    {
        try {
            $request->validate([
                'comment' => 'required',
                'blog_id' => 'required|exists:blogs,id',
            ]);
            $comment  = new Comment();

            $comment->user_id = auth()->id();
            $comment->blog_id = $request->blog_id;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back();
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    //delete a comment
    public function destroy($id)
    {
        try {
            $comment = Comment::find($id);
            if ($comment) {
                $comment->delete();
                return redirect()->back();
            }
            return response()->json(['error' => 'Comment not found'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
