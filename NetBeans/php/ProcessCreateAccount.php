<?php
include "CreateAccountDatabase.php";
include "Account.php";
$account = new Account();
$account->firstName = $_POST["firstName"];
$account->lastName = $_POST["lastName"];
$account->address = $_POST["address"];
$account->city = $_POST["city"];
$account->state = $_POST["state"];
$account->zip = $_POST["zip"];
$account->highSchool = $_POST["highSchool"];
$account->highYear = $_POST["HighYear"];
$account->phone = $_POST["phone"];
$account->email = $_POST["email"];
$account->bMonth = $_POST["bMonth"];
$account->bDay = $_POST["bDay"];
$account->bYear = $_POST["bYear"];
$account->yesParticipated = $_POST["yesParticipated"];
$account->p1First = $_POST["p1First"];
$account->p1Last = $_POST["p1Last"];
$account->p1Phone = $_POST["p1Phone"];
$account->p1Email = $_POST["p1Email"];
$account->p2First = $_POST["p2First"];
$account->p2Last = $_POST["p2Last"];
$account->p2Phone = $_POST["p2Phone"];
$account->p2Email = $_POST["p2Email"];
$account->ethnicity = $_POST['ethnicity'];
$account->county = $_POST['county'];
$account->hearedCYL = $_POST['hearedCYL'];
$account->salary = $_POST['salary'];

#if ($account->validate()) {
#    echo "Is valid</br>";
#    echo $account->toString();
#} else {
#    echo"Try again";
#}
$connection = getConnection();
        
?>