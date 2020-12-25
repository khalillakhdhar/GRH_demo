<?php
class Employee
{
    function list_users()
    {
        //bloc de connexion
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "web_mp";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // lecture
        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql); //chargement dans result
        return $result; //retour
    }
}