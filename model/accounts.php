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

?>