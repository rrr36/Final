<?php 
    function get_t($oID) {
        global $db;
        $query = "SELECT * FROM todos WHERE ownerid = :oid ORDER BY createddate DESC";
        $statement = $db->prepare($query);
        $statement->bindValue(":oid", $oID);
        $statement->execute();
        $todos = $statement->fetchAll();
        $statement->closeCursor();
        return $todos;
    }

    function add($e, $oID, $dd, $m) {
        global $db;
        date_default_timezone_set("America/New_York");
        $dt = date("Y-m-d H:i:sa");
        $query = 'INSERT INTO todos (owneremail, ownerid, createddate, duedate, message, isdone) VALUES (:e, :oid, :cd, :dd, :m, :isd)';
        $statement = $db->prepare($query);
        $statement->bindValue(":e", $e);
        $statement->bindValue(":oid", $oID);
        $statement->bindValue(":cd", $dt);
        $statement->bindValue(":dd", $dd);
        $statement->bindValue(":m", $m);
        $statement->bindValue(":isd", 0);
        $statement->execute();
        $statement->closeCursor();
    }

    function edit($id, $dd, $m) {
        global $db;
        date_default_timezone_set("America/New_York");
        $dt = date("Y-m-d H:i:sa");
        $query = 'UPDATE todos SET createddate = :dt, duedate = :dd, message = :m WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->bindValue(":dt", $dt);
        $statement->bindValue(":dd", $dd);
        $statement->bindValue(":m", $m);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function delete($id) {
        global $db;
        $query = 'DELETE FROM todos WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function finish($id) {
        global $db;
        $query = 'UPDATE todos SET isdone = :isd WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->bindValue(":isd", 1);
        $statement->execute();
        $statement->closeCursor();
    }

 ?>