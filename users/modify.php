<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
          
 

    $sql = "update members set pass='$pass', name='$name', email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = '../index.php';
	      </script>
	  ";
?>