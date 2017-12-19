<?php 
function get_t($oID) {
    global $db;
    $query = 'SELECT * FROM todos WHERE ownerid = :oid' ORDER BY 'createddate' DESC;
    $statement = $db->prepare($query);
    $statement->bindValue(":oid", $ownerID);
    $statement->execute();
    $todos = $statement->fetch();
    $statement->closeCursor();
    return $todos;
}

 ?>