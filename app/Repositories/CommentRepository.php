<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function createComment($input)
    {
        return Comment::create($input);
    }
}