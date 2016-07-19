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
INSERT INTO Comments (comID, description, com_date, userID, bugID) VALUES ('C001', '', '2016-07-19', 'U003', 'B001');
INSERT INTO Comments (comID, description, com_date, userID, bugID) VALUES ('C002', '', '2016-08-02', 'U001', 'B006');
INSERT INTO Comments (comID, description, com_date, userID, bugID) VALUES ('C003', '', '2016-07-24', 'U005', 'B0012');
INSERT INTO Comments (comID, description, com_date, userID, bugID) VALUES ('C004', '', '2016-07-27', 'U002', 'B003');
INSERT INTO Comments (comID, description, com_date, userID, bugID) VALUES ('C005', '', '2016-08-04', 'U004', 'B009');

";



if ($conn->query($sql) === TRUE){
    echo "Table Comments populated";
} else {
    echo "Error found creating table " . $conn->error;
}
$conn->close();
?>