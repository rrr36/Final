<?php 
    function getID($e, $p) {
        global $db;
        $query = 'SELECT * FROM a WHERE email = :email AND password = :p';
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
        $fisrtName = $accounts['fname'];
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

?>