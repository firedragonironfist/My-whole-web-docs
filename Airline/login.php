<?php
$host = "localhost";  
  $user = "root";  
  $password = " ";  
  $db_name = "proj";  
    
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
  }     
    $username = $_POST['Username'];  
    $password = $_POST['Password']; 
    $stmt=$con->prepare("select * from details where email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        $data=$stmt_result->fetch_assoc();
        if($data['password']===$password)
        {
            echo "<h2>Login Successfull</h2>";
        }
        else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
?>
