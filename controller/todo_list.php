<?php include '../view/header.php'; ?>
<main>
    <h1><?php echo "$firstName $lastName, This is your To-Do list"?></h1>
    <h1>To do List</h1>

    <section>
        <!-- display a table of incomplete tasks -->
        <h2>Incomplete</h2>
        <table>
            <tr>
                <th>Date Created</th>
                <th>Due Date</th>
                <th>Message</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($todos as $inctodo){
            
                if($inctodo['isdone'] == 1){
                    continue;
                }else { ?>
                      <tr>
                          <td><?php echo $inctodo['createdate']; ?></td>
                          <td><?php echo $inctodo['duedate']; ?></td>
                          <td><?php echo $inctodo['message']; ?></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="edit_from">
                                  <input type="hidden" name="todoID" value="<?php echo $inctodo['id']; ?>">
                                  <input type="submit" value="Edit">
                          </form></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="delete">
                                  <input type="hidden" name="todoID" value="<?php echo $inctodo['id']; ?>">
                                  <input type="hidden" name="todoDD" value="<?php echo $inctodo['duedate']; ?>">
                                  <input type="hidden" name="todoM" value="<?php echo $inctodo['message']; ?>">
                                  <input type="submit" value="Delete">
                          </form></td>
                          
                          <td><form action="." method="post">
                                  <input type="hidden" name="action" value="finish">
                                  <input type="hidden" name="todoID" value="<?php echo $inctodo['id']; ?>">
                                  <input type="submit" value="Finish">
                          </form></td>
                          
                      </tr>
                <?php }
              } ?>
            </table>
        </section>
        <section>
            <!-- display a table of completed tasks -->
            <h2>Completed</h2>
            <table>
                <tr>
                    <th>Date Created</th>
                    <th>Due Date</th>
                    <th>Message</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($todos as $comptodo){
                
                    if($inctodo['isdone'] == 0){
                        continue;
                    }else { ?>
                          <tr>
                              <td><?php echo $comptodo['createdate']; ?></td>
                              <td><?php echo $comptodo['duedate']; ?></td>
                              <td><?php echo $comptodo['message']; ?></td>
                              
                          </tr>
                    <?php }
                  } ?>
            </table>
        </section>          
  </main>
  <?php include '../view/footer.php'; ?>