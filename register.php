<?php

session_start();

$db = mysqli_connect("162.241.148.160:2082", "root", "", "psjhakb7_upera");

if (isset($_POST['registerbtn']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    if ($password == $password2)
    {
        $password2 = md5($password);
        $sql = "INSERT INTO registertable(uname, emailadd, mobileno, pass, hashpass) VALUES('$username', '$email', '$mobile', '$password', '$password2')";
        mysqli_query($db, $sql);
        include 'index.php';
    }
    else
    {
        include 'index.php';
    }
}
?>



<script> 
  alert("<?php 
        
    $username = mysqli_real_escape_string($db, $_POST['username']);    
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
        
    if ($password == $password2)
        {
        echo "$username, You Have Successfully registered!";
        }
    else
        {
        echo "$username, yours Registration Failed! Passwords do not Match";
        }
        
        ?>"); 
    console.log = function(){};
</script> 



