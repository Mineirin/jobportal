<?php
	include("dbconnection.php");
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$npwd=$_POST['npwd'];
			$cpwd=$_POST['cpwd'];
			echo"$a1<br>";
			echo"$a2<br>";
			echo"$new<br>";
			echo"$con<br>";

			if($_POST['submit'])
			{
				mysqli_connect("localhost","root","");
				mysqli_select_db("resume2n_resume");
				$query="update user_registration set crpass='$npwd',conpass='$cpwd' where email='$email' and mob_no='$mobile'";
				$res=mysqli_query($query);
				echo"ddddddddddd=$res";

			}

?>



