<?php
include "User.php";
include "DatabaseConnect.php";

function insertUser($user) {
    try {
        $connection = getConnection();
        $sql = "INSERT INTO user (firstname, lastname)" . "VALUES('$user->firstname', '$user->lastname')";
        $connection->exec($sql);
        $id = $connection->lastInsertId();
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : insert failed :" . $ex->getMessage();
    }
}

function getUserById($id) {
    try {
        $connection = getConnection();
        $sql = "SELECT * FROM user WHERE id = $id";
        $result = $connection->query($sql);
        $user = new User();
        foreach ($result as $row) {
            $user->id = $row['id'];
            $user->firstname = $row['firstname'];
            $user->lastname = $row['lastname'];
            break;
        }
        $connection = null;
    } catch (Exception $ex) {
        echo"EXCEPTION : select failed :" . $ex->getMessage();
    }
    return $user;
}

function updateUser($id, $firstname, $lastname) {
    try {
        $connection = getConnection();
        $sql = "UPDATE user SET fisrtname = '$firstname', lastname= '$lastname' WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION: Update failed: " . $ex->getMessage();
    }
    $user = new User();
    $user->id = $id;
    $user->firstname = $firstname;
    $user->lastname = $lastname;
    return $user;
}

function deleteUser($id){
    try {
        $connection = getConnection();
        $sql = "DELETE FROM user WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
        
    }catch (Exception $ex){
        echo "EXCEPTION : delete failed: ".$ex->getMessage();
    }
}
?>