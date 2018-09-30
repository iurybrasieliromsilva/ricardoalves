<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user)
    {
        if( $user->is_admin ){
            return true;
        }
    }

    public function destroy(User $user, Comment $comment)
    {
        return $user->id === $comment->user_id;
    }

}
