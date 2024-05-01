<?php

namespace App\Constants;

class Roles {
  const ADMIN = "admin";
  const USER = "user";

  public function getAllRoles() {
    return [
      self::ADMIN,
      self::USER,
    ];
  }
}