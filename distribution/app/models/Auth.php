<?php

class Auth
{
  public static function authenticate($user)
  {
    if ($user->roles == 'admin') {
      $_SESSION['admin'] = $user;
    } else {
      $_SESSION['student'] = $user;
    }
  }

  public static function logged_in()
  {
    return isset($_SESSION['admin']) || isset($_SESSION['student']);
  }

  public static function is_admin()
  {
    return isset($_SESSION['admin']);
  }

  public static function is_student()
  {
    return isset($_SESSION['student']);
  }
}