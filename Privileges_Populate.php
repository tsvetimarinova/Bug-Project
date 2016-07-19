<?php
$conn = new mysqli(
    "us-cdbr-azure-west-c.cloudapp.net",
    "b4bbf8767a3b3c",
    "7ae9ed4b",
    "databasebug1300608"
);
/*Establishes connection*/
//$conn - newmysqli($srevername, $username, $password, $dbname);
/*Connection check*/
if ($conn->connect_error){
    die("Connection has failed " . $conn->connect_error);
}
/*Populates sql table*/
$sql = "
INSERT INTO Privileges(privID, description) VALUES ('PR01', '');
INSERT INTO Privileges(privID, description) VALUES ('PR02', '');
INSERT INTO Privileges(privID, description) VALUES ('PR03', '');
INSERT INTO Privileges(privID, description) VALUES ('PR04', '');
INSERT INTO Privileges(privID, description) VALUES ('PR05', '');
INSERT INTO Privileges(privID, description) VALUES ('PR06', '');
";



if ($conn->query($sql) === TRUE){
    echo "Table Privileges populated";
} else {
    echo "Error found creating table " . $conn->error;
}
$conn->close();
?>