<?php

	include 'conn/conn.php';  

    if (isset($_POST['email'], $_POST['password'])){


                $email = $_POST['email'];//security
                $pass = $_POST['password'];
                $sql="select * from register where email='$email' AND password='$pass'";
                echo $sql;
                $check=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($check);
                if($num>0)
                /*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/
                
                {
                $check_row= mysqli_fetch_assoc($check);
                $_SESSION['email']=$check_row['email'];
                echo "<script> window.location=employee.php </script> ";
                }
                else
                {
                $invalid_msg="Invalid user id / password ";
                }
            
    }


?>