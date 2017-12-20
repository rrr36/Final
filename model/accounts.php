<?php 
    function getID($e, $p) {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :e AND password = :p';
        $statement = $db->prepare($query);
        $statement->bindValue(":e", $e);
        $statement->bindValue(":p", $p);
        $statement->execute();
        $accounts = $statement->fetch();
        $statement->closeCursor();
        $id = $accounts['id'];
        return $id;
    }
    
    function getFirstName($e, $p) {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :e AND password = :p';
        $statement = $db->prepare($query);
        $statement->bindValue(":e", $e);
        $statement->bindValue(":p", $p);
        $statement->execute();
        $accounts = $statement->fetch();
        $statement->closeCursor();
        $firstName = $accounts['fname'];
        return $firstName;
    }
    
    function getLastName($e, $p) {
        global $db;
        $query = 'SELECT * FROM accounts WHERE email = :e AND password = :p';
        $statement = $db->prepare($query);
        $statement->bindValue(":e", $e);
        $statement->bindValue(":p", $p);
        $statement->execute();
        $accounts = $statement->fetch();
        $statement->closeCursor();
        $lastName = $accounts['lname'];
        return $lastName;
    }
    
   function newUser($email,$fname,$lname,$phone,$birthday,$gender,$password){
        global $db;
        $query = 'INSERT INTO accounts (email, fname, lname, phone, birthday, gender, password) VALUES (:e, :fn, :ln, :p, :b, :g, :pwd)';
        $statement = $db->prepare($query);
        $statement->bindValue(":e", $email);
        $statement->bindValue(":fn", $fname);
        $statement->bindValue(":ln", $lname);
        $statement->bindValue(":p", $phone);
        $statement->bindValue(":b", $birthday);
        $statement->bindValue(":g", $gender);
        $statement->bindValue(":pwd", $password);
        $statement->execute();
        $statement->closeCursor();
   }

?>