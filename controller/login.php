<?php include '../view/header.php'; ?>
<main>
        <form action = "index.php" method = "post">
        <div id="Email">
        Email Address&nbsp<input type=text autocomplete=off placeholder = "Email Address" name="Email" required><br>
        </div>
        <div id="Password">
        Password&nbsp<input type=text autocomplete=off placeholder = "Password" name="Password" required><br>
        </div>
        <div id="button">
        <input type = submit>
        </div>
        </form>
</main>
<?php include '../view/footer.php'; ?>