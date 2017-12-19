<?php 
    function get_t($oID) {
        global $db;
        $query = 'SELECT * FROM todos WHERE ownerid = :oid' ORDER BY 'createddate' DESC;
        $statement = $db->prepare($query);
        $statement->bindValue(":oid", $oID);
        $statement->execute();
        $todos = $statement->fetch();
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
        $statement->bindValue(":is", 0);
        $statement->execute();
        $statement->closeCursor();
    }

    function edit($id, $dd, $m) {
        global $db;
        date_default_timezone_set("America/New_York");
        $dt = date("Y-m-d H:i:sa");
        $query = 'UPDATE todos SET createddate = :cd, duedate = :dd, message = :m WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->bindValue(":createddate", $dt);
        $statement->bindValue(":duedate", $dd);
        $statement->bindValue(":message", $m);
        $statement->execute();
        $statement->closeCursor();
    }


 ?>