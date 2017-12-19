<?php include '../view/header.php'; ?>
<main>
    <h1>Add Task</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_todo">
        Due Date$nbsp<input type="text" name="dd"><br>
        Message$nbsp<input type="text" name="m"><br>
        <input type="submit" value="submit"><br>
    </form>
</main>
<?php include '../view/footer.php'; ?>