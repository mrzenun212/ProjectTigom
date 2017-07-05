<?php

session_start();
require 'dbconnect.php';

	$member_id = $_GET['id'];
	$results = mysqli_query($conn,"UPDATE book SET archive=1 WHERE book_id='$member_id'");
	if($results){
                ?>
                <script>
                    alert("retrieve successfully")
                </script>
                <?php
                header('Location:resources.php');
            	}

?>
