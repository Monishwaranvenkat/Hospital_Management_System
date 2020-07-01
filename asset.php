<?php
include("connect.php");
$query="select id,fname,lname,specialization,degrees,area_of_practice from doctor_details";
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
                                                <img src="images/t1.jpg" alt="doctor">
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
                                            <form action method=\'post\'>
                                                <li><a class="btn btn-info btn-xsmall" href="modify-booked-calendar.html" id="'.$row["id"].'"><i class="fa fa-address-book-o" aria-hidden="true"></i> book appointment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Item-->
                            </div>';
}
?>