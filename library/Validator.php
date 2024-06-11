<?php

class Validator {

   static public function stringNotEmpty($data) {
      return is_string($data) && trim($data) !== '';
   }

   static public function yearNotExceed($data) {
      return is_numeric($data) && $data <= 2030;
   }

   static public function string($data, $min = 0, $max = INF) {
      if (!is_string($data)) {
          return false;
      }
      $data = trim($data);
  
      return strlen($data) >= $min && strlen($data) <= $max;
  }
  
  static public function number($data, $min = 0, $max = INF) {
   if (!is_numeric($data)) {
       return false;
   }
   $data = trim($data);

   return $data >= $min && $data <= $max;
}

   public static function email($data) {
      return filter_var($data, FILTER_VALIDATE_EMAIL);
   }

   public static function password($data) {
      $minLength = 8;
      $uppercaseRegex = '/[A-Z]/';
      $lowercaseRegex = '/[a-z]/';
      $numberRegex = '/[0-9]/';
      $specialCharRegex = '/[!@#$%^&*()\-_=+{};:,<.>]/';

      return  strlen($data) >= $minLength &&
              preg_match($uppercaseRegex, $data) &&
              preg_match($lowercaseRegex, $data) &&
              preg_match($numberRegex, $data) &&
              preg_match($specialCharRegex, $data);
   }
}