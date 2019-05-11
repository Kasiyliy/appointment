<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCommentsRequest;


class CommentsController extends Controller
{
    public function index(){
        if (! Gate::allows('comments_access')) {
            return abort(401);
        }

        $comments = Comment::all();

        return view('admin.comments.index', compact('comments'));
    }

    public function create()
    {
        if (! Gate::allows('comment_create')) {
            return abort(401);
        }

        return view('admin.comments.create');
    }

    public function store(StoreCommentsRequest $request)
    {
        if (! Gate::allows('comment_create')) {
            return abort(401);
        }
        $comment = Comment::create($request->all());



        return redirect()->route('admin.comments.index');
    }

    public function destroy($id)
    {
        if (! Gate::allows('comment_delete')) {
            return abort(401);
        }
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('admin.comments.index');
    }
}
