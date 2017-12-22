<?php
function connectToDB()
{
    $host    = "localhost"; // naam / locatie database server
    $user    = "root"; // gebruikersnaam om in te loggen op de database server
    $pass    = ""; // wachtwoord usbw voor usb webserver
    $dB        = "gameworld"; // naam van de database

    // $connect = mysqli_connect($host,$user, $pass, $dB) or die("Kan geen verbinding maken");

    // if($connect)
    // {
    //     echo "rfwefwefwefewfewaew";
    // }
    // Create connection
    $conn = new mysqli($host, $user, $pass, $dB);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        return $conn;
    }
 
    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = $conn->query($sql);
    //return $connect;
}
?>
