<?php
	$connection = mysqli_connect("localhost","root","","diex_portal") or die("Failed To Establish The Connection");

	if(isset($_POST['add_faculty'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($connection,"INSERT INTO faculty_master(username,password) VALUES ('$username','$password')");

        header('Location:ECPanel.php');
    }
?>