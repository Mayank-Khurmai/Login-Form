<?php

session_start();
   
$db = mysqli_connect("localhost", "root", "", "psjhakb7_upera");
 
$email = $_POST['loginmail'];
$password = $_POST['loginpassword'];

$email = stripcslashes($email);
$password = stripcslashes($password);

if (isset($_POST['loginbtn']))
{
    $sql = "SELECT * FROM registertable WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);
                  
    
         if (mysqli_num_rows($result)>0)
           {
             
            $_SESSION['emailadd'] = $email;
            include 'homepage.php';
            
            }
         else
            {
            include 'index.php';
            } 
}
?>


<script> 
  alert("<?php 
        
        
        $email = $_POST['loginmail'];
        $password = $_POST['loginpassword'];
 
    $sql = "SELECT * FROM registertable WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);        
        
        if (mysqli_num_rows($result)>0)
        {
        echo "$email You Have Successfully Logined!";
        }
    else
        {
        echo "E-mail or Password is Invalid !";
        }
        
        ?>"); 
        
        console.log = function(){};
</script>



