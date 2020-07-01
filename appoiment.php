<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}
if (isset($_POST['appoinment'])){
    $id=$_SESSION['id'];
    $app_date=$_POST['app_date'];
    $doc_id=$_POST['doc_id'];
   include("connect.php");
   $result=mysqli_query($conn,"SELECT max(app_id) as ls FROM appoiment_details");
   $row = mysqli_fetch_array($result);
   $last=(int)substr($row["ls"],-4)+1;
   $app_id=date("ymd")."-".str_pad($last, 4, '0', STR_PAD_LEFT);
   $sql="insert into appoiment_details (app_id,app_date,patient_id,doctor_id,status) values('$app_id','$app_date',$id,$doc_id,'live')";
    if (mysqli_query($conn, $sql)) {
             echo "<script>alert('Booked')</script>";
        }else{
          echo "<script>alert('Something went wrong')</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>List Of Appointments</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
        <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
       <style>
           .highlight a{
  background-color: #29f274 !important;
  color: #ffffff !important;
}
       </style>
    </head>

    <body>
        <div id="layout">
            <header>
                <div class="container">
                    <div class="row">
                        <!--Logo-->
                        <div  class="logo">
                            <a href="appointments-reserved.php"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <!--Logo-->

                        <!--Header tools-->
                        <div  class="tools-top">
                            <!--Avatar-->
                            <div class="avatar-profile">
                                <div class="user-edit">
                                    <h4><?php echo $_SESSION['uname'];?>,</h4>
                                    <a href="my-account.html"><i class="fa fa-pencil"></i> edit profile</a>
                                </div>
                                <div class="avatar-image">
                                    <img src="images/banner.jpg" alt="avatar profile" class="img-responsive">
                                </div>
                            </div>
                            <!--Avatar-->

                            <ul class="tools-help">

                                <li><a href="logout.php" title="Logout"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <!--Header tools-->
                    </div>
                </div>
            </header>

            <!--Menu-->
            <nav>
                <div class="container">
                    <h4 class="navbar-brand">menu</h4>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>

                     <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <li ><i class="fa fa-list-alt"></i> <a href="home.php"> appointments reserved</a> </li>
                            <li class="active"> <i class="fa fa-address-book-o"></i> <a href="appoiment.php"> book appointment</a> </li>
                            <li> <i class="fa fa-pencil"></i> <a href="my-account.html">my account</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Menu-->

            <section class="container">
                <div class="main-container">
                    <div class="row">
                       
                        
                         <div class="listed">
                           <?php
                                include("connect.php");
                                $query="select id,fname,lname,specialization,degrees,area_of_practice,profile_pic from doctor_details";
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                            echo' <div class="row">
                                                                <!--Item-->
                                                                <div class="col-lg-12">
                                                                    <div class="item-meeting">
                                                                        <!--Item-->
                                                                        <div class="avatar-doctor">
                                                                            <div class="avatar-image">
                                                                                <img src="data:image/jpeg;base64,'.base64_encode($row['profile_pic'] ).'" alt="doctor">
                                                                            </div>
                                                                        </div>

                                                                        <div class="data-meeting">
                                                                            <ul class="list-unstyled info-meet">
                                                                                <li><p>NAME <span>Dr.'. $row["lname"].".".$row["fname"].'</span></p></li>
                                                                                <li><p>Spazelization<span>'.$row["specialization"].'</span></p></li>
                                                                                <li><h4 class="time">Area of practice</h4><p><span>'.$row["area_of_practice"].'.</span></p></li>
                                                                                <br><br>
                                                                            </ul>
                                                                            
                                                                            <ul class="list-unstyled btns">
                                                                            <form action="appoiment.php" method=\'post\'>
                                                                                <input type="hidden" name="doctor_id" value="'.$row["id"].'">
                                                                                <li><button class="btn btn-info btn-xsmall" type="button" name="app" data-toggle="modal" data-target="#exampleModalLong" onclick="set('.$row["id"].')"><i class="fa fa-address-book-o" aria-hidden="true"></i>book appointment</button></li>
                                                                            </form>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!--Item-->
                                                            </div>';
                                }
                                ?>

   

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Book Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="appoiment.php" method="post">
            <input type="hidden" id="doc_id" name="doc_id" value=""/>
                                <div class="form-group">
                                    <label for="datepicker" class="col-form-label">Choose Date of Appointment</label>
                                    <input placeholder="Date" name="app_date" class="date form-control" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
                                        required="" />
                                </div>
                                <div class="form-group">
                                    <select required="" name="app_time" class="form-control">
                                        <option value="">Select Time</option>
                                        <option value="1">08:00-8:30</option>
                                        <option value="2">08:30-9:00</option>
                                        <option value="3"> 09:00-9:30</option>
                                        <option value="4">09:30-10:00</option>
                                    </select>
                                </div>
                                <input type="submit" value="Book" name="appoinment" class="btn_apt">
                            </form>
      </div>
    </div>
  </div>
</div>
                           
                        </div>
                         <aside>
                            <div class="elements-aside gray-color">
                                <ul>
                                    <li class="color-1">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        <h4>Emergency Case</h4>
                                        <p>If you need a doctor urgently outside of medicenter opening hours, call emergency appointment number for emergency service.</p>
                                    </li>
                                    <li class="color-2">
                                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                        <h4>Working Time</h4>
                                        <p>Monday to Friday <span> 05:00am to 10:00pm</span></p>
                                        <p>Weekends <span> 09:00am to 12:00pm</span></p>
                                    </li>
                            </div>
                        </aside>
                    
                    </div>

                    
                     
                </div>
                
               
              
            </section>
        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        
        <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        var disabledDates = ["2020-04-16"];
        $(function () {
            $("#datepicker,#datepicker1").datepicker(
                {
                    minDate:0,
                    dateFormat: 'yy-mm-dd' ,
                    beforeShowDay: function(date){
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    if(disabledDates.indexOf(string) == -1){
                            return [true,"highlight"]
                    }else{
                        return[false,"highlight","booked"]
                    }
                    
                    }
                }
            );
        });
    </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-sprockets.js"></script>
        <!-- Main Functions-->
        <script>
            function set(a){
                    document.getElementById("doc_id").value=a;
            }
        </script>
        
    </body>
</html>
