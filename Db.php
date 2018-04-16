<?php
class Db { 

    public static function connect() {    
    //parse the server login info
    $config = parse_ini_file('config.ini');
    //connect to the server&database
    $connection = new mysqli('localhost',$config['username'],$config['password'],$config['dbname']);
    //validate the connection to the server&database
    if ($connection->connect_error) {
    exit("Connection failed: " . $connection->connect_error);
    }
        return $connection;
    }

    public static function insertCustomer($CustomerNo, $FirstName, $LastName, $DateOfBirth, $Gender, $State, $City, $Zip, $Address, $Email, $Phone) {
        // connect to the database
        $connection = self::connect();
        
        // prepare and validate the statement
        $insertStatement = $connection->prepare("INSERT INTO customer(Customer_No, First_Name, Last_Name, Birth_Date, Gender, State, City, Zip, Address, Email, Phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if($insertStatement === FALSE) {
            exit("Prepared statement failed with the following error description: " . htmlspecialchars($connection->error));
        }

        //prepare and validate the binding parameters
        $dataTypes = "issssssssss";
        $result = $insertStatement->bind_param($dataTypes, $CustomerNo, $FirstName, $LastName, $DateOfBirth, $Gender, $State, $City, $Zip, $Address, $Email, $Phone);
        if ($result === FALSE) {
            exit("Binded Parameters failed.");
        }

        //execute and validate the execution
        $result = $insertStatement->execute();
        if ($result === FALSE) {
            exit("Execution of the statement failed with the following error description." . htmlspecialchars($connection->error));
        }
        else {
            echo "New record created successfully";
            $insertStatement->close();
            return $result;
        }
    }   

    public static function getMaxCustomerNo() {
        $connection = self::connect();

        $SQLstring = "SELECT MAX(Customer_No) AS MaxCustomerNo FROM customer";
        $QueryResult = @mysqli_query($connection, $SQLstring);
        if (mysqli_num_rows($QueryResult) == 0) {
            exit("There is a problem with customer number.");
        }
        else {
            $Row = mysqli_fetch_array($QueryResult);
            $CustomerNo = $Row["MaxCustomerNo"] + 1;
            return $CustomerNo;
        } 
    }   
}

?>