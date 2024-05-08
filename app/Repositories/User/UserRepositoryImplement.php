<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{
  private $users;

  public function __construct(User $users)
  {
    $this->users = $users;
  }

  public function getAllUsers()
  {
    return $this->users->orderBy('id', 'desc')->get();
  }

  public function getUserById($id)
  {
    return $this->users->where('id', $id)->orderBy('id', 'desc')->get();
  }
}
