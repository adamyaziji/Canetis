<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 23/01/18
 * Time: 20:56
 */

class Account
{
    public function __construct(){

    }
        private function validateUserName($un){

        }

        public function register (){
            $this->validateUserName($username);
            $this->validateFirstName($firstname);
            $this->validateLastName($lastname);
            $this->validateEmail($email, $email2);
            $this->validatePassword($password, $password2);
        }

        private function validateFirstName($fn){

        }

        private function validateLastName($ln){

        }

        private function validateEmail($em, $em2){

        }

        private function validatePassword($pw, $pw2){

        }
}