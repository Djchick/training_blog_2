<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CommentRepository;

class CommentsController extends Controller
{
    protected $comments;
    public function __construct(CommentRepository $comments)
    {
        $this->comments = $comments;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = \Auth::user()->id;
        $this->comments->createComment($input);
        return back();
    }
}
