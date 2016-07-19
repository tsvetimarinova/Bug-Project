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
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B001', '', '', 'U001');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B002', '', '', 'U001');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B003', '', '', 'U001');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B004', '', '', 'U002');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B005', '', '', 'U002');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B006', '', '', 'U002');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B007', '', '', 'U004');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B008', '', '', 'U004');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B009', '', '', 'U004');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B010', '', '', 'U005');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B011', '', '', 'U005');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B012', '', '', 'U005');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B013', '', '', 'U006');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B014', '', '', 'U006');
INSERT INTO Bugs (bugID, bug_name, bug_description, userID) VALUES ('B015', '', '', 'U006');

";



if ($conn->query($sql) === TRUE){
    echo "Table Bugs populated";
} else {
    echo "Error found creating table " . $conn->error;
}
$conn->close();
?>