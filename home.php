
<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}
$id=$_SESSION['id'];
if (isset($_POST['appoinment'])){
    $app_date=$_POST['app_date'];
    $app_id=$_POST['app_id'];
   include("connect.php");
   $sql="update appoiment_details set app_date=' $app_date' where app_id='$app_id'";
    if (mysqli_query($conn, $sql)) {
              echo "<script>alert('appoiment modifyed')</script>";
             
        }else{
           echo "<script>alert('Something went wrong')</script>";
        }
}
if(isset($_POST["cancel"])){
    $app_id=$_POST['appid'];
   include("connect.php");
   $sql="delete from appoiment_details where app_id='$app_id'";
    if (mysqli_query($conn, $sql)) {
              echo "<script>alert('appoiment canceled')</script>";
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
    </head>

    <body>
        <div id="layout">
            <header>
                <div class="container">
                    <div class="row">
                        
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
                            <li class="active"><i class="fa fa-list-alt"></i> <a href="home.php"> appointments reserved</a> </li>
                            <li > <i class="fa fa-address-book-o"></i> <a href="appoiment.php"> book appointment</a> </li>
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
                                $sql = "SELECT ad.app_id,ad.app_date ,dd.profile_pic,dd.fname, dd.lname, dd.specialization FROM appoiment_details ad ,doctor_details dd WHERE dd.id=ad.doctor_id and ad.patient_id=
                                $id and ad.status='live' order by ad.app_date";
                                $result = mysqli_query($conn, $sql);
                                 $rowcount=mysqli_num_rows($result);
                                if (mysqli_num_rows($result)>0)
                                {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo '<div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="item-meeting">
                                        <!--Item-->
                                        <div class="avatar-doctor">
                                            <div class="avatar-image">
                                                <img src="data:image/jpeg;base64,'.base64_encode($row['profile_pic'] ).'" alt="doctor">
                                                <h4><i class="fa fa-user-md" aria-hidden="true"></i>
                                                <a href="meet-doctors.html" title="See Profile">Dr.'.$row["lname"].".".$row["fname"].'</a></h4>
                                            </div>
                                        </div>

                                        <div class="data-meeting">
                                            <ul class="list-unstyled info-meet">
                                                <li><p>no.ticket: <span>'.$row["app_id"].'</span></p></li>
                                                <li><p class="time">Datetime: <span>'.$row["app_date"].'</span></p></li>
                                                <li><p>type of appointment: <span>'.$row["specialization"].'</span></p></li>
                                                
                                                <li><div class="alert alert-info" role="alert">Observations: Dont forget the copy of identification number.</div></li>
                                            </ul>
                                            
                                            <ul class="list-unstyled btns">
                                            <form action="home.php" method="post">
                                                <input type="hidden" id="'.$row["app_id"].'" name="appid" value="'.$row["app_id"].'"/>
                                                <li><button type="submit" name="cancel" class="btn btn-red btn-xsmall "><i class="fa fa-times" aria-hidden="true"></i> cancel</button></li>
                                            
                                                <li><button type="button" class="btn btn-green btn-xsmall" data-toggle="modal" data-target="#exampleModalLong " onclick="set(\''.$row["app_id"].'\')"><i class="fa fa-pencil" aria-hidden="true"></i> modify</button></li>
                                            </ul>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                 </div>';
                                }
                             }else{
                                echo '<div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="item-meeting">
                                        

                                        <div class="data-meeting">
                                            <ul class="list-unstyled info-meet text-center">
                                                <li><div class="alert alert-info" role="alert">Nothing to show</div></li>
                                                <ul class="list-unstyled btns">
                                                    <li><a class="btn btn-green btn-xsmall" href="appoiment.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> BOOK APPOIMENT</a></li>
                                            
                                                 </ul>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                 </div>';

                             }
                                
                            ?>
                            
                <!-----modify form----->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modify  Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="home.php" method="post">
            <input type="hidden" id="app_id" name="app_id" value=""/>
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
                <!-----end modify form--->
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
             <script>
            function set(a){
                console.log(a);
                    document.getElementById("app_id").value=a;
            }
        </script>
        <!-- ======================= JQuery libs =========================== -->
       
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-sprockets.js"></script>
        <!-- Main Functions-->
        <script type="text/javascript" src="js/main.js"></script>
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
    
        
    </body>
</html>
