<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <style>
      /* Add some custom styles here */
      body {
        padding-top: 4rem;
        font-family: 'Roboto', sans-serif;
      }
      .navbar-brand {
        font-weight: bold;
        font-size: 2rem;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
      }
      .table thead th {
        background-color: #007bff;
        color: #fff;
      }
      .table tbody td {
        vertical-align: middle;
      }
      .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      .login-box {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 30px;
      }
      h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Covid Vaccination Booking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="main.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="login-box">
        <h2>User Login</h2>
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="login">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="submitData();">login</button>
            <br>
            <p class="text-center">Don't have an account yet? <a href="register.php">Signup</a></p>
            <?php require 'script.php'; ?>
          </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
