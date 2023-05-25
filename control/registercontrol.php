<?php
require 'function.php';

class Register extends Connection{
    public function registration($username, $email, $password){
      $duplicate = mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
      if(mysqli_num_rows($duplicate) > 0){
        return 10;
        // Username or email has already taken
      }
      else{
          if(strlen($password) > 7){
          $query = "INSERT INTO user VALUES('', '$username', '$email', '$password')";
          mysqli_query($this->conn, $query);
          return 1;
          // Registration successful
        }
        else{
          return 100;
          // Password does not match
        }
      }
    }
  }
?>