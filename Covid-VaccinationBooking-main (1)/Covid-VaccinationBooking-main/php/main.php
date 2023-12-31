<?php
require 'function.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid Vaccination Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      /* Add some custom styles here */
      body {
        padding-top: 4rem;
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
      .main-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }
      .main-container h1 {
        font-size: 4rem;
        margin-bottom: 1rem;
      }
      .main-container p {
        font-size: 1.5rem;
        text-align: center;
        margin-bottom: 2rem;
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
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="main-container">
	<h1>Welcome to Covid Vaccination Booking</h1>
	<p class="lead">New user? Sign up to book your slot.</p>
	<p>Already have an account? Log in and book your slot. Hurry up, only 10 persons allowed per day.</p>
</div>
  </body>
</html> 
