<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
*{
        box-sizing: border-box;
    }
body{
    background-color: aquamarine;
    }
#body-box{
    width: 99%;
    height: 720px;
    margin: 0 auto;
    border-color: red;
    border-width: 10px;
    border-style: groove;
    }    
#middle-div{
    width: 50%;
    height: 700px;
    margin: 0 auto;
    }
#signup-fieldset{
    width: 55%;
    height: 300px;
    margin: 0 auto;
    margin-bottom: 50px;
    margin-top: 60px;
    border-color: black;
    border-width: 2px;
    border-style: dashed;
    border-radius: 10px;
    } 
#signin-fieldset{
    width: 55%;
    height: 200px;
    margin: 0 auto;
    border-color: black;
    border-width: 2px;
    border-style: dashed;
    border-radius: 10px;
    }
table{
    margin: 0 auto;
    margin-top: 20px;
    }
td{
    font-size: 17px;
    font-family: inherit;
    }
legend{
    font-family: cursive;
    font-size: 25px;
    font-weight: bold;
    }
#submit-btn{
    width: 100px;
    height: 40px;
    margin: 0 auto;
    background-color: cadetblue;
    }
</style>
    
</head>
<body>

<div id="body-box">
    
<div id="middle-div">
<form method="post" action="register.php">
<fieldset id="signup-fieldset">
<legend>Sign Up</legend>
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name="username" required="required"></td>
</tr>
<tr>
<td>E-mail id</td>
<td><input type="email" name="email" required="required"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="tel>" name="mobile" required="required"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" required="required"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="password2" required="required"></td>
</tr>
<tr colspan="2">
<td><input type="submit" id="submit-btn" name="registerbtn" value="Register Now"></td>
</tr>
</table>
</fieldset>    
</form>
    
<form method="post" action="login.php">
<fieldset id="signin-fieldset">
<legend>Sign In</legend>
<table>
<td>E-mail id</td>
<td><input type="email" name="loginmail" required="required"></td>
<tr>
<td>Password</td>
<td><input type="password" name="loginpassword" required="required"></td>
</tr>
<tr colspan="2">
<td><input type="submit" id="submit-btn" name="loginbtn" value="Login Now"></td>
</tr>
</table>
</fieldset>    
</form>
</div>
    
</div>
  
 
    
</body>
</html>