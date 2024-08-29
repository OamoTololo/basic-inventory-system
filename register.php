<?php
    include 'inc/top.php';

    if (isset($_POST['submit'])) {
        echo 'User added successfully';
    }
?>
<body class="registerBody">
<div class="">
    <form action="register.php" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Fill up the form below...</p>
            <input type="text" name="name" required id="name" placeholder="Name" class="form-control">
            <input type="text" name="surname" required id="surname" placeholder="surname" class="form-control">
            <input type="text" name="username" required id="username" placeholder="Username" class="form-control">
            <input type="email" name="email" required id="email" placeholder="Email" class="form-control">
            <input type="text" name="phoneNo" required id="phoneNo" placeholder="Phone Number" class="form-control" maxlength="10">
            <input type="password" name="password" required id="password" placeholder="Password" class="form-control">
            <input type="password" name="confirmPassword" required id="confirmPassword" placeholder="Confirm Password" class="form-control">

            <button class="btn btn-success">Register</button>
        </div>
    </form>
</div>
