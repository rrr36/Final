<?php include '../view/header.php'; ?>
<main>
    
        <form action = "midsignup.php" method = "post">
        <div id="fname">
        First Name&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "First Name" name="fname" required><br>
        </div>
        <div id="Lname">
        Last Name&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Last Name" name="lname" required><br>
        </div>
        <div id="Email">
        Email Address&nbsp<input type=text autocomplete=off placeholder = "Email Address" name="email" required><br>
        </div>
        <div id="Phone">
        Phone Number&nbsp<input type=text autocomplete=off placeholder = "Phone Number" name="phone" required><br>
        </div>
        <div id="Bday">
        Birthday&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Birthday" name="bday" required><br>
        </div>
        <div id="Gender">
        Gender&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Gender" name="gender" required><br>
        </div>
        <div id="Password">
        Password&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Password" name="password" required><br>
        </div>
        <div id="button">
        <input type = submit>
        </div>
        </form>
</main>
<?php include '../view/footer.php'; ?>