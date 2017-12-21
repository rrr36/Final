<?php include '../view/header.php'; ?>
<main id="main">
    <h1><?php session_start(); echo "$firstName $lastName, This is your To-Do list"?></h1>
    
    

    <section>
        <!-- display a table of incomplete tasks -->
        <h2>Incomplete</h2>
        <table border="1">
            <tr>
                <th>Date Created</th>
                <th>Due Date</th>
                <th>Message</th>
                <th>Options</th>
               
            </tr>
            <?php $oID; $e;?>
            <?php foreach ($todos as $inctodo):
                
                if($inctodo['isdone'] == 1){
                    continue;
                }else { 
                      $cd = $inctodo['createddate'];
                      $dd = $inctodo['duedate'];
                      $m =  $inctodo['message'];   
                      $id = $inctodo['id']; 
                      $oID = $inctodo['ownerid'];  
                      $e = $inctodo['owneremail']; 
              
                ?>
                      <tr>
                          <td><?php echo $inctodo['createddate']; ?></td>
                          <td><?php echo $inctodo['duedate']; ?></td>
                          <td><?php echo $inctodo['message']; ?></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="edit_form">
                                  <input type="hidden" name="todoID" value="<?php echo $id; ?>">
                                  <input type="hidden" name="todoDD" value="<?php echo $dd; ?>">
                                  <input type="hidden" name="todoM" value="<?php echo $m; ?>">
                                  <input type="submit" value="Edit">
                          </form></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="delete">
                                  <input type="hidden" name="todoID" value="<?php echo $id; ?>">
                                  <input type="hidden" name="todoDD" value="<?php echo $dd; ?>">
                                  <input type="hidden" name="todoM" value="<?php echo $m; ?>">
                                  <input type="submit" value="Delete">
                          </form></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="finish">
                                  <input type="hidden" name="todoID" value="<?php echo $id; ?>">
                                  <input type="submit" value="Finish">
                          </form></td>
                          
                      </tr>
                <?php }
              endforeach; ?>
              
            </table>
            <form action="." method="post">
                                  <input type="hidden" name="action" value="add_form">
                                  <input type="hidden" name="todoID" value="<?php echo $oID; ?>">
                                  <input type="hidden" name="todoE" value="<?php echo $e; ?>">
                                  <input type="submit" value="add">
              </form>
        </section>
        <section>
            <!-- display a table of completed tasks -->
            <h2>Completed</h2>
            <table border="1">
                <tr>
                    <th>Date Created</th>
                    <th>Due Date</th>
                    <th>Message</th>
                    
                </tr>
                <?php foreach ($todos as $comptodo){
                
                    if($comptodo['isdone'] == 0){
                        continue;
                    }else { ?>
                          <tr>
                              <td><?php echo $comptodo['createddate']; ?></td>
                              <td><?php echo $comptodo['duedate']; ?></td>
                              <td><?php echo $comptodo['message']; ?></td>
                              
                          </tr>
                    <?php }
                  } ?>
            </table>
        </section>    
             
  </main>
  <p><a href="logout.php">Logout</a></p>   
  <?php include '../view/footer.php'; ?>