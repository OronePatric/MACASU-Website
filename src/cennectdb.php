<?php 
session_start();
// intializing the variables

$fname = "";
$Lname = "";
$Email = "";
$password = "";

//Connect to the database db

$db = mysqli_connect("localhost", "root", "", "macasu_db");
//Register users

