<?php

if(isset($_post["submit"]))
{
$servername="localhost";
$user="root";
$pss="";
echo "test";
$conn=mysqli_connect($servername,$user,$pss,"hospital");

if(!$conn){
    die("connection failed".mysqli_connect_error());
    
}
$fname=$_post['fname'];
$lname=$_post['lname'];
$email=$_post['email'];
$mobile=$_post['mobile'];
$college=$_post['college'];
$dept=$_POST['dept'];
$address=$_post['address'];
$pass=$_post['pass'];

  $sql="INSERT INTO 'registration'('First Name', 'Lirst Name', 'Email', 'Mobile No', 'College','Department', 'Address', 'Password') VALUES ('$fname','$lname','$email',$mobile,'$college','$dept','$address','$pass')";
      if (mysqli_query($conn,$query)) 
	  {
             echo "inserted";
        }else{
          echo "not inserted";
        }
     mysqli_close($conn);

}
?>
<html>
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
            </script>
        <script src="form2.js" ></script>
        <style>
            input ,p{
                float: left;
                margin: 3;
            }
        </style>
    </head>
    <body>
        <table>
            <form name="form" action="reg.php"   method="post">
      <tr>
  <div class="container">
    <h1>Registration Form</h1>
    <hr>
          <td>First Name :</td>
          <td>
              <input type="text" id="fname" name="fname" onkeyup="vfname()">
                <p id="fname-warn"></p>
        </td>
      </tr> 
      <tr>
          <td>Last Name :</td>
          <td>
              <input type="text" id="lname" onkeyup="vlname()">
            <p id="lname-warn"></p>
        </td>
      </tr> 
      <tr>
          <td>Email :</td>
          <td>
              <input type="text" id="email" onkeyup="vemail()">
            <p id="email-warn"></p>
        </td>
      </tr>
      <tr>

	  <td>Mobile No :</td>
          <td>
              <input type="text" id="mobile" onkeyup="vmobile()">
            <p id="mobile-warn"></p>
        </td>
      </tr>
      <tr>
	<td>College :</td>
          <td>
              <input type="text" id="college" onkeyup="vcollege()">
            <p id="college-warn"></p>
        </td>
      </tr>
      <tr>
	<td>Department :</td>
          <td>
              <input type="text" id="dept" onkeyup="vdept()">
            <p id="dept-warn"></p>
        </td>
      </tr>
      <tr>
	 <td>Address :</td>
          <td>
              <input type="text" id="address" onkeyup="vaddress()" 
	      <input style="height:80px;font-size:15pt;">
            <p id="address-warn"></p>
        </td>
      </tr>
      <tr>
          <td>Password :</td>
          <td>
              <input type="password" id="pass" onkeyup="vpass()">
            <p id="pass-warn"></p>
        </td>
      </tr> 
      <tr>
          <td>Confirm Password :</td>
          <td>
              <input type="password" id="cnf-pass" onkeyup="vcnfpass()">
            <p id="cnf-pass-warn"></p>
        </td>
      </tr> 
      <tr>
          <td><input type="submit" id="submit" name="submit" value="submit"></td>
      </tr> 
        </table>
</form>
    </body>
</html>