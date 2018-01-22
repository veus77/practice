<?php

//require_once 'generated-classes/app/Book.php';
//require_once 'generated-conf/config.php';
/**
 * Created by PhpStorm.
 * User: veus
 * Date: 1/11/18
 * Time: 10:44 AM
 */



abstract class User{
    protected $username;

abstract public function stateYourRoll();

    public function setUserName($username){
       $this->username = $username;
    }

    public function getUserName(){
        echo $this->username;
    }

//    private $lastName;
//
//    public function __construct($firstName, $lastName)
//    {
//      $this->firstName = $firstName;
//      $this->lastName = $lastName;
//    }
//
//    public function getFullName(){
//        echo $this->firstName." ".$this->lastName;
//    }
//
//    public function hello(){
//        echo  " hello : $this->firstName";
//    }
//    public function register(){
//        echo $this->firstName." ".$this->lastName." registred ";
//        return $this;
//    }
//    public function mail(){
//        echo 'emailed <br />';
//        return $this;
//    }

//    public function setFirstName($firstName){
//         $this->firstName = $firstName;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getFirstName()
//    {
//        return $this->firstName;
//    }


}

class Admin extends User {

    public function stateYourRoll(){
        return strtolower(__CLASS__);
    }

//    public function sayHello(){
//        echo "Hello admin, ".$this->username;
//    }
}

class Viewer extends User{

    public function stateYourRoll()
    {
        // TODO: Implement stateYourRoll() method.
    }


}

$admin1 = new Admin();
$admin1 -> setUserName('Balthazar');
echo  $admin1 -> stateYourRoll();
//$user1 = new User('John','Doe');
//echo $user1 ->getFullName();

//$user1->register()->mail()->hello();
echo "<br />";



//$user2 = new User();
//$user2 ->firstName = 'Velibor';
//$user2 ->lastName = 'Savanovic';
//echo $user2 -> hello();
//echo  $user1 -> firstName;
//echo "<pre>";
//echo  $user1 -> lastName;
//echo "</pre>";
