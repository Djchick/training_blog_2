<?php

namespace App\Repositories;

use App\User;
use App\Follow;

class UserRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function unfollowings()
    {
        $followings = \Auth::user()->followings;
        return User::whereNotIn('id', $followings->lists('id'))->where('id', '!=', \Auth::user()->id)->get();
    }
    public function save($request)
    {
        $newFollower = new Follow;
        $newFollower->follow_id = $request->input('follow_id');
        $newFollower->user_id = \Auth::user()->id;
        return $newFollower->save();
    }
}
