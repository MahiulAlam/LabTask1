<!DOCTYPE HTML>
<html>
<body>
<h1> MY Registration Page </h1>

<?php
echo "My PHP Code";
$validatename="";
$validatepassword="";
$validatepasswordmatch="";
$validateconfirmpassword="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    if(empty($name))
    {
        $validatename="you must enter name";
        
    }
    else if(strlen($name)<5)
    {
        $validatename="your name should not less then 5 ";   
    }
    else
    {
        $validatename="your name is ".$name;
    }

    $password=$_REQUEST["password"];
    if(empty($password))
    {
        $validatename="you must enter password";
        
    }
    else if(strlen($password)<6 )
    {
        $validatename="your name should not less then 6 ";   
    }
    
    else
    {
        $validatepassword="your password is ".$password;
    }

    $confirm =$_REQUEST[confiem];
    if($validatepassword==$validatepasswordmatch)
    {

      
    }

  }

?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post">
<table>
<tr> <td>First Name: </td>
<td> 
<input type="text" name="fname"> <?php echo $validatename; ?> </td></tr>
<br>
<br>

<tr>
<td>Email: </td>
<td><input type="text" name="email"></td></tr>

<tr> <td>User Name: </td>
<td> <input type="text" name= "username" ></td></tr>
<tr>
<td>Password: </td>
<td><input type="text" name="password"> <?php echo $validatepassword; ?> </td></tr>
<tr>
<td>Confirm Password: </td>
<td><input type="text" name="confiem password"></td></tr>


</table>
<br>
<h1>Gernder</h1>

<input type="radio" id="male" name="gender" value="male"> Male 
  <input type="radio" id="female" name="gender" value="female"> Female 
 <input type="radio" id="other" name="gender" value="other"> Other<br> <br>
 <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>
  <input type="submit" value="Submit"> <input type="reset" value="Reset">

</form> 


</body>

</html>
