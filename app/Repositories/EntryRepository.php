<?php

namespace App\Repositories;

use App\Entry;

class EntryRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function allEntries()
    {
        return Entry::with('user')->with('comments')->orderBy('created_at', 'desc')->paginate(\Config::get('paginate.paginate_no'));
    }
}
