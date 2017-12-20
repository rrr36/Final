<?php include '../view/header.php'; ?>
<main>
        <?php session_start(); $_SESSION['login'] = true;?>
        <form action = "mid.php" method = "post">
        <div id="Email">
        Email Address&nbsp<input type=text autocomplete=off placeholder = "Email Address" name="email" required><br>
        </div>
        <div id="Password">
        Password&nbsp<input type=text autocomplete=off placeholder = "Password" name="password" required><br>
        </div>
        <div id="button">
        <input type = submit>
        </div>
        </form>
</main>
<?php include '../view/footer.php'; ?>