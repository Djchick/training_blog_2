<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    protected $users;
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherUsers = $this->users->unfollowings();
        return view('user.index', compact('otherUsers'));      
    }
}
