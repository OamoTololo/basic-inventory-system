<?php
    include 'inc/top.php';
?>
<body class="loginBody">

<div class="container">
    <div class="loginHeader p-0 mb-5">
        <h1 class="brown font-weight-bold">IMS</h1>
        <p class="brown font-weight-bold">Inventory Management System</p>
    </div>
    <div class="loginBody">
        <form action="" class="">
            <h4 class="loginText text-center text-white mb-3 font-weight-bold">Login</h4>
            <div class="mb-2 mt-3">
                <input type="text" name="username" id="username" required placeholder="Username" class="form-control text-center mt-3 brown">
            </div>
            <div class="mt-3">
                <input type="password" name="password" id="password" required placeholder="Password" class="form-control text-center">
            </div>
            <div class="loginButton mt-4 align-content-center">
                <button class="btn btn-maroon text-white btn-lg col-12">Login</button>
            </div>
        </form>
    </div>
</div>

