<!DOCTYPE HTML>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1> MY Registration Page </h1>

<form>
<table>
<tr> <td>First Name: </td>
<td> <input type="text" name= "firstname" ></td></tr>
<br>
<br>
<tr>
<td>Email: </td>
<td><input type="text" name="email"></td></tr>
<tr> <td>User Name: </td>
<td> <input type="text" name= "username" ></td></tr>
<tr>
<td>Password: </td>
<td><input type="text" name="password"></td></tr>
<tr>
<td>Confirm Password: </td>
<td><input type="text" name="confirem password"></td></tr>


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