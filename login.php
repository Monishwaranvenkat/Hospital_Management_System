<html>
    <head>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
    if(isset($_POST["submit"]))
{     
        $email=$_POST["email"];
        $pss=$_POST["pss"];
        if(!empty($email) and !empty($pss)){
        $sql = "select count(*) as cntUser,id,fname,lname from client where email='$email' and pss='$pss'";
        include("connect.php");
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count > 0){
            session_start();
            $_SESSION['id'] =$row['id'];
            $_SESSION['uname'] = $row['fname']." ".$row['lname'];
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }
        }else{
            echo "please fill all the fields";
        }
    }
        ?>
        <div class="container">
            <div class="row">
                <h1>login</h1>
                <div class="col-3">
                    <form action="login.php" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  name="email" id="email">
                   
                        </div>
                        <div class="form-group">
                            <label for="pss">Password</label>
                            <input type="password" class="form-control" name="pss" id="pss"/>
                    
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn-lg" name="submit" value="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>