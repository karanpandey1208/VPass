<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

/* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}


</style>

<title>Theme</title>

</head>


<body>

</body>



</html>
<?php

session_start();
require_once('connect.php');
include_once('partials\_nav.php');


$sql= "Select level3 from info";
$level3=$con->query($sql);


switch(1){
    case 1: 
        require 'level3login/pic1.php';
        exit();
    
    case 2:
        require 'level3login/pic2.php';
        exit();
    
    case 3:
        require 'level3login/pic3.php';
        exit();

    case 4:
        require 'level3login/pic4.php';
        exit();

    case 5:
        require 'level3login/pic5.php';
        exit();

    case 6:
        require 'level3login/pic6.php';
        exit();
    
    case 7:
        require 'level3login/pic7.php';
        exit();

    case 8:
        require 'level3login/pic8.php';
        exit();

    case 9:
        require 'level3login/pic9.php';
        exit();  

    default:
      echo "Default";
    }
    session_abort();