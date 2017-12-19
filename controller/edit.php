<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Tasks</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="update">
        Due Date&nbsp<input type="text" name="todoDD" value="<?php echo $dd ?>"><br>
        Message&nbsp<input type="text" name="todoM" value="<?php echo $me ?>"><br>
        <input type="submit" value="Update"><br>
    </form>
</main>
<?php include '../view/footer.php'; ?>