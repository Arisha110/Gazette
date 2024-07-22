<?php

namespace Drupal\myform\Service;

use PhpParser\Node\Expr\FuncCall;

class ValidationService {

  /**
   * Validate the given email address.
   *
   * @param string $email
   *   The email address to validate.
   *
   * @return bool
   *   TRUE if the email is valid, FALSE otherwise.
   */
  public function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE;
  }

  /**
   * Validate the given name to ensure it contains only alphabets.
   *
   * @param string $name
   *   The name to validate.
   *
   * @return bool
   *   TRUE if the name is valid, FALSE otherwise.
   */
  public function isValidName($name) {
    return preg_match('/^[a-zA-Z]+$/', $name);
  }

  public function isValidAge($age){
      return ctype_digit($age);
  }

  public function isValidAnimalName($favorite_animal) {
    return preg_match('/^[a-zA-Z]+$/', $favorite_animal);
  }
}
