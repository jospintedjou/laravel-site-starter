<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 22/06/2020
 * Time: 14:41
 */

namespace App;


class Contact
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getMessage(){
        return $this->message;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSubject($subject){
        $this->subject = $subject;
    }
    public function setMessage($message){
         $this->message = $message;
    }
}