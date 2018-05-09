<?php
include_once 'db.php';
if(isset($_POST['btn-login']))
{


    $email=$_POST['uemail'];

      $password=$_POST['upass'];
      $sql = "SELECT * FROM login WHERE email = '$email' AND pword ='$password')";

		mysqli_query($cn,$sql);
		?>
		<script>

        window.location.href='sellLogin.php';
        </script>
        <?php
      }

?>
