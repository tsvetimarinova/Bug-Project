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

/*Creates sql table*/

$sql = "CREATE TABLE Contributions (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
contID      CHAR ( 4 ) NOT NULL,
cont_name   VARCHAR ( 20 ) NOT NULL,
cont_date   DATE,
data_type   VARCHAR ( 40 ),
userID      CHAR ( 4 )  NOT NULL,

CONSTRAINT pkContributions PRIMARY KEY (contID),
CONSTRAINT fk_userID FOREIGN KEY (userID) REFERENCES Users (userID),

) ENDINE = MYISAM;
";


if ($conn->query($sql) === TRUE){
    echo "Table Users created";
} else {
    echo "Error found creating table " . $conn->error;
}

$conn->close();

?>
