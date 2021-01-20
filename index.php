
<?php
/*  create student class this class should contain these properties: 
- studentName
- age
- gender
- mobile 

and these methods: 
- welcomeStudent($name) // return welcome $name to our school
- getGender() // return gender
- setAge($age) // age > 18 ? you are not allowed to register else call method WelcomeStudent()  */


class student{
var $studentName;
var $age;
var $gender="Male";
var $mobile='0799624166';

function welcomestudent($studentName){

return $this->studentName = $studentName ;

}

function getGender(){

return $this->gender;
}
function setAge($age) {
	$this->age=$age;
    if ( $this->age >= 18) {
            
            echo " you are not allowed to register here your Age $age its above 18 .";

    } else {

          return  $this->welcomestudent("Hamzeh");

    }
    
  //function getAge() {
    //return $this->Age;
 // }
}


}
$x = new student();
$y = new student();
$z = new student();

echo "welcome " . $x->welcomestudent("Hamzeh"). " to our school";
 
echo "<br>";
echo "<hr>";

echo "Gender : " .$y->getGender();
echo "<br>";
echo "<hr>";
echo $z->setAge("3");
//$z->setAge("10");
//echo$z->getAge();

 ?> 