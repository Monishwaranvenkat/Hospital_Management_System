<?php
$fname="";
$lname="";
$email="";
$phone="";
$dob="";
$gender="";
$country="";
$state="";
$city="";
$street="";
$door_no="";
$pss="";
$cnf_pss="";
$specialization="";
$degree="";
$dis="";
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
    $alt_phone=$_POST["alt-phone"];
    $dob=$_POST["dob"];
    $pss=$_POST["pss"];
    $country=$_POST["country"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $street=$_POST["street"];
    $door_no=$_POST["door"];
    $specialization=$_POST["specialization"];
    $degree=$_POST["degree"];
    $dis=$_POST["dis"];
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
   
    if((!empty($alt_phone)) and (!preg_match_all("/^[6-9]+[0-9]/",$alt_phone) or strlen($alt_phone)!=10)){
        $err["alt-phone"]= "please enter the valid phone"; 
    }elseif((!empty($alt_phone)) and ($alt_phone==$phone)){
         $err["alt-phone"]= "phone number and alternative phone are same"; 
    }
    if (empty($country)) { $err["country"]="Country is required"; }
    if (empty($state)) { $err["state"]="State is required"; }
    if (empty($city)) { $err["city"]="City is required"; }
    if (empty($street)) { $err["street"]="Street is required"; }
    if (empty($door_no)) { $err["door"]="Door number is required"; }
    if (empty($specialization)){ $err["specialization"]="specialization required";}
    if (empty($degree)){ $err["degree"]="degree required";}
    if (empty($dis)){ $err["dis"]="area of practice is required";}
    if (empty($email)) { $err["email"]="Email is required"; }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $err["email"]="Enter valid Email";
                }
    if (empty($pss)) { $err["pss"]= "Password is required"; }
    if ($pss!= $cnf_pss or $cnf_pss=="") {
    $err["cnf-pss"]="The two passwords do not match";
    }
    
     include("connect.php");
     $user_check_query = "SELECT * FROM doctor_details WHERE email='$email' OR phone='$phone' OR alt_phone='$alt_phone' OR phone='$alt_phone' OR alt_phone='$phone' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     if ($user) 
     { // if user exists
        if ($user['phone'] === $phone or $user['alt_phone']==$phone) {
            $err["phone"]="phone number already exist ";
        }
        if ($user['phone'] === $alt_phone or $user['alt_phone']==$alt_phone) {
            $err["alt-phone"]="phone number  already exist";
        }
        if ($user['email'] === $email) {
        $err["email"]="email already exists";
        }
    }
    if(empty($err)){
       
       if(empty($alt_phone))
       {
        $query="INSERT INTO doctor_details (fname,lname,dob,gender, phone, email, country,state, city, street, door_no, specialization, degrees, area_of_practice) values
        ('$fname','$lname','$dob','$gender',$phone,'$email','$country','$state','$city','$street','$door_no','$specialization','$degree','$dis')";
       }else{
        $query="INSERT INTO doctor_details (fname,lname,dob,gender, phone, alt_phone, email, country,state, city, street, door_no, specialization, degrees, area_of_practice) values
        ('$fname','$lname','$dob','$gender',$phone,$alt_phone,'$email','$country','$state','$city','$street','$door_no','$specialization','$degree','$dis')";
       }
        if (mysqli_query($conn, $query)) {
             echo "inserted";
        }else{
          echo "not inserted";
        }
    }
     mysqli_close($conn);
}
?>