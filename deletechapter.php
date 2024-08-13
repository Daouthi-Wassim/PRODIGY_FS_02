<?php
		$strconn=mysqli_connect("localhost","root","","projet");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{
				echo "Connection Done".mysqli_connect_error();
		}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}

$title = $_GET['title']; 
$query="DELETE FROM chapter WHERE title='".$title."'";
$result = mysqli_query($strconn,$query);
if($result)
								{
                                    echo "chapter Deleted Successfully";;

								}
								else
								{
									echo $result;
								}
mysqli_close($strconn);
header("Location: managechapter.php");

?> 	