<?php

$conn = new mysqli("Localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection Failed: " . mysqli_connect_error());
}

/*$sql = "CREATE TABLE myGuests(
    id INT(6) unsigned auto_increment primary key,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    email varchar(30),
    reg_date timestamp default current_timestamp on update current_timestamp
    )";*/

/*$sql = "INSERT INTO Myguests(firstname,lastname,email)
            VALUES ('Nutchanon','Tangjai','6206021611109@fitm.kmutnb.ac.th');";
$sql .= "INSERT INTO Myguests(firstname,lastname,email)
            VALUES ('Nutchanon','Tangjai','6206021611109@fitm.kmutnb.ac.th');";
$sql .= "INSERT INTO Myguests(firstname,lastname,email)
            VALUES ('Nutchanon','Tangjai','6206021611109@fitm.kmutnb.ac.th');";
*/

/*$sql = "UPDATE myguests set lastname='Aom' where id=1";*/
$sql = "DELETE from Myguests where id=5";

if ($conn->query($sql)) {
    echo "Database created successfully";
}