<?php
include_once 'db.php';
if(isset($_POST['btn-upload']))
{

  $name=$_POST['uname'];
    $email=$_POST['uemail'];
      $phone=$_POST['uphone'];
      $password=$_POST['upass'];
		$sql="INSERT INTO login VALUES('$name','$email','$phone','$password')";
		mysqli_query($cn,$sql);
		?>
		<script>
		alert('successfully Register');
        window.location.href='sellLogin.php';
        </script>
        <?php
      }

?>
