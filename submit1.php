<?php

require('dbconnect.php');


if(isset($_POST['btn_submit'])){

	$title=$_POST['title'];
	
	$author=$_POST['author']; //ok
	
	$location=$_POST['location'];
	
	$Book_title=$_POST['Book_title'];
	
	$genre=$_POST['genre'];
	
	$date=$_POST['date'];
	
	$publisher=$_POST['publisher'];
	
	$copyright=$_POST['copyright'];
	
	$language=$_POST['language'];
	
	$url=$_POST['url'];
	
	$excerpt=$_POST['excerpt'];
	
	$summary=$_POST['summary'];
	
	$a_query = mysqli_query($conn,"SELECT author_id FROM author WHERE author_name = '$author'");
	
	if(mysqli_num_rows($a_query)==0){
		$query = "INSERT INTO author(author_name) VALUES('$author')";
		mysqli_query($conn,$query) or die ("1111");
	}

	$p_query = mysqli_query($conn,"SELECT author_id FROM author WHERE author_name = '$author'");

	if(mysqli_num_rows($p_query)==0){
		$query2 = "INSERT INTO publisher(year_pub, pub_name) VALUES('$date','$publisher')";
		mysqli_query($conn,$query2) or die ("2222");
	}
	

	$query3 = "SELECT author_id FROM author WHERE author_name = '$author'";
	$query4 = mysqli_query($conn,$query3) or die ("3333");
	$a_row = mysqli_fetch_assoc($query4) or die("55555");
	$author_id = $a_row['author_id'] or die("66666");
	
	$query5 = "SELECT pub_id FROM publisher WHERE pub_name = '$publisher'";
	$query6 = mysqli_query($conn, $query5) or die("77777");
	$a_row1 = mysqli_fetch_assoc($query6) or die ("99999");
	$pub_id = $a_row1['pub_id'] or die ("121212");
	
	
	
	$query1 = "INSERT INTO book(title, source_location, author_id, summary, excerpt, book_title, pub_id, copyright, language, source_link, genre, tag, archive) 	VALUES('$title','$location','$author_id','$summary','$excerpt','$Book_title','$pub_id','$copyright','$language','$url','$genre','0','0')";
	
	
	mysqli_query($conn,$query1) or die ("Wew");
	
	if($query1){
		?> <script>window.alert("Thank you for submitting! We will review it as soon as possible")</script><?php
		header("location:submit.html");
	}
	
	
}
?>



