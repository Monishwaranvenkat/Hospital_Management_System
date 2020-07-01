<?php
$fname="";
$lname="";
$email="";
$phone="";
$dob="";
$gender="";
$pss="";
$cnf_pss="";
 $err=[];
if(isset($_POST["submit"]))
{
    if(isset($_POST["gender"])==1){
        $gender=$_POST["gender"];
    };
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $dob=$_POST["dob"];
    $pss=$_POST["pss"];
    $cnf_pss=$_POST["cnf-pss"];
    if (empty($fname)) { $err["fname"]="First name is required"; }
    if (empty($lname)) { $err["lname"]= "last name is required"; }
    if (empty($gender)) { $err["gender"]= "gender is required"; }
    if (empty($dob)) { $err["dob"]= "Date of birth is required"; }
    if (empty($phone)) { $err["phone"]= "phone number is required"; 
    }
    elseif(!preg_match_all("/^[6-9]+[0-9]/",$phone) or strlen($phone)!=10){
        $err["phone"]= "please enter the valid phone"; 
    }
    if (empty($email)) { $err["email"]="Email is required"; }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $err["email"]="Enter valid Email";
                }
    if (empty($pss)) { $err["pss"]= "Password is required"; }
    if ($pss!= $cnf_pss or $cnf_pss=="") {
    $err["cnf-pss"]="The two passwords do not match";
    }
     include("connect.php");
     $user_check_query = "SELECT * FROM client WHERE email='$email' OR phone='$phone' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     if ($user) 
     { // if user exists
        if ($user['phone'] === $phone) {
            $err["phone"]="phone number already exist already exists";
        }
        if ($user['email'] === $email) {
        $err["email"]="email already exists";
        }
    }
    if(empty($err)){
       //$cnf_pss=md5($cnf_pss);
        $query="insert into client(fname,lname,dob,gender,email,phone,pss) values
        ('$fname','$lname','$dob','$gender','$email','$phone','$cnf_pss')";
        if (mysqli_query($conn, $query)) {
             echo "inserted";
        }else{
          echo "not inserted";
        }
    }
     mysqli_close($conn);
}
?>