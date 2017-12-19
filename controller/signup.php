<?php include '../view/header.php'; ?>
<main>
        <form action = "index.php" method = "post">
        <div id="fname">
        First Name&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "First Name" name="Fname" required><br>
        </div>
        <div id="Lname">
        Last Name&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Last Name" name="Lname" required><br>
        </div>
        <div id="Email">
        Email Address&nbsp<input type=text autocomplete=off placeholder = "Email Address" name="Email" required><br>
        </div>
        <div id="Phone">
        Phone Number&nbsp<input type=text autocomplete=off placeholder = "Phone Number" name="Phone" required><br>
        </div>
        <div id="Bday">
        Birthday&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Birthday" name="BDay" required><br>
        </div>
        <div id="Gender">
        Gender&nbsp&nbsp&nbsp<input type=text autocomplete=off placeholder = "Gender" name="Gender" required><br>
        </div>
        <div id="button">
        <input type = submit>
        </div>
        </form>
</main>
<?php include '../view/footer.php'; ?>