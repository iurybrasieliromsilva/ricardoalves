<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Photo;

class photoPolicy
{
    public function before($user)
    {
        return $user->is_admin;
    }

    public function create()
    {
        return false;
    }

    public function store()
    {
        return false;
    }
}
