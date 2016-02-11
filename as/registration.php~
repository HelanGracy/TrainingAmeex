<?php	include "class.user.php"; ?>
	
<html>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	 
	<style><!--
	 #container{width:400px; margin: 0 auto;}
	--></style>
	<div id="container">
	<h1>Registration Here</h1>
	<form action="" method="post" name="reg">
	<table>
	<tbody>

	<tr>
	<th>User Name:</th>
	<td><input type="text" name="name" required="" /></td>
	</tr>
	<tr>
	<tr>
	<th>Password:</th>
	<td><input type="password" name="pass" required="" /></td>
	</tr>
	<th>ConfirmPassword:</th>
	<td><input type="password" name="cnfpass" required="" /></td>
	</tr>

     <div id="a1">
     <input type="file" name="img" /><br/>
     </div>
	<input type="submit" name="submit" value="Register" /><br>
	<a href="index.php">Already registered! Click Here!</a>	</tbody>
	</table>
	</form></div>
        </html>

<?php
 if (isset($_REQUEST['submit'])){
	  extract($_REQUEST);
          $iname=$_FILES['img']['name'];
	  $type=$_FILES['img']['type'];

	  $size=($_FILES['img']['size'])/1024;

	  $ext=end(explode('.',$iname));
	    if (($ext == "gif")
	       || ($ext == "jpeg")
	       || ($ext == "jpg")
	       || ($ext =="png")
	       && ($size > 30))
	         {

	           $iname=uniqid();
	           //$ext=end(explode('.',$name));
	           $fullname=$iname.".".$ext;
	           $target="upload/";
	           $uri=$target.$fullname;
		if(move_uploaded_file($_FILES['img']['tmp_name'],$uri))
		{
                 //echo "Success<br>";
                 //echo "Image id: $iname"."<br>";
                }
                else
                  {
                    echo "Failed";
                  }
              }
         $user = new User(); // Checking for user logged in or not
	 $register = $user->reg_user($name,$pass,$cnfpass);
         $uid=$_SESSION['uid'];

         $useravatar=new useravatar();
         $imagereg=$useravatar->store($uid,$iname,$uri,$size,$type);
	 if ($register && $imagereg) {
	 // Registration Success
	 echo 'Registration successful <a href="index.php">Click here</a> to login';
	 } 
       else {
	 // Registration Failed
	 echo 'Registration failed. Username already exits please try again';
	 }}
	 
?>
