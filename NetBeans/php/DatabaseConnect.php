<?php
function getConnection() {
    $servername = "127.0.0.1";
    $dbname = "CYL";
    $username = "root";
    $password = "admin";
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "EXCEPTION: Connection failed : " . $e->getMessage();
    }
    return $connection;
}
?>