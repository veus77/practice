<?php

//require_once 'generated-classes/app/Book.php';
//require_once 'generated-conf/config.php';
/**
 * Created by PhpStorm.
 * User: veus
 * Date: 1/11/18
 * Time: 10:44 AM
 */

//TASK 1
//$color = array('white', 'green', 'red', 'blue', 'black');
//
//echo  "The memory of that scene for me is like a frame of film forever frozen at that moment:
// the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky.
//  The new president and his first lady. - Richard M. ";

//TASK2
//$color = array('white', 'green', 'red');
//foreach ($color as $boja){
//echo $boja.", ";
//}
//sort($color);
//foreach ($color as $boja){
//echo "<ul>";
//echo "<li>$boja</li>";
//echo "</ul>";
//}

//TASK 3
//$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
//    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
//    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
//    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
//    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
//ksort($ceu);
//foreach ($ceu as $key=>$city){
//    echo "The capital of $key is $city.<br />";
//}

//TASK 4

//$x = array(1, 2, 3, 4, 5);
//
//var_dump($x);
//echo "<br />";
//unset($x[3]);
//var_dump($x);

//TASK 5
//$color = array(4 => 'white', 6 => 'green', 11=> 'red');
//echo reset($color);

//TASK 6
//function w3rfunction($value,$key)
//{
//    echo "$key : $value"."\n";
//}
//$a = '{"Title": "The Cuckoos Calling",
//"Author": "Robert Galbraith",
//"Detail":
//{
//"Publisher": "Little Brown"
// }
//  }';
//$j1 = json_decode($a,true);
//echo "<pre>";
//array_walk_recursive($j1,"w3rfunction");
//echo "</pre>";

//TASK 7
//$original=[1,2,3,4,5];
//$new=['$'];
//echo "Original array :<br /> ";
//foreach ($original as $x){
//    echo $x." ";
//}
//echo "<br />";
//echo "After inserting '$' array is :<br /> ";
//array_splice($original, 3, 0, $new );
////print_r($original);
//foreach ($original as $x){
//    echo $x." ";
//}

//TASK 8
//$nesto=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//sort($nesto);
//echo "Ascending order sort by value:<br />";
//foreach ($nesto as $key=>$n){
//    echo $n."<br />";
//}
//ksort($nesto);
//echo "Ascending order sort by key:<br />";
//foreach ($nesto as $key=>$n){
//    echo $key."<br />";
//}
//asort($nesto);
//$nesto = array_reverse($nesto, true);
//echo "Ascending order sort by key:<br />";
//foreach ($nesto as $key=>$n){
//    echo $n."<br />";
//}
//asort($nesto);
//$nesto = array_reverse($nesto, true);
//echo "Ascending order sort by key:<br />";
//foreach ($nesto as $key=>$n){
//    echo $key."<br />";
//}

//TASK 9
$niz=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
sort($niz);
$result = array_unique($niz);
//echo "list of seven lowest temperatures: $result[0] $result[1] $result[2] $result[3] $result[4]";
$pero= array_slice($result,0, 5);
print_r( $pero);


//$original = array( '1','2','3','4','5' );
//echo 'Original array : '."\n";
//foreach ($original as $x)
//{echo "$x ";}
//$inserted = '$';
//array_splice( $original, 3, 0, $inserted );
//echo " \n After inserting '$' the array is : "."\n";
//foreach ($original as $x)
//{echo "$x ";}
//echo "\n";



//TYPE HINTING

//END HINTING


//POLYMORPHISM
//abstract class User {
//    protected $scores = 0;
//    protected $numberOfArticles = 0;
//// The abstract and concrete methods
//public function setNumberArticles($int){
//$numberOfArticles = $int;
//$this->numberOfArticles = $numberOfArticles;
//}
//public function getNumberArticles(){
//    return $this->numberOfArticles;
//}
//
//abstract function calcScores();
//}
//
//class Author extends User{
//    public function calcScores()
//    {
//        // TODO: Implement calcScores() method.
//        return $this->numberOfArticles *10+20;
//    }
//}
//
//class Editor extends User{
//    public function calcScores()
//    {
//        // TODO: Implement calcScores() method.
//        return $this->numberOfArticles *6+15;
//    }
//}
//$author1 = new Author();
//$author1->setNumberArticles(8);
//echo $author1->calcScores()."<br />";
//
//$editor1 = new Editor();
//$editor1->setNumberArticles(15);
//echo $editor1->calcScores();
//END-POLYMORPHISM




//INTERFACES
//class User
//{
//    protected  $username;
//
//    public function setUsername($username)
//    {
//        $this->username = $username;
//    }
//
//    public function getUsername()
//    {
//      return $this->username;
//    }
//
//}
//
//interface  Author{
//    public function setAuthorPrivileges($array);
//
//    public function getAuthorPrivileges();
//}
//
//interface Editor{
//    public function setEditorPrivileges($array);
//
//    public function getEditorPrivileges();
//}
//
//class AuthorEditor extends User implements Author,Editor{
//
//    private $authorPrivilegesArray = array();
//    private $editorPrivilegesArray = array();
//
//    public  function setAuthorPrivileges($array)
//    {
//        // TODO: Implement setAuthorPrivileges() method.
//        $this->authorPrivilegesArray=$array;
//    }
//    public function getAuthorPrivileges()
//    {
//        return $this -> authorPrivilegesArray;
//    }
//    public function setEditorPrivileges($array)
//    {
//        $this -> editorPrivilegesArray = $array;
//    }
//    public function getEditorPrivileges()
//    {
//        return $this->editorPrivilegesArray;
//    }
//}
//
//$user1 = new AuthorEditor();
//$user1 -> setUsername("Balthazar");
//$user1 -> setAuthorPrivileges(array("write text","add punctuation"));
//$user1-> setEditorPrivileges(array("edit text", "edit punctuation"));
//
//$userName = $user1 -> getUsername();
//$userPrivileges = array_merge($user1 -> getAuthorPrivileges(),
//    $user1 -> getEditorPrivileges());
//echo $userName . " has the following privileges: ";
//foreach($userPrivileges as $privilege)
//{
//    echo " {$privilege},";
//}
//echo ".";
//END INTERFACES

//abstract class User{
//    protected $username;
//
//abstract public function stateYourRoll();
//
//    public function setUserName($username){
//       $this->username = $username;
//    }
//
//    public function getUserName(){
//        echo $this->username;
//    }

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


//}
//
//class Admin extends User {
//
//    public function stateYourRoll(){
//        return strtolower(__CLASS__);
//    }

//    public function sayHello(){
//        echo "Hello admin, ".$this->username;
//    }
//}

//class Viewer extends User{
//
//    public function stateYourRoll()
//    {
//        // TODO: Implement stateYourRoll() method.
//    }
//
//
//}

//$admin1 = new Admin();
//$admin1 -> setUserName('Balthazar');
//echo  $admin1 -> stateYourRoll();
//$user1 = new User('John','Doe');
//echo $user1 ->getFullName();

//$user1->register()->mail()->hello();
//echo "<br />";



//$user2 = new User();
//$user2 ->firstName = 'Velibor';
//$user2 ->lastName = 'Savanovic';
//echo $user2 -> hello();
//echo  $user1 -> firstName;
//echo "<pre>";
//echo  $user1 -> lastName;
//echo "</pre>";
