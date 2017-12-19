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
                      </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Product</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>