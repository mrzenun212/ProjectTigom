
<?php

session_start();
require 'dbconnect.php';

	$member_id = $_GET['id'];
	$results = mysqli_query($conn,"DELETE FROM book WHERE book_id='$member_id'");
	if($results){
                ?>
                <script>
                    alert("success")
                </script>n
                <?php
                header('Location:submission.php');
            	}

?>
